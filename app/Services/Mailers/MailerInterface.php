<?php
/**
 * Интерейс для отправки собщений
 */

namespace App\Services\Mailers;


interface MailerInterface
{
    public function from();

    public function to();

    public function subject();

    public function send();
}