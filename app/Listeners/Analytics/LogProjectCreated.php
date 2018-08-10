<?php

namespace App\Listeners\Analytics;

use App\Events\ProjectCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Segment;

class LogProjectCreated
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
     * @param  ProjectCreated  $event
     * @return void
     */
    public function handle(ProjectCreated $event)
    {
        $user = $event->user;
        $project = $event->project;

        Segment::track([
            'userId' => $user->id,
            'event' => 'project_created',
            'properties' => [
                'project_id' => $project->id,
                'project_organisation_id' => $project->organisation_id,
                'project_name' => $project->name,
                'project_slug' => $project->slug,
                'project_type' => $project->type ? $project->type : null,
                'project_options' => $project->options
            ]
        ]);

        Segment::flush();
    }
}
