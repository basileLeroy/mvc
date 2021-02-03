<!-- //This is for  displaying the watch calendar -->
<?php 
session_start();
var_dump($_SESSION);

require 'includes/header_watch.php';


if($_SESSION["user_role"] == 2){
   
    require 'includes/nav_student.php';

} else if ($_SESSION["user_role"] == 1){

    require 'includes/nav_coach.php';
}
?>
<div class="container-profile">
    <h2>
        <center><b>Watch's Schedule</b></center>
    </h2>

    <div class="container watch-calendar">
        <div id="calendar"></div>
    </div>
</div>


<script>
window.addEventListener('DOMContentLoaded', () => {

    var calendar = $('#calendar').fullCalendar({

        header: {
            right: 'prev,today,next',
            center: 'title',
            left: 'month,agendaWeek'
        },
        fixedWeekCount: false,
        editable: false,
        // height: 400 ,
        contentHeight: 500,
        selectable: true,
        selectHelper: true,

        //cannot use PHP tag inside javascript codes, can only use a file return the values
        //the path is start from the index.php
        events: '../Controller/WatchController.php',
        displayEventTime: false,
        eventColor: '#d889a7',
        eventTextColor: 'white',
    });
});
</script>
<?php 
require 'includes/footer.php'
?>