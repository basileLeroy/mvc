<?php

require 'setup.php';

// create variable and call funtion inside it
if (isset($_POST['login'])) {
    $login = new LoginController
}

// if ( if the submit is true)
//TODO: if the login = true -> check for table name
//TODO: if table = student {$profile = "student_profile"} else if table is coach {$profile = "coach_profile"} else {$profile = "public_homepage"}
require 'View/'.$profile.'php';