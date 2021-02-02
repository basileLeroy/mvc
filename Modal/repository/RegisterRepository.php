<?php

function register($databaseManager)
{
    echo "TEST B";
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
    
    $userName = $_POST["userName"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $repeatPassword=$_POST["repeatPassword"];
    $userRole = (int) $_POST['userRole'];

    if (emptyRegisterInput($userName, $email, $password, $repeatPassword) !== false) {
        $_GET['error'] = "Empty-fields";
        return $_GET['error'];
        exit();
    }

    if (invalidyUsername($userName) !== false) {
        $_GET['error'] = "Invalid-username";
        exit();
    }

    if (invalidEmail($email) !== false) {
        $_GET['error'] = "Invalid-email";
        exit();
    }

    if (passwordMatch($password, $repeatPassword) !== false) {
        $_GET['error'] = "No-matching-pwd";
        exit();
    }

    if (userExists($databaseManager, $userName, $email) !== false) {
        $_GET['error'] = "Uid-already-exists";
        exit();
    }

    header("location: index.php?page={$_GET['page']}&error={$_GET['error']}");

    createUser($databaseManager, $userName, $email, $password, $userRole);
    
}

function emptyRegisterInput($userName, $email, $password, $repeatPassword) 
{
    $result = "";
    if (empty($userName) || empty($email) || empty($password) || empty($repeatPassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidyUsername($userName)
{
    $result = "";
    // preg_match is a build in function that will check if the input only containts given attributes
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $repeatPassword)
{
    $result = "";
    if ($password !== $repeatPassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userExists($databaseManager, $userName, $email)
{
    $sql = "SELECT * FROM user WHERE username = :username OR email = :email;";

    $sqlStatement = $databaseManager->database->prepare($sql);

    if (!$sqlStatement) {
        require 'index.php?error=Stmt-Failed';
        exit();
    }

    $sqlStatement->bindParam(':username', $userName, PDO::PARAM_STR);
    $sqlStatement->bindParam(':email', $email, PDO::PARAM_STR);

    $sqlStatement->execute();
    $statementResult = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    if ($statementResult) {
        return $statementResult;
    } else {
        $result = false;

        return $result;
    }

    $sqlStatement->close();
}

function createUser($databaseManager, $userName, $email, $password, $userRole)
{
    $sql = "INSERT INTO user (username, email, password, role_id) VALUES (:username, :email, :password, :role_id)";
    

    $sqlStatement = $databaseManager->database->prepare($sql);

    if (!$sqlStatement) {
        require 'index.php?error=Stmt-Failed';
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    $sqlStatement->bindParam(':username', $userName, PDO::PARAM_STR, 255);
    $sqlStatement->bindParam(':email', $email, PDO::PARAM_STR, 255);
    $sqlStatement->bindParam(':password', $hashedpwd, PDO::PARAM_STR, 255);
    $sqlStatement->bindParam(':role_id', $userRole, PDO::PARAM_INT);

    echo "<pre>";
    var_dump($sqlStatement);
    echo "</pre>";

    $test = $sqlStatement->execute();

    echo "<pre>";
    var_dump($test);
    echo "</pre>";

    require "student_profile.php?user={$userName}&error=none";
    $sqlStatement = null;
    exit();
}

