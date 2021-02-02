<?php
declare(strict_types = 1);
class LoginController {

    public function render(array $get, array $post)
    {
        //this is just example code, you can remove the line below

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view

    }


}


/*$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['databaseName']);
$databaseManager->connect();

$user = new User();*/

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
/*$userRepository = new UserRepository($databaseManager);
$user = $userRepository->get();

if (isset($_POST["add"])) {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $hp = (int) $_POST["hp"];
    $stage = $_POST["stage"];
    $info = $_POST["info"];
    $attack = $_POST["attack"];
    $cardRepository->create($name, $type, $hp, $stage, $info, $attack);
    $cards = $cardRepository->get();
}*/


/*class LoginController
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

                    header("Location: ./View/coach_profile.php?user={$result['username']}");
                } else {

                    header("Location: ./View/public_homepage.php?user={$result['username']}");
                    $this->errorMessage();

                }
                break;
            case "2":
                if ($result['password'] == $password && $result['email'] == $email) {

                    header("Location: ./View/student_profile.php?user={$result['username']}");
                } else {

                    header("Location: ;/View/public_homepage.php?user={$result['username']}");
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
}*/