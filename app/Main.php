<?php
namespace App;

use JetBrains\PhpStorm\Pure;

class Main
{
    private object $session;
    private object $database;
    private object $router;


    #[Pure] public function __construct()
    {
        $this->session = new Session();
        $this->database = new Database();
        $this->router = new Router();
    }

    public function init()
    {
        $this->session->init();
        $this->database->init();
        $this->router->init();

        echo $this->router->getData();
    }
}
