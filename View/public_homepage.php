<?php 

require './setup.php';


if(!empty($_POST["login"])){

    $databaseManager->connect();
    $user = new LoginController($databaseManager);

    $role=$_POST["role"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
     $_SESSION["email"] = $_POST["email"];
    
     $user->login($role,$email, $password);

}

echo "<h2>POST</h2>";
var_dump($_POST);
echo "<h2>SESSION</h2>";
var_dump($_SESSION);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeCode2U</title>
</head>
<body>
    
    <header>
    </header>

    <form action="" method="POST">
        <h3>Log in to continue:</h3>
        <select name="role" id="">
            <option value="coaches">coach</option>
            <option value="students">student</option>

        </select><br>
        <input type="email" name="email" placeholder="your email adress">
        <br><br>
        <input type="password" name="password" placeholder="Your password">
        <br><br><br>
        <hr>

        <button type="submit" name="login" value="login" id="login">Log in</button>
    </form>

<?php// foreach ($displays as $display) {
    //echo $display["password"];
//}
?>

</body>
</html>