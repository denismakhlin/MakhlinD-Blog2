<?php

//Below is the code that inputs my config code into my page
require_once(__DIR__ . "/../model/config.php");
//Below is the coded that says the email you out in has to be a real email
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//Below is the code that says the username you put in has to be a real character
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
//Below is the code that says the password you put in has to be a real character
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//Below is the code that creates my hashed password 

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");

    if($query) {
        echo "Successfully created user: $username"; 
    } 
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }



    