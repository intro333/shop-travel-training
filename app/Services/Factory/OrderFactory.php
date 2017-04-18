<?php

namespace App\Services\Factory;


use App\User;
use Illuminate\Database\Eloquent\Model;

class OrderFactory implements AbstractModelFactory
{
    public $user;

    /**
     * OrderFactory constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getUserData()
    {
        $userDetails = $this->user->userDetails;

        $data = [
            'email' => $this->user->email,
            'fname' => $userDetails->fname,
            'sname' => $userDetails->sname,
            'phone' => $userDetails->phone,
        ];

        return $data;
    }
}