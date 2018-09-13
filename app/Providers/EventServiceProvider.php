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
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        'item.created' => [

            'App\Events\ItemEvent@itemCreated',

        ],

        'item.updated' => [

            'App\Events\ItemEvent@itemUpdated',

        ],

        'item.deleted' => [

            'App\Events\ItemEvent@itemDeleted',

        ],
        'App\Events\ActionDone' => [
            'App\Listeners\ThingToDoAfterEventWasFired',
        ],
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\SendEmailNotification',
        ],
        'App\Events\ClearCache' => [
            'App\Listeners\WarmUpCache',
        ],
    ];

    protected $subscribe = [
        'App\Listeners\UserEventListener','App\Listeners\ExampleEventSubscriber'
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
