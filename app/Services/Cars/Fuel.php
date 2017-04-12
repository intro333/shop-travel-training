<?php
/**
 * Интерфейс для реализации топлива
 */

namespace App\Services\Cars;


interface Fuel
{
    /*
     * Получить цену за топливо.
     */
    public function getPrice();
}