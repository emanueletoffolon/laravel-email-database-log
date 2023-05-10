<?php

namespace EmanueleToffolon\LaravelEmailDatabaseLog\Providers;

use EmanueleToffolon\LaravelEmailDatabaseLog\Classes\EmailLogger;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;

class LaravelEmailDatabaseLogEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MessageSending::class => [
            EmailLogger::class,
        ],
    ];
}
