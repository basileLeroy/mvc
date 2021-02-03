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
// require_once 'Controller/WatchController.php';
// require_once 'Modal/repository/CoacherRepository.php';

// require_once 'Controller/LoginController.php';

// require_once 'Modal/DatabaseManager.php';

$email = $password = "";
$email_err = $password_err = "";

$databaseManager->connect();

$result = null;

if (empty($_GET) || $_GET["page"] == "login") {
    $homepageController = new HomeController($databaseManager);
    $homepageController->render($_GET, $_POST);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login'])){
        $userController = new UserController($databaseManager);
        $userController->render($_GET, $_POST);
    }
}

if (isset($_GET['page']) && $_GET['page'] == 'register'){
    require_once 'Controller/RegisterController.php';
    require_once 'Modal/repository/RegisterRepository.php';
    echo "TEST";
    
    $controller = new RegisterController($databaseManager);
    $controller->render($_GET, $_POST);
}