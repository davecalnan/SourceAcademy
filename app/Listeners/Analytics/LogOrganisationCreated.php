<?php

namespace App\Listeners\Analytics;

use App\Events\OrganisationCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Segment;

class LogOrganisationCreated
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
     * @param  OrganisationCreated  $event
     * @return void
     */
    public function handle(OrganisationCreated $event)
    {
        $user = $event->user;
        $organisation = $event->organisation;

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
            'event' => 'organisation_created',
            'properties' => [
                'organisation_id' => $organisation->id,
                'organisation_name' => $organisation->name,
                'organisation_slug' => $organisation->slug,
                'organisation_created_at' => $organisation->created_at,
            ]
        ]);

        Segment::flush();
    }
}
