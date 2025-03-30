<?php
//title and description
$title = "Login Success";
$description = "This is my assignment 2 login success page";
//global header
include './templates/header.php';
//making page restricted
session_start();
//if the user_id is not set for the session, will redirect to login page
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}else{//displaying page below
    ?>
    <!--body-->
    <main>
        <section>
            <h1>Login Successful!</h1>
            <p></p>
            <p>If you wish to log out, please select the option below.</p>
            <button class="logout-btn">Logout</button>
        </section>
    </main>
    <?php
}
//end connection
$connection = null;
//global footer
include './templates/footer.php';
?>