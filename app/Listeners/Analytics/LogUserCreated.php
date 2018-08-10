<?php

namespace App\Listeners\Analytics;

use App\Events\UserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Segment;

class LogUserCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $user = $event->user;

        Segment::identify([
            'userId' => $user->id,
            'traits' => [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role ? $user->role : null
            ]
        ]);

        Segment::track([
            'userId' => $user->id,
            'event' => 'user_created',
            'properties' => [
                'created_at' => $user->created_at,
            ]
        ]);

        Segment::flush();
    }
}
