<?php 
function validateName($name){
    if(!empty($name)){
        $name = trim($name);
        if(strlen($name) >= 3){
            if(preg_match("/[a-zA-Z]/", $name)){
                return filter_var($name, FILTER_SANITIZE_STRING);
            }
        }
    }
    return false;
}

function validateEmail($email){
    if(!empty($email)){
        if(preg_match("/@gmail.com/", $email)){
            return filter_var($email, FILTER_SANITIZE_EMAIL);
        }
    }
    return false;
}

function validatePassword($password){
    if(!empty($password)){
        if(preg_match("/[a-z]/", $password) && 
           preg_match("/[A-Z]/", $password) && 
           preg_match("/[0-9]/", $password) && 
           strlen($password) >= 8){
            return filter_var($password, FILTER_SANITIZE_STRING);
        }
    }
    return false;
}

function validatePhone($phone){
    if(!empty($phone)){
        if(preg_match("/^[0-9]{11}$/", $phone)){
            return filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        }
    }
    return false;
}

function validateAddress($location){
    if(!empty($location)){
        if(strlen($location) >= 3){
            return filter_var($location, FILTER_SANITIZE_STRING);
        }
    }
    return false;
}
?>