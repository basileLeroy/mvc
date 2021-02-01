<!-- //This is to display the watch calendar -->



<?php 

require 'includes/header_watch.php';

//TODO: need to set $variable to choose between student/coach_header.php
require 'includes/nav_coach.php';
?>

<div class="container">
    <div id="calendar"></div>
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
        selectable:true,
        selectHelper:true,
       
        //cannot use PHP tag inside javascript codes, can only use a file return the values
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