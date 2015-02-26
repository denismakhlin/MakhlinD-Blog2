<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link rel="shortcut icon" href="../favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="sass/style1.scss" />
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        
    </head>
    <body>

<div id='cssmenu'>

            <ul>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT7bZWxuvmHuCdUclTbgoHuyyo_Bnd1FLuc8B0Yok2jbgu1nzF" <img src="img/carwashlogo.png" height="65" width="75" style="padding-top: 5px; padding-bottom: 5px; padding-left: 10px;">
                <li><a href='index.php'><span>Home</span></a></li>

                <li><a href="post.php" ><span>Post</span></a></li>

                <li><a href='register.php'><span>Sign Up</span></a></li>

                <li><a href='logout-user.php'><span>Log Out</span></a></li>

                <li class='last'><a href='login.php'><span>Log In</span></a></li>

            </ul>

        </div>
        
            <div id="jumbotron1" class="jumbotron">
        
            <div class="container">
                <h1 id="jumbotronh1" >B.L.O.G.</h1>
                <p id="jumbotronp">"A blog is merely a tool that lets you do
                    anything from change the world to share your shopping
                    list"</p>
         
                <!--<img src="img/carwashpalmtree.png" height="300" style="margin-left: 5px; margin-top: -17%; margin-bottom: -4.3%;">
                <img id="imgright" src="img/carwashpalmtree.png" height="300" style="margin-bottom: -4.3%;">-->
            </div>
        </div>
        <div id="welltab" class="well well-lg" style="margin-top: -70;">
            <div>
                <h1 id="h1tab1">Sign Up</h1> 
            </div>

            <div>
                <h1 id="h1tab2">Post</h1>
            </div>
            <div class="btn-group btn-group-justified" role="group" aria-label="..." style="margin-top: 10%;">
                <div class="btn-group" role="group" >
                    <button href='register.php' id="button1" type="button" class="btn btn-default" style="
                            width: 310px;
                            height: 50px;
                            display: block;
                            margin: auto;
                            color: black;
                            border-radius: 10px;
                            font-size: 15px;
                            " ><b>Register Now!</b></button>
                </div>
                
                
                
                <div class="btn-group" role="group" style="margin-top: 10%;height: 0px;width: 5px;">
                    <button id="button1" type="button" class="btn btn-default" style="
                            width: 310px;
                            height: 50px;
                            display: block;
                            margin-right: 100px;
                            color: black;
                            border-radius: 10px;
                            font-size: 15px;
                            " href="<?php echo $path . "post.php"?>"><b style="text-shadow: 0px;">Post Now!</b></button>
                </div>
            </div>
            
            <br>

        </div>

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

