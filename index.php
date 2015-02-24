<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="sass/style1.scss" />
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>

    </head>
    <body>
        <div class="content">
            <div class="box-with-text">Blog</div>
        </div>
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='#'><span>Home</span></a></li>
                <li><a href="register.php"><span>Register</span></a></li>
                <li><a href="login.php"><span>Login</span></a></li>
                <li><a href="<?php echo $path . "post.php"?>"><span>Post</span></a></li>
                <li class='last'><a href="logout.php"><span>Logout</span></a></li>
            </ul>
        </div>
    
</body>
<!--Below is the code that sets up php code on my index.php page--> 
<?php
require_once(__DIR__ . "/controller/login-verify.php");
//Below is the line of code that links/shows my file to my header 
//page
require_once (__DIR__ . "/view/header.php");

if (authenticateUser()) {
    //Below is the line of code that shows my navigatioin page
    require_once (__DIR__ . "/view/navigation.php");
}
//Below is the line of code that links my file to my create-db.php 
//page
require_once(__DIR__ . "/controller/create-db.php");
//Below is the line of code that links/shows my file to my footer 
//page
require_once (__DIR__ . "/view/footer.php");
//Below is the line of code that links/shows my file to my read 
// posts page
require_once (__DIR__ . "/controller/read-posts.php")
?>
