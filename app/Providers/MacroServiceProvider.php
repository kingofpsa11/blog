<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Response;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Response::macro('cap',function ($str) {
            return Response::make(strtoupper($str));
        });
        Response::macro('contact', function($action) {
            $contact = '
            <form action="'.$action.'" method="POST">
                <input type="text"/></br>
                <input type="text"/></br>
            </form>
            ';
            return $contact;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
