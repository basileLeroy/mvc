<?php
declare(strict_types = 1);

/*require_once './Modal/business/Coacher.php';
require_once './Modal/business/Student.php';*/
/*require_once '../Modal/repository/UserRepository.php';*/
/*require_once '../Modal/business/User.php';
require_once '../Modal/repository/CoacherRepository.php';*/

require_once './Modal/business/Challenge.php';
require_once './Modal/repository/ChallengeRepository.php';

class ChallengeController {

    private $challengeRepository;
   // public $loginError;
    private $message;

    /**
     * UserController constructor.
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->challengeRepository = new ChallengeRepository($databaseManager);
        $this->message = "";
    }

    public function render() {

        require "View/create_challenge.php";

        if (isset($_POST["addChallenge"])) {

        }


    }

 /*   public function renderCreateView($get, $post)
    {
        require "View/create_challenge.php";

       // header("location: View/create_challenge.php");
    }*/

  /*  public function render()
    {
        //this is just example code, you can remove the line below

        $user = $this->login($_GET['email'], $_POST['password']);

        if ($user) {
            $_SESSION["logginUserId"] = $user->getId();
            $_SESSION["logginUserName"] = $user->getUsername();
            // $_SESSION['user'] = serialize((array) $user);
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        $this->renderByUserRole($user);
        exit();
    }*/

    public function login($username, $password)
    {
        return $this->userRepository->find($username,$password);
    }

    public function renderByUserRole($user)
    {
        if ($user)
        {
            switch ($user->getRoleId()) {
                case 1:
                    require_once "./View/coach_profile.php";

                    break;
                case 2:
                    require_once "./View/student_profile.php";
                    break;
            }
            $this->sucessMessage();
        } else {
            require_once "./View/public_homepage.php";
            $this->errorMessage();
        }
    }

    public function errorMessage()
    {
        $this->message = '<h3 style="color: red; font-size: 16px;">INVALID LOGIN!</h3>';
        return $this->message;
    }

    public function sucessMessage()
    {
        $this->message = '<h3 style="color: green; font-size: 16px;">WELCOME!</h3>';
        return $this->message;
    }

    public function getMessage(){
        return $this->message;
    }


}