<?php
/**
 * абстрактный класс для марок машин
 */

namespace App\Services\Cars;


abstract class Car
{
    protected $fuel;

    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    abstract public function refuel($litres);
}