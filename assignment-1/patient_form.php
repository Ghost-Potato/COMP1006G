<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Assignment 1 COMP1006G Intro to Web Programming">
    <!--    Style Sheets    -->
    <link rel="stylesheet" href="./css/styles.css">
    <!--    Page Icon       -->
    <link rel="page_logo" href="img/beluga-icon.png" type="image/x-icon">
</head>
<body>
    <main>
        <?php
        //will use include so the website can fail gracefully
        include_once('crud.php');
        include_once('validate.php');
        //class objects
        $crud = new crud();
        $validate = new validate();
        if(isset($_POST['submit'])){
            //using the escape string function
            $name = $crud->escape_string($_POST['name']);
            $phone = $crud->escape_string($_POST['phone']);
            $email = $crud->escape_string($_POST['email']);
            $health_card = $crud->escape_string($_POST['health_card']);
            $date_of_birth = $crud->escape_string($_POST['date_of_birth']);
            //using validate class functions
            $message = $validate->checkField($_POST, array('name', 'phone', 'email', 'health_card', 'date_of_birth'));
            $checkAge = $validate->checkField($_POST, ['age']);
            $checkPhone = $validate->checkField($_POST, ['phone']);
            $checkEmail = $validate->checkField($_POST, ['email']);
            $checkHealthCard = $validate->checkField($_POST, ['health_card']);
            $checkDateOfBirth = $validate->checkField($_POST, ['date_of_birth']);
            //checking each method
            if($message != null){
                echo "<p>".$message."</p>"; //adding the javascript user-friendliness so the user can move back and forward without having to refill everything
                echo "<a href=javascript:self.history.back();>Back</a>";
            }
            elseif(!$checkAge){
                echo "<p>Age is required</p>";
            }
            elseif(!$checkPhone){
                echo "<p>Phone is required</p>";
            }
            elseif(!$checkEmail){
                echo "<p>Email is required</p>";
            }
            elseif(!$checkHealthCard){
                echo "<p>Health Card is required</p>";
            }
            elseif(!$checkDateOfBirth){
                echo "<p>Date of Birth is required</p>";
            }
            else{//if all results are valid
                $result = $crud->execute("INSERT INTO assignment_1_patient(name, phone, email, health_card, date_of_birth) VALUES('$name','$phone','$email','$health_card','$date_of_birth')");
                echo "<p>Patient Added Successfully</p>";
            }
        }
        ?>
    </main>
</body>