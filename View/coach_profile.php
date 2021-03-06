<?php 
include_once 'handles/userHandle.php';

require '../setup.php';
require '../Controller/BaseController.php';
require 'includes/header_watch.php';

echo "<b>SESSION</b>";
var_dump($_SESSION);
echo "<br>";

$databaseManager->connect();
$user = new BaseController($databaseManager);

$id=$_SESSION["logginUserId"];

$userRole=$user->getUserRole($id);
$_SESSION["user_role"] = $userRole;
if($_SESSION["user_role"] == 2){
   
    require 'includes/nav_student.php';

} else if ($_SESSION["user_role"] == 1){

    require 'includes/nav_coach.php';
}

$nextWatch = $user->upComingWatch();
$class1 = $user->getClassmates(1);
$class2 = $user->getClassmates(2);




?>
<div class="resize-container">

</div>
<div class="container-profile">
    <div class="grid-profile">
        <div class="welcome-msg">
            <h3>Welcome,
                <span class="welcome-name"><?php echo $_SESSION["logginUserName"]; ?>!</span><br>
                How are you doing today?
            </h3>
        </div>
        <div class="exercise-list">
            <?php //TODO: for the shortlist of exercises?>
            <h3>Exercises</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
            <a href="">More info<i class="fas fa-plus"></i></a>
            <button type="submit" name="createChallenge"><a href="index.php?page=createChallenge">Create New Challenge</a></button>

        </div>

        <div class="watch">
            <?php //TODO: replace the dummy text for the calendar?>
            <div class="container">
                <h3>Watch Schedule</h3>
                <div id="calendar"></div>

            </div>

        </div>

        <div class="repo">
            <?php //TODO: replace the dummy text for the repository link?>
            <h3>Upcoming Watch</h3>
            <p><?php echo $nextWatch["date"];

?> by <?php echo $nextWatch["first_name"];?> </p>
            <H4> <?php echo $nextWatch["name"]?></H4>

        </div>

        <div class="student-list">
            <h3>Students</h3>
            <p>Curious about the juniors?</p>
            <button class="modal-btn" onclick="document.getElementById('class-modal').style.display='block'">More
                Info</button>

            <div id="class-modal" class="modal">
                <span onclick="document.getElementById('class-modal').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <table>
                    <thead>Vervou</thead>
                    <tr>
                        <?php 
                foreach($class1 as $classmate){?>

                        <td><?php echo($classmate["first_name"]);?> </td>
                        <?php }?>

                    </tr>
                    </td>
                </table>
                <table>
                    <thead>KooKu</thead>
                    <tr>
                        <?php 
                foreach($class2 as $classmate2){?>

                        <td><?php echo($classmate2["first_name"]);?> </td>
                        <?php }?>

                    </tr>
                    </td>
                </table>



            </div>


        </div>
    </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('class-modal');

// When the user clicks anywhere  of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.addEventListener('DOMContentLoaded', () => {

    var calendar = $('#calendar').fullCalendar({

        //fixedWeekCount: false,
        editable: false,
        // height: 400 ,
        contentHeight: 350,
        selectable: true,
        //selectHelper:true,

        //cannot use PHP tag inside javascript codes, can only use a file return the values
        events: '../Controller/WatchController.php',
        displayEventTime: false,
        eventColor: '#d889a7',
        eventTextColor: 'white',
    });
});
</script>
<?php 
require_once 'includes/footer.php';
?>