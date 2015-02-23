<?php
    require_once(__DIR__ ."/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//    Below is the code that collects my salt and password from my username
//    where my username is my '$username'  this will be selscted by the query
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    
    
    if($query->num_rows === 1) {
//        Below the code gets the fetch array and puts/stores it in $row
//        The cript function makes it matter if text is lower and upper case
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row["salt"])) {
//            Below is the code that uses a session variable to make sure you 
//            are logged in, and will keep you logged in within the whole 
//            website
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>"; 
        }
        else {
            echo "<p>Invalid username and password</p>";
        }
    }
    else {
        echo "<p>Invalid username and password</p>";
    }