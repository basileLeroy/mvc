<?php 

require '../setup.php';
echo"<h2>POST</h2>";
var_dump($_POST);
echo"<h2>SESSION</h2>";
var_dump($_SESSION);

$databaseManager->connect();
$user = new BaseController($databaseManager);

if(!empty($_SESSION["email"])){
    $email=$_SESSION["email"];
    $student = $user->getName("students", $email);
}

$watches = $user->getWatchSchedule();







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


    <!-- watch schedule -->
    <table>
        
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>

            </tr>
        
        
            <tr>
                <?php foreach ($watches as $watch) {?>

                    <td> <?php if($watch["id"] <= 5){
                    echo $watch["first_name"]; ?> </td>
                <?php }?>
                <?php }?>

                    <td>  </td>
                    <td>  </td>
            </tr>
            
            
    


        <tr>
                <?php foreach ($watches as $watch) {?>
                    <?php if($watch["id"] >= 6 && $watch["id"] <=10){?>
                        <td> <?php 
                    echo $watch["first_name"]; ?> </td>
                <?php }?>
                   <?php  }?>

                    

                    <td>  </td>
                    <td>  </td>
            </tr>

            <tr>
                <?php foreach ($watches as $watch) {?>
                    <?php if($watch["id"] >11){?>
                        <td> <?php 
                    echo $watch["first_name"]; ?> </td>
                <?php }?>
                   <?php  }?>

                    

                    <td>  </td>
                    <td>  </td>
            </tr>
        
    </table>


</body>

</html>