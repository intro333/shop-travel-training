<?php
/**
 * В проекте бывают нужны глобальные вспомогательные функции.
 *
 * сделал вот по этому мануалу:
 * http://stackoverflow.com/a/28290359/5914609

 Добавить в composer.json
    "autoload": {
        "classmap": [
            ...
        ],
        "psr-4": {
            "App\\": "app/"
        },
        "files": [
            "app/helpers.php" // <---- ADD THIS
        ]
    }
 * и запустить команду composer dump-autoload
 */

/*
 * Функция преобразует киррилицу в UTF-8 и изменяет первый символ строки на заглавный.
 */
function mb_ucfirst($str, $enc = 'utf-8') {
    return mb_strtoupper(mb_substr($str, 0, 1, $enc), $enc).mb_substr($str, 1, mb_strlen($str, $enc), $enc);
}