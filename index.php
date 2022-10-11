<?php 
    include 'includes/autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="includes/signup.inc.php" method="POST">
        <label for="">Username</label>
        <input type="text" placeholder="Enter Username" name="username">
        <label for="">Email</label>
        <input type="email" placeholder="Enter Email" name="email">
        <label for="">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
        <label for="">Confirm Password</label>
        <input type="password" placeholder="Enter Confirmation Password" name="confirm_password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <br>
    <h1>Sign In</h1>
    <form action="includes/login.inc.php" method="POST">
        <label for="">Username</label>
        <input type="text" placeholder="Enter Username" name="username">
        <label for="">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</html>