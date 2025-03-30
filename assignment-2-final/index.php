<!--NOTES-->
<!--****ALWAYS CLOSE CONNECTION****-->
<!--need: SQL table, database, login form, signup form (same page), restricted page for successful logins, method to store users in the database, method to verify logins against database information, logout option, login page-->
<?php
//dynamic title and description values for the global header
$title = "Assignment 2";
$description = "This is my assignment 2";
//global header
include 'templates/header.php';
?>
<!--body-->
<main>
    <section class="login-form">
        <h3>Log In</h3>
        <form method="post" action="templates/validation.php">
            <fieldset class="login-fieldset">
                <legend>Login</legend>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="Password" required>
            </fieldset>
            <button type="submit">Login</button>
        </form>
    </section>
    <h3>Sign Up Below</h3>
    <section id="signup-form">
        <form method="post" action="save-user.php">
            <fieldset class="signup-fieldset">
                <legend>Signup</legend>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </fieldset>
            <button type="submit" class="signup-btn">Sign Up!</button>
        </form>
    </section>
</main>
<?php
    //global footer
    include 'templates/footer.php';
?>
