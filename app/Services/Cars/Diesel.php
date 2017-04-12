<?php
/**
 * Класс реализует интерфейс Fuel и задаёт цену для Дизеля
 */

namespace App\Services\Cars;


class Diesel implements Fuel
{
    /*
     * Получить цену за дизель.
     */
    public function getPrice()
    {
        return 55;
    }
}