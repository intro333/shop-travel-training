<?php
/**
 * Реализация интерфейса MailerInterface.Этот класс использует фасад Mail.
 */

namespace App\Services\Mailers;

use App\Services\Factory\AbstractModelFactory;

class Mailer implements MailerInterface
{
    public $model;

    /**
     * Mailer constructor.
     * @param AbstractModelFactory $model
     */
    public function __construct(AbstractModelFactory $model)
    {
        $this->model = $model->getUserData();
        $this->send();
    }

    public function from() {
        return $this->model['email'];
    }

    public function to() {
        return $this->model['email'];
    }

    public function subject() {
        return $this->model['fname'] . " " . $this->model['sname'];
    }

    public function send() {
        $model = $this->model;
        \Mail::send('main.emails.reminder', ['model' => $model], function ($message) use ($model) {
            $message->from($this->from(), $model['fname']);
            $message->to($this->to(), $model['sname'])->subject($this->subject());
        });
    }
}