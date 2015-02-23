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
<nav>
    
    <ul>
        <!--below is the code that links to my post form-->
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
        <li><a href="register.php">Register Form</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>