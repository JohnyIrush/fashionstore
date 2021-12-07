<?php

namespace App\Providers;

use App\Providers\CreateOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateOrderEventListener
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
     * @param  \App\Providers\CreateOrderEvent  $event
     * @return void
     */
    public function handle(CreateOrderEvent $event)
    {
        //
    }
}
