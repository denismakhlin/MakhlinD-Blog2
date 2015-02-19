<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
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


