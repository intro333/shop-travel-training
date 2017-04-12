<?php
/**
 * Класс реализует интерфейс Fuel и задаёт цену для Бензина
 */

namespace App\Services\Cars;


class Petrol implements Fuel
{
    /*
     * Получить цену за бензин.
     */
    public function getPrice()
    {
        return 38;
    }
}