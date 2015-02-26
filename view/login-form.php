<?php
    require_once(__DIR__ . "/../model/config.php");
?>



<html>
    <head>
        <title>Login</title>
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


            </ul>

        </div>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <!--Below is my username text area-->
    
    <h1 id='formh1'>Login</h1>
    
    <div class="input-group" style="margin-top: 70px;">
        <span class="input-group-addon" id="basic-addon1" for="username"><b>Username</b></span>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
    </div>
    
    
<!--    <div>
       
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>-->
    <!--Below is my password text area-->
    
        <div class="input-group" style="margin-top: 70px;">
        <span class="input-group-addon" id="basic-addon1" for="password"><b>Password</b></span>
        <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password">
    </div>
    

    <!--Below is my submit button which send the above code to my database-->
    <div>
         <button type="submit" style="background: transparent; border: none;"><div type="submit" class="button"><div type="submit" class="outer"><div type="submit" class="height"><div style="font-family: Impact;text-align: center;font-size: 40;">Create</div></div></div></div></button>
    </div>
</form>


