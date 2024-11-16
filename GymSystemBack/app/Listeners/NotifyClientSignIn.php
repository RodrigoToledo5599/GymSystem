<?php

namespace App\Listeners;

use App\Events\ClientSignIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyClientSignIn
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
    public function handle(ClientSignIn $event): void
    {
        return $event->user;
    }
}
