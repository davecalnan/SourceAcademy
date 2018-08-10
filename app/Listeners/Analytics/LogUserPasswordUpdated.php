<?php

namespace App\Listeners\Analytics;

use App\Events\UserPasswordUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Segment;

class LogUserPasswordUpdated
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
     * @param  UserPasswordSet  $event
     * @return void
     */
    public function handle(UserPasswordUpdated $event)
    {
        $user = $event->user;

        Segment::track([
            'userId' => $user->id,
            'event' => 'user_password_set',
            'properties' => [
                'updated_at' => $user->updated_at,
            ]
        ]);

        Segment::flush();
    }
}
