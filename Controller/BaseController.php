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

   
    //TODO: watch reminder

   
    public function getWatchSchedule()
    {
        $sql = "SELECT watch.id, watch.name, watch.date, students.first_name FROM watch, students WHERE students.id=watch.student_id;";

        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();
        $result = $databaseUser->fetchAll();

        foreach($result as $row)
        {
            // echo "<pre>";
            // var_dump($result);
            // echo "</pre>";
            $data[] = array(
            'id'   => $row["id"],
            'title'   => $row["first_name"],
            'start'   => $row["date"],
            );
        }

        echo json_encode($data); 
    }
}