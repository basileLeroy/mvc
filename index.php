<?php
declare(strict_types = 1);

require_once 'setup.php';

// files for log in
require_once 'Controller/UserController.php';
require_once 'Controller/BaseController.php';
require_once 'Controller/CoachController.php';
require_once 'Controller/StudentController.php';
require_once 'Modal/repository/UserRepository.php';
require_once 'Modal/business/User.php';
require_once 'Modal/business/Coacher.php';
require_once 'Modal/repository/RegisterRepository.php';

if(isset($_POST['registerNow'])) {
    //files for Registering
require_once 'View/register_profile.php';
require_once 'Controller/RegisterController.php';
require_once 'Modal/repository/RegisterRepository.php';

}

// // files for the user profiles
require_once 'Modal/repository/CoacherRepository.php';
require_once 'Controller/BaseController.php';



$email = $password = "";
$email_err = $password_err = "";

$databaseManager->connect();


$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login'])){
        $userController = new UserController($databaseManager);
        $userController->render($_GET, $_POST);
    }
    
}


if (isset($_GET['page']) && $_GET['page'] === 'register'){
    $registerController = new RegisterController($databaseManager);
    $registerController->render($_GET, $_POST);
    
}

require 'View/public_homepage.php';