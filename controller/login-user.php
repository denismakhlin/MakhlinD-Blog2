<?php
    require_once(__DIR__ ."/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//    Below is the code that collects my salt and password from my username
//    where my username is my '$username'  this will be selscted by the query
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
