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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>

    <main>
        <nav class="logout">
            <a href="#"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
        

        <section class="glass">
            <div class="container">
                
                    
                    <div class="vertical-nav">
                        <a href="student_profile.php"><i class="fas fa-home"></i></a>
                        <a href="class_display.php"><i class="fas fa-user-friends"></i></a>
                        <a href="watch_calendar.php"><i class="fas fa-desktop"></i></a>
                        <a href="challenges_display.php"><i class="fas fa-code"></i></a>
                    </div>
                

                <div class="welcome-msg">
                    <h3>Welcome, </h3>

                    <?php //TODO: to display welcome msg?>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, dolorem!

                </div>
                <div class="exercise-list">
                    <?php //TODO: for the shortlist of exercises?>
                    <h3>Exercises</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <a href="challenges_display.php">More info<i class="fas fa-plus"></i></a>
                </div>

                <div class="watch">
                    <?php //TODO: replace the dummy text for the calendar?>
                    <h3>Watch Schedule</h3>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam iusto quam sapiente velit quo non pariatur, eligendi assumenda totam itaque.</div>

                <div class="repo">
                <?php //TODO: replace the dummy text for the repository link?>
                    <h3>Repository</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    

                <div class="student-list">
                    <?php //TODO: to display the student list of the same class ?>
                    <h3>Students</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <a href="class_display.php">More info<i class="fas fa-plus"></i></a>
                </div>

    
               
            </div>
        </section>
    </main>
    <div class="circle"></div>
</body>
</html>