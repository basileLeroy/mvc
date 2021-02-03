<?php 
//This is for the displaying of the previous/exisiting challenges
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
    <h3>Challenges</h3>



</div>



<?php 
require 'includes/footer.php';

?>