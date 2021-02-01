<!-- //This is to display the watch calendar -->
<?php 

require './setup.php';


    $databaseManager->connect();
    $user = new BaseController($databaseManager);

    $user->getWatchSchedule();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../style/b.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Becode2U</title>

    <style>
    .fc-center {
        color: grey;
    }
    </style>
</head>

<header>
    <nav class="logout">
        <a href="#"><i class="fas fa-sign-out-alt"></i></a>
    </nav>
</header>

<?php 
//TODO: need to set $variable to choose between student/coach_header.php
require 'includes/nav_coach.php';
?>

<div class="container">
    <div id="calendar"></div>
</div>


<script>
window.addEventListener('DOMContentLoaded', () => {

    var calendar = $('#calendar').fullCalendar({

        editable: false,
        header: {
            right: 'prev,today,next',
            center: 'title',
            left: 'month,agendaWeek'
        },
        fixedWeekCount: false,

        // height: 400 ,
        contentHeight: 500,
        //cannot use PHP tag inside javascript codes, can only use a file return the values
        events: 'load.php',
        eventColor: 'pink',
        eventTextColor: 'white',
    });
});
</script>
<?php 
require 'includes/footer.php'
?>