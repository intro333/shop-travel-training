<?php

namespace App\Listeners;

use App\Events\OrderWasChosen;
use App\Services\Mailers\Mailer;
use App\Services\Mailers\MailerInterface;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrder
{
    public $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MailerInterface $mailer)
    {
//        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  OrderWasChosen  $event
     * @return void
     */
    public function handle(OrderWasChosen $event)
    {
//        $this->mailer;
    }
}
