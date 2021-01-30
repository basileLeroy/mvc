<?php
require_once './setup.php';

class BaseController
{
    private $databaseManager;
   
    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    //TODO: select admin role



    //TODO: update database as administrator

    //TODO: watch schedule
    //TODO: watch reminder


}