<?php
ob_start();
    require_once 'C:\xampp\htdocs\Tasks\E-Commerse\handlers\validateFunc.php';
    require_once 'C:\xampp\htdocs\Tasks\E-Commerse\DR_DataBase\dbManger.php';
    $add=new dbManger();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['submit'])){

            #validate personal information
            $name=validateName($_POST['name']);
            $email=validateEmail($_POST['email']);
            $password=validatePassword($_POST['password']);
            $phone=validatePhone($_POST['phone']);
            $role=$_POST['role'];
            if($name&&$email&&$phone&&$password){
                $add->addCustomer($name,$email,$phone,$password,$role);
            }

            # validate location
            $country=validateAddress($_POST['country']);
            $city=validateAddress($_POST['city']);
            $street=validateAddress($_POST['street']);
            if($country&&$city&&$street){
                $add->addAddress($country,$city,$street);
            }

            # the location for the user
            if($role=="seller"){
                header('location:../../users/seller/login.php');
            }else{
                header('location:../../users/customer/login.php');
            }
            exit();
        }
    }
ob_end_flush();
?>