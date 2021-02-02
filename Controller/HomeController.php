<?php
declare(strict_types = 1);

class HomeController
{

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require './View/public_homepage.php';
    }
}