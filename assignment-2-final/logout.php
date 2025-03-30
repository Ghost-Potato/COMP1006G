<?php
//header
include './templates/header.php';
//accessing the current session
session_start();
//reset session variables
session_unset();
//end the session
session_destroy();
//redirect to login
header('location: login.php');
//footer
include './templates/footer.php';
?>
