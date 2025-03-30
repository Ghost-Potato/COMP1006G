<?php
    //storing user input in variables. Hashing the password using sha512
    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);
    //connecting to database with require_once for better security
    require_once 'database.php';
    //setting up and running the SQL query
    $sql="SELECT user_id FROM assignment_2_users WHERE username = '$username' AND password = '$password'";
    //storing results from above sql query in results variable
    $results = $connection->query($sql);
    //counting and storing the rows of results in a variable. Use for matches
    $results_count = $results->rowCount();
    //using a nested if and foreach to check the results and see if there are any matches.
    if($results_count==1){
        //successful login --> only one username found = no copies or multiple sessions
        echo "You are now logged in!";
        //foreach to take user information from database and store it in the session
        foreach($results as $result){
            //using the automatic session from the server
            session_start();
            $_SESSION['user_id'] = $result['user_id'];
            //after storing user id, redirect user to restricted.php
            Header('Location: ../restricted-page.php');
        }//next is the else if the login was incorrect/mismatched.
    }else{
        //echoing a message about the login validity
        echo "Wrong username or password!";
    }
    //closing connection for security
    $connection = null;
?>
