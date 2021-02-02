<?php
declare(strict_types = 1);
require_once '../Modal/repository/RegisterRepository.php';


class RegisterController
{
    private $databaseManager;
    // private $userName;
    // private $email;
    // private $password;
    // private $repeatPassword;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
        
    }

    public function register(string $userName, string $email, string $password, string $repeatPassword, int $userRole)
    {
        echo "TEST TEST";
        if (emptyRegisterInput($userName, $email, $password, $repeatPassword) !== false) {
            header("location: ../View/register_profile.php?error=Empty-fields");
            exit();
        }

        if (invalidyUsername($userName) !== false) {
            header("location: ../View/register_profile.php?error=Invalid-username");
            exit();
        }

        if (invalidEmail($email) !== false) {
            header("location: ../View/register_profile.php?error=Invalid-email");
            exit();
        }

        if (passwordMatch($password, $repeatPassword) !== false) {
            header("location: ../View/register_profile.php?error=No-matching-pwd");
            exit();
        }

        if (userExists($this->databaseManager, $userName, $email) !== false) {
            header("location: ../View/register_profile.php?error=Uid-already-exists");
            exit();
        }

        createUser($this->databaseManager, $userName, $email, $password, $userRole);
        
    }

    // public function getErrorMEssage()
    // {
    //     errorMessage();
    // }

    function errorMessage()
    {
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {

                case 'Empty-fields':
                    echo '<h3 style="color: red; font-size: 16px;">FILL IN ALL FIELDS!</h3>';

                    break;

                case 'Invalid-username':
                    echo '<h3 style="color: red; font-size: 16px;">INVALID USERNAME!</h3>';

                    break;

                case 'Invalid-email':
                    echo '<h3 style="color: red; font-size: 16px;">INVALID EMAIL!</h3>';

                    break;

                case 'No-matching-pwd':
                    echo '<h3 style="color: red; font-size: 16px;">PASSWORDS DON\'T MATCH!</h3>';

                    break;

                case 'Uid-already-exists':
                    echo '<h3 style="color: red; font-size: 16px;">ACCOUNT ALREADY EXISTS!</h3>';

                    break;
            }
        }
    }
}