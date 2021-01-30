<?php


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

    public function getName($role,$email)
    {
        $sql = "SELECT * FROM $role where email='$email'";

        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();

        $result = $databaseUser->fetch(PDO::FETCH_ASSOC);
       
        return $result;
    }


}