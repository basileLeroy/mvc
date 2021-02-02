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

    public function getName($email)
    {
        $sql = "SELECT * FROM $role where email='$email'";

        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();

        $result = $databaseUser->fetch(PDO::FETCH_ASSOC);
       
        return $result;
    }

    public function getWatchSchedule()
    {
        //TODO: change the $sql for the left join with students table instead of user table

        $sql = "SELECT * FROM watch LEFT JOIN user ON watch.user_id = user.id WHERE user.role_id=2";

        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();
        $result = $databaseUser->fetchAll();

        foreach($result as $row)
        {
            $data[] = array(
            'id'   => $row["id"],
            'title'   => $row["username"],
            'start'   => $row["date"],
            );
        }

        echo json_encode($data); 
    }
}