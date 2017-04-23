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
    public function sendOrder($email, Request $request)
    {
        $user = User::with('userDetails')
            ->where('email', '=', $email)
            ->get();

        $request = [
            'order_user_id' => 1,
            'address_id'    => 1,
            'comment'       => 'До 14:00',
            'status'        => 'processed',

        ];
        $orderFactory = new OrderFactory($user, $request);

        event(new OrderWasChosen($orderFactory));

    }
}
