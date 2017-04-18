<?php
/*
 * Реализация обработки заказа.
 */
namespace App\Http\Controllers;

use App\Events\OrderWasChosen;
use App\Services\Factory\OrderFactory;
use App\Services\Mailers\Mailer;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderWithRealizationController extends Controller
{
    public function sendOrder($email)
    {
        $orderFactory = new OrderFactory(
            User::with('userDetails')
                ->where('email', '=', $email)
                ->get()->first()
        );

        event(new OrderWasChosen($orderFactory));

    }
}
