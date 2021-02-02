<?php
declare(strict_types = 1);

require_once 'setup.php';

require_once 'View/register_profile.php';
require_once 'Controller/RegisterController.php';
require_once 'Modal/repository/RegisterRepository.php';

require_once 'Controller/UserController.php';
require_once 'Modal/repository/UserRepository.php';
require_once 'Modal/business/User.php';
require_once 'Modal/repository/CoacherRepository.php';





// require_once 'Controller/LoginController.php';

// require_once 'Modal/DatabaseManager.php';

$email = $password = "";
$email_err = $password_err = "";

$databaseManager->connect();

$userController = new UserController($databaseManager);
$result = null;


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if ($email_err === "" && $password_err === "") {
//         $userController->render($_GET, $_POST);
//     }
// }
$controller = "";
if (isset($_GET['page']) && $_GET['page'] === 'register'){
    $controller = new RegisterController($databaseManager);
}

// if (isset($_GET['page']) && $_GET['page'] === 'login'){
    // $controller = new LoginController();
// }

$controller->render($_GET, $_POST);

// create variable and call funtion inside it
// if (isset($_POST['login'])) {
//     $login = new LoginController;
// }

// if ( if the submit is true)
//TODO: if the login = true -> check for table name
//TODO: if table = student {$profile = "student_profile"} else if table is coach {$profile = "coach_profile"} else {$profile = "public_homepage"}
require 'View/public_homepage.php';