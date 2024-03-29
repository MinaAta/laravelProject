<?php

namespace App\Providers;

use App\Events\myevent;
use App\Listeners\mylistener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        
            myevent::class=>[
                mylistener::class
            ]       
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
     
    }
}
