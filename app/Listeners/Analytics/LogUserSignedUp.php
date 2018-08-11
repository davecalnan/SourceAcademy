<?php

namespace App\Listeners\Analytics;

use App\Events\UserSignedUp;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUserSignedUp
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
     * @param  UserSignedUp  $event
     * @return void
     */
    public function handle(UserSignedUp $event)
    {
        $user = $event->user;

        Segment::track([
            'userId' => $user->id,
            'event' => 'user_signed_up',
            'properties' => [
                'created_at' => $user->created_at,
            ],
        ]);

        Segment::flush();

    }
}
