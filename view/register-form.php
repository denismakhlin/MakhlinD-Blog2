<!--Below is the code that links to my config.php file-->
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<!--This is the code that is the visual part of my registration form-->
<h1>Registration Form</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <!--Below is my email text area-->
    <div>
        <label for="email">Email: </label>    
        <input type="text" name="email"/>
    </div>
    <!--Below is my username text area-->
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <!--Below is my password text area-->
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <!--Below is my submit button which send the above code to my database-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form> 
    
