<?php
    require_once (__DIR__ . "/../model/config.php");
        require_once(__DIR__ . "/../controller/login-verify.php");
    
//    Below is the code that causes my page to die once the user has been 
//    authenticated
    
    if(!authenticateUser()) {
//        Below is the code that redirects me when you are not logged in
        header("Location: " . $path . "index.php");
        die();
    }
?>

<!--Below is the code to navigate-->
