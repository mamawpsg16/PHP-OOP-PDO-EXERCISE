<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // var_dump($_POST);
    //Instantiate Signup Contoller
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($email,$username,$password,$confirm_password);

    // Running error handlers and signup
    // $signup->insertUser();


    // Going back to front page
    header("Location:../index.php?error=none");
}