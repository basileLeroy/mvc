<?php
declare(strict_types = 1);

//With the fullcalendar.js php cannot call directly inside script tag
//create this controller to with the return of data array for the input in javascript
require '../setup.php';
require 'BaseController.php';


<<<<<<< HEAD
=======
require_once '../setup.php';
>>>>>>> a3beaea6d7ee993079d3f3862013a5fbe45f1334


$databaseManager->connect();

$user = new BaseController($databaseManager);

$user->getWatchSchedule();



  
?>
