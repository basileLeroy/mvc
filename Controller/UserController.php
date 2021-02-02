<?php
declare(strict_types = 1);

/*require_once './Modal/business/Coacher.php';
require_once './Modal/business/Student.php';*/
/*require_once '../Modal/repository/UserRepository.php';*/
/*require_once '../Modal/business/User.php';
require_once '../Modal/repository/CoacherRepository.php';*/

require '../Modal/repository/UserRepository.php';
require '../Modal/business/User.php';
require '../Modal/repository/CoacherRepository.php';

class UserController {

    private $userRepository;
    public $loginError;
    private $message;

    /**
     * UserController constructor.
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->userRepository = new UserRepository($databaseManager);
        $this->message = "";
    }

    public function render(array $get, array $post)
    {
        //this is just example code, you can remove the line below

        $user = $this->login($post['email'], $post['password']);

        if ($user) {
            $_SESSION["logginUserId"] = $user->getId();
            $_SESSION["logginUserName"] = $user->getUsername();
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        $this->renderByUserRole($user);
        exit;
    }

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
                    header("Location: ./View/coach_profile.php?user={$user->getUsername()}");
                    break;
                case 2:
                    header("Location: ./View/student_profile.php?user={$user->getUsername()}");
                    break;
            }
            $this->sucessMessage();
        } else {
            header("Location: ./index.php");
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