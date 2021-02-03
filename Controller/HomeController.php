<?php
declare(strict_types = 1);
require_once './Modal/repository/RegisterRepository.php';


class HomeController
{
    private $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;

    }

    public function render(array $get, array $post)
    {
        // stuff
        require 'View/public_homepage.php';
    }
}