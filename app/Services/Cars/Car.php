<?php
/**
 * абстрактный класс для марок машин
 * из статьи https://code.tutsplus.com/ru/tutorials/digging-in-to-laravels-ioc-container--cms-22167
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