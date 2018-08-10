<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Segment;

class AnalyticsController extends Controller
{
    public function test()
    {
        $user = Auth::user();

        Segment::identify([
            "userId" => $user->id,
            "traits" => [
                "name" => $user->name,
                "email" => $user->email,
            ]
        ]);

        Segment::track([
            "userId" => $user->id,
            "event" => "Test event",
            "properties" => [
                "please_work" => true,
            ]
        ]);
    }
}
