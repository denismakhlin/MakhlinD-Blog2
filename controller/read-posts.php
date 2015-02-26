<?php 

    require_once(__DIR__ . "/../model/config.php");
    
//The two lines of code that lets  me retriwve posts from my database 
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    if($result) {
//Below is the code ethat sets up each post to have headers, paragrapgs and 
//breaks
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='post' style='width: 50%; margin: 0 auto; border: 1px solid blue; border-radius: 20px;'>";
            echo "<h2 style='text-align: center;' >" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<p style='text-align: center; border-bottom: 1px solid blue;'>" . $row['post'] . "</p>";
//            echo "Time Posted " . date("Y-m-d");
            echo "</div";
        }
    }
