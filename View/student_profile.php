<?php 

require '../setup.php';
echo"<h2>POST</h2><br>";
var_dump($_POST);
echo"<h2>SESSION</h2><br>";
var_dump($_SESSION);

$databaseManager->connect();
$user = new BaseController($databaseManager);

if(!empty($_SESSION["email"])){
    $email=$_SESSION["email"];
    $student = $user->getName("students", $email);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student's dashboard</h1>
<p>Welcome, 
<?php echo $student["first_name"];?>
</p>
    
</body>
</html>