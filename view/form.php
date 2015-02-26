<!--Below is the code that links to my config.php file-->
<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
//    Below is the code that causes my page to die once the user has been 
//    authenticated
    
    if(!authenticateUser()) {
//        Below is the code that redirects me when you are not logged in
        header("Location: " . $path . "index.php");
        die();
    }
    
?>
<html>
    <head>
        <title>Post</title>
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT7bZWxuvmHuCdUclTbgoHuyyo_Bnd1FLuc8B0Yok2jbgu1nzF" height="65" width="75" style="padding-top: 5px; padding-bottom: 5px; padding-left: 10px;">
                <li><a href='index.php'><span>Home</span></a></li>

                <li><a href="post.php" ><span>Post</span></a></li>

                <li><a href='register.php'><span>Sign Up</span></a></li>

                <li><a href='logout-user.php'><span>Log Out</span></a></li>


            </ul>

        </div>
        </div>




<h1 id='formh1'>Create Blog Post</h1>
<!--Below inside my form tag the method I am using is for it to "post" the
information below-->
<!--I am also letting my post file reach my create-post.php file by linking it-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!--Below is the code that I provide the user with a textarea to write their
title-->
<div class="input-group" style="margin-top: 70px; margin-bottom: 50px;">
    <span class="input-group-addon" id="basic-addon1" for="title"><b>Title</b></span>
  <input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1" name="title">
</div>

<!--Below is the code that I provide the user with a textarea to write their
post-->

<div class="input-group">
    <span class="input-group-addon" id="basic-addon1" for="post"><b>Post</b></span>
  <input type="text" class="form-control" placeholder="Post" aria-describedby="basic-addon1" name="post" id="post">
</div>


    
    <div>
    <!--Below is the code that creates a button that submits my post 
    to my database-->
        <button type="submit" style="background: transparent; border: none;"><div type="submit" class="button"><div type="submit" class="outer"><div type="submit" class="height"><div style="font-family: Impact;text-align: center;font-size: 40;">POST</div></div></div></div></button>
    </div>
</form>
