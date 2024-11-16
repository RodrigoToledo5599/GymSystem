<?php

namespace App\Listeners;

use App\Events\UserLogged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyUserLogged
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLogged $event): void
    {
        print('GGGGGGGGGGGGGGGG');
    }
}
