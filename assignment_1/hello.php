<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (empty($_POST['first_name']) || empty($_POST['Last_name']) || empty($_POST['email']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confrom_password'])){
        echo "please all field are required";
        exit();
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo "invalid email address";
        exit();
    }
    if ($_POST['password'] !== $_POST['confrom_password']){
        echo "password do not match";
        exit();
    }
    echo "your registration has successful";
}