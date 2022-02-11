<?php

namespace App\Modules\SupportTicketModule\Repositories;

use Illuminate\Support\ServiceProvider;

class SupportTicketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Modules\SupportTicketModule\Repositories\SupportTicketInterface', 'App\Modules\SupportTicketModule\Repositories\SupportTicketRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
