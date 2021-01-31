<?php


class LoginController
{
    private $databaseManager;
    public $loginError;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
        
    }


    public function login($email,$password)
    {

        $sql = "SELECT * FROM `user` WHERE email='$email'";

        $databaseUser = $this->databaseManager->database->prepare($sql);
        $databaseUser->execute();

        $result = $databaseUser->fetch(PDO::FETCH_ASSOC);

        switch ($result['role_id']) {
            case "1":
                if ($result['password'] == $password && $result['email'] == $email) {

                    header("Location: ./View/coach_profile.php");
                } else {

                    header("Location: ./View/public_homepage.php");
                    $this->errorMessage();

                }
                break;
            case "2":
                if ($result['password'] == $password && $result['email'] == $email) {

                    header("Location: ./View/student_profile.php");
                } else {

                    header("Location: ;/View/public_homepage.php");
                    $this->errorMessage();

                }
                break;
        }
        
    }

    public function errorMessage()
    {
        $this->loginError = '<h3 style="color: red; font-size: 16px;">INVALID LOGIN!</h3>';
        $loginError = $this->loginError;
        return $loginError;
    }
}