<?php 
//This is for the displaying of the previous/exisiting challenges
<<<<<<< HEAD
session_start();
=======
require 'includes/header_watch.php';
>>>>>>> a3beaea6d7ee993079d3f3862013a5fbe45f1334

var_dump($_SESSION);

require 'includes/header_watch.php';


if($_SESSION["user_role"] == 2){
   
    require 'includes/nav_student.php';

} else if ($_SESSION["user_role"] == 1){

    require 'includes/nav_coach.php';
}

?>
<div class="container-profile">
    <h3>Challenges</h3>



</div>



<?php 
require_once 'includes/footer.php';

?>