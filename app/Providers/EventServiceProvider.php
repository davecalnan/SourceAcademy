<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserCreated' => [
            'App\Listeners\Analytics\IdentifyUser',
            'App\Listeners\Analytics\LogUserCreated',
        ],
        'App\Events\UserSignedUp' => [
            'App\Listeners\Analytics\IdentifyUser',
            'App\Listeners\Analytics\LogUserSignedUp',
        ],
        'App\Events\OrganisationCreated' => [
            'App\Listeners\Analytics\LogOrganisationCreated',
        ],
        'App\Events\ProjectCreated' => [
            'App\Listeners\Analytics\LogProjectCreated',
        ],
        'App\Events\UserPasswordUpdated' => [
            'App\Listeners\Analytics\LogUserPasswordUpdated',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
