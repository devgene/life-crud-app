<?php

namespace App\Listeners;

use App\Events\CreateOrder;
use App\Models\User;
use App\Notifications\CreateOrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderEmail
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
     * @param  \App\Events\CreateOrder  $event
     * @return void
     */
    public function handle(CreateOrder $event)
    {
        $order = $event->order;
        $user=User::find($order->user_id);
        $user->notify(new CreateOrderNotification($order));

    }
}
