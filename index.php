<?php
declare(strict_types = 1);

require_once 'setup.php';

// files for log in
require_once 'Controller/HomeController.php';
require_once 'Controller/UserController.php';
require_once 'Controller/BaseController.php';
require_once 'Controller/CoachController.php';
require_once 'Controller/StudentController.php';
require_once 'Modal/repository/UserRepository.php';
require_once 'Modal/business/User.php';
require_once 'Modal/business/Coacher.php';
require_once 'Modal/repository/RegisterRepository.php';

    //files for Registering

// // files for the user profiles
<<<<<<< HEAD
require_once 'Modal/repository/CoacherRepository.php';
require_once 'Controller/BaseController.php';

=======
// require_once 'Controller/WatchController.php';
// require_once 'Modal/repository/CoacherRepository.php';

// require_once 'Controller/LoginController.php';
>>>>>>> f6bed5e5e90ce523f3a32fb3b7191fdedd02cb29


$email = $password = "";
$email_err = $password_err = "";

$databaseManager->connect();

<<<<<<< HEAD

=======
>>>>>>> f6bed5e5e90ce523f3a32fb3b7191fdedd02cb29
$result = null;

if (empty($_GET)) {
    $homepageController = new HomeController($databaseManager);
    $homepageController->render($_GET, $_POST);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login'])){
        $userController = new UserController($databaseManager);
        $userController->render($_GET, $_POST);
    }
}

if (isset($_GET['page']) && $_GET['page'] = 'register'){
    require_once 'Controller/RegisterController.php';
    require_once 'Modal/repository/RegisterRepository.php';
    echo "TEST";
    
<<<<<<< HEAD
}

require 'View/public_homepage.php';
=======
    $controller = new RegisterController($databaseManager);
    $controller->render($_GET, $_POST);
}
>>>>>>> f6bed5e5e90ce523f3a32fb3b7191fdedd02cb29
