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

    public function getWatchSchedule()
    {
        $connect = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');

        //$data = array();

        $query = "SELECT * FROM events ORDER BY id";

        $statement = $connect->prepare($query);

        $statement->execute();

        $result = $statement->fetchAll();

        foreach($result as $row)
        {
        $data[] = array(
        'id'   => $row["id"],
        'title'   => $row["title"],
        'start'   => $row["start_event"],
        'end'   => $row["end_event"]
        );
        }

        echo json_encode($data);
        
    }

       


}