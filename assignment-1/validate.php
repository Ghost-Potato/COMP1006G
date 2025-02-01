<?php
//creating the validate class to check for empty fields and case matching
class validate {
    public function checkField($data, $fields){
        $message = null;
        foreach ($fields as $value){
            if(empty($data[$value])){
                $message .="<p>ucfirst($value) is required.</p>"; //converting the first letter of the $value variable to uppercase
            }
        }
        return $message;
    }
    //validating the age
    public function checkAge($age){
        if(preg_match("/^[0-9]+$/",$age)){ //using preg match and numeric pattern to check the age
            return true;
        }
        return false;
    }
    //checking the phone number
    public function checkPhone($phone){
        if(preg_match("/^[0-9]+$/",$phone)){
            return true;
        }
        return false;
    }
    public function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
    //checking to make sure the health card is numbers only.
    public function checkHealthCard($health_card){
        if(preg_match("/^[0-9]+$/",$health_card)){ //will check for numbers, excludes the version code for OHIP.
            return true;
        }
        return false;
    }
    //checking the date of birth
    public function checkBirth($dob){
        if(preg_match("/^\d{4}-\d{2}-\d{2}$/",$dob)) {
            return true;
        }
        return false;
    }
}
?>