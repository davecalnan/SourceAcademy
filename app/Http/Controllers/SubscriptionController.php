<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('email', $request->stripeEmail)->first();
        $organisation = $user->organisations()->first();
        $plan = Plan::where('private_name', $request->plan)->first();

        $organisation->newSubscription($plan->private_name, $plan->private_name)
               ->create($request->stripeToken, [
                   'name' => $organisation->name,
                   'email' => $user->email
               ]);

        return 'Success.';
    }
}
