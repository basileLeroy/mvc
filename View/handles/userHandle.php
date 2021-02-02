<?php
declare(strict_types = 1);
require "../Modal/business/User.php";

session_start();
// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

print_r($_SESSION);
print_r($_GET);

