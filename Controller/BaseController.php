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
        $sql = "SELECT * FROM students";

        $databaseUser = $this->databaseManager->database->prepare($sql);
       $databaseUser->execute();
        
        $result = $databaseUser->fetchAll();
    //     echo "<pre>";
    //    var_dump($result);
    //    echo "</pre>";

       return $result;
        
    }

        // echo '<h2>RESULT: </h2><pre>';
        // var_dump($databaseUser->fetch(PDO::FETCH_ASSOC));
        // echo '</pre>';

     

        // foreach($databaseUser as $result){
        //     if($result["password"]==$password){
        //         echo "correct";
        //         header("Location: ./View/student_profile.php");

        //     }else{
        //         echo "not correct";
        //     };
        // }
    


}