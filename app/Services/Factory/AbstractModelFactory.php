<?php
/**
 * Интерфейс для упаковывания объектов модели.
 */

namespace App\Services\Factory;


interface AbstractModelFactory
{
    public function getUserData();
}