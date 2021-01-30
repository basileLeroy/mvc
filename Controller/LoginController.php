<?php
require_once './setup.php';
//$databaseManager->connect();

class LoginController
{
    private $databaseManager;
   
    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    

    //if ($_POST['login'] == )
    //TODO: start database (if login submit)
    //TODO: select role of profile 


    public function login($role,$email,$password)
    {

        $sql = "SELECT * FROM $role WHERE email='$email'";
      
        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();

        $result = $databaseUser->fetch(PDO::FETCH_ASSOC);
        echo '<pre>';
        var_dump($databaseUser->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';

        // foreach($databaseUser as $result){
        //     if($result["password"]==$password){
        //         echo "correct";
        //         header("Location: ./View/student_profile.php");

        //     }else{
        //         echo "not correct";
        //     };
        // }

        switch ($role) {
            case "coaches":
                if ($result['password'] == $password && $result['email'] == $email) {

                    header("Location: ./View/coach_profile.php");
                } else {

                    echo "invalid login";
                }
                break;
            case "students":
                if ($result['password'] == $password && $result['email'] == $email) {

                    header("Location: ./View/student_profile.php");
                } else {

                    echo "invalid login";
                }
                break;
        }

         //TODO: need to put error msg if password incorrect + role not match
        
    }



}