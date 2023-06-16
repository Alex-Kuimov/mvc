<?php
namespace App;

use JetBrains\PhpStorm\NoReturn;

class Http
{
    #[NoReturn] public static function redirect($page)
    {
        header('Location: ' . APP_URL . $page);
        exit();
    }
}
