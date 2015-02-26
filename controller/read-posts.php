<?php 

    require_once(__DIR__ . "/../model/config.php");
    
//The two lines of code that lets  me retriwve posts from my database 
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    if($result) {
//Below is the code ethat sets up each post to have headers, paragrapgs and 
//breaks
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='post' style='width: 50%; margin: 0 auto; border: 7px solid lightskyblue; border-radius: 20px; background-color: #eee;'>";
            echo "<h2 style='text-align: center;' >" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<p style='text-align: center; border-bottom: 7px solid lightskyblue; margin-bottom: 20px;'>" . $row['post'] . "</p>";
//            echo "Time Posted " . date("Y-m-d");
//            echo "Created By: $username";
            echo "</div";
        }
    }
