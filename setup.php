<?php

declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'Modal/DatabaseManager.php';
require_once 'Controller/LoginController.php';
// require_once 'Controller/BaseController.php';
// require_once 'Controller/StudentController.php';
// require_once 'Controller/CoachController.php';
// require_once 'View/student_profile.php';
// require_once 'View/coach.php';
// require_once 'View/public_homepage.php';



$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['databaseName']);


