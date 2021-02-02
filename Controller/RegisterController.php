<?php
declare(strict_types = 1);
require_once './Modal/repository/RegisterRepository.php';


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
        if (emptyRegisterInput($userName, $email, $password, $repeatPassword) !== false) {
            header("location: ../View/register_profile.php?error=Empty-fields");
            errorMessage();
            exit();
        }

        if (invalidyUsername($userName) !== false) {
            header("location: ../View/register_profile.php?error=Invalid-username");
            errorMessage();
            exit();
        }

        if (invalidEmail($email) !== false) {
            header("location: ../View/register_profile.php?error=Invalid-email");
            errorMessage();
            exit();
        }

        if (passwordMatch($password, $repeatPassword) !== false) {
            header("location: ../View/register_profile.php?error=No-matching-pwd");
            errorMessage();
            exit();
        }

        if (userExists($this->databaseManager, $userName, $email) !== false) {
            header("location: ../View/register_profile.php?error=Uid-already-exists");
            errorMessage();
            exit();
        }

        createUser($this->databaseManager, $userName, $email, $password, $userRole);
        
    }

}