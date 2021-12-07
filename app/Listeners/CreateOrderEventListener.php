<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

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
     * @param  \App\Events\CreateOrderEvent  $event
     * @return void
     */
    public function handle(CreateOrderEvent $event)
    {
        Log::info('ID' . ($event->transactiondetails['payment_id']));
        $order = new Order();
        $order->order = serialize(session('cart'));
        # $order->address_id = 1;
        $order->user_id = Auth::user()->id;
        $order->status = "Awaiting Delivery";
        $order->payment_id = $event->transactiondetails['payment_id'];
        $order->transaction_id = $event->transactiondetails['transaction_id'];

        User::find(Auth::user()->id)->orders()->save($order);
        session(['cart' => null]);
    }
}
