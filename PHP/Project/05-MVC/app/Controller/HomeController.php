<?php

namespace PetrusHandika\Learning\PHP\MVC\Controller;

class HomeController
{
    public function index(): void
    {
        echo "HomeController : index";
    }

    function hello(): void
    {
        echo "HomeController : hello";
    }

    function world(): void
    {
        echo "HomeController : world";
    }
}

