<?php 

require '../setup.php';
// echo"<h2>POST</h2>";
// var_dump($_POST);
// echo"<h2>SESSION</h2>";
// var_dump($_SESSION);

// $databaseManager->connect();
// $user = new BaseController($databaseManager);

// if(!empty($_SESSION["email"])){
//     $email=$_SESSION["email"];
//     $student = $user->getName("students", $email);
// }

// $watches = $user->getWatchSchedule();






require 'includes/student_header.php';
?>



                

                <div class="welcome-msg">
                    <h3>Welcome, <?= $_GET["user"] ?> </h3>

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

    
               
<?php 
require 'includes/footer.php';
?>