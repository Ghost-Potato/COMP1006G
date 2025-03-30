<?php
//connect to database
include './templates/database.php';

//variables for the user information
$first_name = $_POST['fame'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
//confirmation
$confirm = $_POST['confirm'];
//validating inputs
$input_good = true;
//adding the header
include './templates/header.php';
//checking if inputs are empty, displaying message if it is
if(empty($first_name) || empty($last_name)){
    $input_good = false;
    echo "Fields cannot be empty.";
}//If not, checking if they match ascii characters and -.
elseif(!preg_match("/^[a-zA-Z-]+$/",$first_name)){
    $input_good = false;
    echo "Only letters, dashes, and spaces allowed.";
} //if last name is not empty
elseif(!preg_match("/^[a-zA-Z-]+$/",$last_name)){
    $input_good = false;
    echo "Only letters, dashes, and spaces allowed.";
}else{
    echo "Please enter valid information.";
}
//checking if email is empty
if(empty($email)){
    $input_good = false;
    echo "Email cannot be empty.";
    //if not, use filter_var to validate the email.
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $input_good = false;
    echo "Invalid email address.";
}else{
    echo "Please enter a valid email address.";
}
//checking if username is empty
if(empty($username)){
    $input_good = false;
    echo "Username cannot be empty.";
    //if not, use preg match to check if it matches alphanumeric and _ -.
}elseif (!preg_match("/^[a-zA-Z0-9_-]+$/",$username)){
    $input_good = false;
    echo "Only letters, numbers and underscores allowed.";
}else{
    echo "Please enter valid information.";
}
//checking if password is empty
if(empty($password)){
    $input_good = false;
    echo "Password cannot be empty.";
    //if not, use pregmatch to check for alphanumeric and special characters
}elseif(!preg_match("/^[a-zA-Z0-9._!@-]+$/",$password)){
    echo "Only letters, numbers and special characters (.!_@-) allowed.";
}else{
    echo "Please enter valid information.";
}
//if above are true
if($input_good){
    //hash the password with sha512
    $password = hash('sha512', $password);
    //set up SQL insertion
    $sql = "INSERT INTO assignmnet_2_users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
    //not storing confirm, only for testing
    $connection -> exec($sql);
    echo "New record created successfully.";
}
//closing the connection
$connection = null;
?>
<section class="save-user-complete">
    <p>
        Account creation successful! Click the Login button below to access your account.
        <button type="button"><a href="restricted-page.php">Login</button>
    </p>
</section>
<?php
include './templates/footer.php';
?>

