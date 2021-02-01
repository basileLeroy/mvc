<?php 

require '../setup.php';


    $databaseManager->connect();
    $user = new BaseController($databaseManager);

    $user->getWatchSchedule();
  


?>
