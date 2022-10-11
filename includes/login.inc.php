<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // var_dump($_POST);
    //Instantiate Signup Contoller
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new LoginContr($username,$password);

    // Running error handlers and signup
    $signup->loginUser();


    // Going back to front page
    header("Location:../index.php?error=none");
}