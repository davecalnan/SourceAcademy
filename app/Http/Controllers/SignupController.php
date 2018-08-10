<?php

namespace App\Http\Controllers;

use App\Organisation;
use App\Project;
use App\User;
use Cookie;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SignupController extends Controller
{
    protected $steps = [];

    protected $redirectTo;

    public function __construct()
    {
        $this->stepsArray = [
            'details' => [
                'validation' => [
                    'test' => !Auth::check(),
                    'errorMessage' => 'You have already signed up!'
                ],
                'completed' => false
            ],
            'password' => [
                'validation' => [
                    'test' => !Auth::check(),
                    'errorMessage' => 'You have not created an account!'
                ],
                'completed' => false
            ],
            'organisation' => [
                'validation' => [
                    'test' => true,
                    'errorMessage' => 'You already have a business!'
                ],
                'completed' => false
            ],
            'project' => [
                'validation' => [
                    'test' => Auth::check(),
                    'errorMessage' => 'You are not signed in!'
                ],
                'completed' => false
            ],
        ];
        $this->steps = array_keys($this->stepsArray);
        $this->redirectTo = '//redirect.' . env('APP_DOMAIN');
    }

    private function setQueryStringsAsCookies(Request $request)
    {
        $query = (object) $request->query();

        foreach ($query as $key => $value) {
            Cookie::queue($key, $value, 60);
        }
    }

    public function validateStep($step)
    {
        $stepsArray = $this->stepsArray;
        if ($stepsArray[$step]['validation']['test']) {
            return true;
        }
        return false;
    }

    public function signup(Request $request)
    {
        $steps = $this->steps;

        if ($request->fullUrl() !== $request->url()) // Will be false unless the request has a query string.
        {
            $this->setQueryStringsAsCookies($request);
        }

        return redirect(route('signup.step', ['step' => $steps[0]]));
    }

    public function step(Request $request, $step = null)
    {
        $stepsArray = $this->stepsArray;
        $steps = $this->steps;

        $currentStep = $this->currentStep($request);

        if (!in_array($step, $steps, true)) {
            return redirect(route('signup.step', ['step' => $steps[0]]));
        };

        foreach ($steps as $step) {
            if ($step === $currentStep) { break; }
            $stepsArray[$step]['completed'] = true;
        }

        // if ($this->validateStep($step)) {
            return view('signup.' . $step, compact('stepsArray'));
        // }
        return $stepsArray[$step]['validation']['errorMessage'];
    }

    public function action(Request $request)
    {
        $currentStep = $this->currentStep($request);

        if (method_exists($this, $currentStep)) {
            $this->$currentStep($request);
        }
        return redirect($this->nextStep($request));
    }

    public function currentStep(Request $request)
    {
        return basename($request->path());
    }

    public function lastStep()
    {
        return end($this->steps);
    }

    public function nextStep(Request $request)
    {
        $currentStep = $this->currentStep($request);
        $index = array_search($currentStep, $this->steps);

        if ($currentStep === $this->lastStep()) {
            return $this->redirectTo;
        }

        if (in_array($currentStep, $this->steps) && count($this->steps) - 1 > $index) {
            return '/signup/'.$nextStep = $this->steps[$index + 1];
        }

        return false;
    }

    public function details(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            User::updateDetails($request, $user);
        } else {
            $user = User::createWithRole($request, 'customer');
        }

        Auth::login($user, true);
    }

    public function password(Request $request)
    {
        $user = Auth::user();
        User::updatePassword($request, $user);
    }

    public function organisation(Request $request)
    {
        $request->validate(['organisation_name' => 'required|max:255']);
        
        $organisation = Organisation::create([
            'name' => $request->organisation_name,
            'slug' => slugify($request->organisation_name)
            ]);
            
        $user = Auth::user();
        $organisation->users()->attach($user);

        event(new \App\Events\OrganisationCreated($user, $organisation));
    }

    public function project(Request $request)
    {
        $request->validate(['project_name' => 'required|max:255']);

        $user = Auth::user();
        $organisation = $user->organisations()->first();

        $project = new Project;
        $project->name = $request->project_name;
        $project->slug = slugify($project->name);
        $project->organisation_id = $organisation->id;
        $project->save();

        $project->users()->attach($user);

        event(new \App\Events\ProjectCreated($user, $project));
    }
}
