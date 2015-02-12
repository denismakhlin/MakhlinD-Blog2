<?php
//Below is the code that lets me include info from my database into my creat-db
//The __DIR__ . line of code is saying starting from this location we will move 
//on
require_once(__DIR__ ."/../model/config.php");
//Below is the code that allows me to accses my mysqli server and the code in my 
//datababse to be stored in the connection object

//Below is the code that creates a new query for tables        
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
//Below is the code that lets me have an integer of 11 posts which is  more than 
//1 billion; the NOT NULL code is saying that the post has to be filled with 
//content
            . "id int(11) NOT NULL AUTO_INCREMENT,"
//Below is the code that says there can only be 225 characters in each post and 
//it has to be filled because of the NOT NULL line of code
            . "title varchar(225) NOT NULL,"
//Below is code that says each post has to be filled with content
            . "post text NOT NULL,"
//Below is code that links its id to my integer id of 11
            . "PRIMARY KEY (id))");
//Below is the code that creates the table once
    if($query) {
        echo "<p>Successfully create table: posts</p>";
//Below is the code that says the query on top is already existing
    } else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char(128) NOT NULL,"
            . "salt char(128) NOT NULL,"
            . "PRIMARY KEY (id))");
            
    if($query) {
        echo "<p>Successfully created table: users</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
  

