<?php
/**
 * Реализация интерфейса MailerInterface.Этот класс использует фасад Mail.
 */

namespace App\Services\Mailers;

use Illuminate\Database\Eloquent\Model;

class Mailer implements MailerInterface
{
    public $model;

    public function __construct(Model $model)
    {
        dd("It's Mailer class");
        $this->model = $model;
        $this->send();
    }

    public function from() {
        return $this->model->email;
    }

    public function to() {
        return $this->model->email;
    }

    public function subject() {
        return 'Your Reminder!';
    }

    public function send() {
        $model = $this->model;
        \Mail::send('main.emails.reminder', ['model' => $model], function ($message) use ($model) {
            $message->from($this->from(), 'Your Application');
            $message->to($this->to(), $model->name)->subject($this->subject());
        });
    }
}