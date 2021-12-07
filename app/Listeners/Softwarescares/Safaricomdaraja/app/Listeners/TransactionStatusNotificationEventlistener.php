<?php

namespace App\Listeners\Softwarescares\Safaricomdaraja\app\Listeners;

use App\Events\Softwarescares\Safaricomdaraja\app\Events\TransactionStatusNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TransactionStatusNotificationEventlistener
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
     * @param  \App\Events\Softwarescares\Safaricomdaraja\app\Events\TransactionStatusNotificationEvent  $event
     * @return void
     */
    public function handle(TransactionStatusNotificationEvent $event)
    {
        //
    }
}
