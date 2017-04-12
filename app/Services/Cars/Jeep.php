<?php
/**
 * Класс расширяет абстрактный класс Car
 */

namespace App\Services\Cars;


class Jeep extends Car
{
    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}