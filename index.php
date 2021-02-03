<?php
declare(strict_types = 1);

require_once 'setup.php';

// files for log in
require_once 'Controller/HomeController.php';
require_once 'Controller/UserController.php';
require_once 'Controller/BaseController.php';
require_once 'Controller/CoachController.php';
require_once 'Controller/StudentController.php';
require 'Controller/ChallengeController.php';
require_once 'Controller/RegisterController.php';

require_once 'Modal/repository/UserRepository.php';
require_once 'Modal/repository/RegisterRepository.php';

require_once 'Modal/business/User.php';
require_once 'Modal/business/Coacher.php';
require_once 'Modal/business/Challenge.php';



    //files for Registering


// // files for the user profiles
// require_once 'Controller/WatchController.php';
// require_once 'Modal/repository/CoacherRepository.php';

// require_once 'Controller/LoginController.php';

// require_once 'Modal/DatabaseManager.php';

$email = $password = "";
$email_err = $password_err = "";

$databaseManager->connect();
<<<<<<< HEAD
$controller = new BaseController($databaseManager);
=======
>>>>>>> 878dfa27ea30c4feb94e597b3c0a2fc851803a89

$result = null;

if (empty($_GET)) {
    $homepageController = new HomeController($databaseManager);
    $homepageController->render($_GET, $_POST);
}
<<<<<<< HEAD
=======

if ($_SERVER["REQUEST_METHOD"] == "POST") {
>>>>>>> 878dfa27ea30c4feb94e597b3c0a2fc851803a89

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

    $controller = new RegisterController($databaseManager);
    $controller->render($_GET, $_POST);
}

if (isset($_GET["page"]) && $_GET["page"] === "createChallenge" ) {
    $challengeController = new ChallengeController($databaseManager);
    // $challengeController->renderCreateView($_GET, $_POST);
    $challengeController->render($_GET, $_POST);
}





// if ( if the submit is true)
//TODO: if the login = true -> check for table name
//TODO: if table = student {$profile = "student_profile"} else if table is coach {$profile = "coach_profile"} else {$profile = "public_homepage"}
require_once 'View/public_homepage.php';
=======
    
    $controller = new RegisterController($databaseManager);
    $controller->render($_GET, $_POST);
}
>>>>>>> 878dfa27ea30c4feb94e597b3c0a2fc851803a89
