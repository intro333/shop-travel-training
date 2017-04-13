<?php

namespace App\Listeners;

use App\Events\OrderWasChosen;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrder
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
     * @param  OrderWasChosen  $event
     * @return void
     */
    public function handle(OrderWasChosen $event)
    {
        dd($event->product);
    }
}
