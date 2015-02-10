<?php

class Database {

//Below are global variables that are set as private so they can only be
//accessed within this class
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

//Below I am adding information into my global variables to add to my object
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
//    Below Is the code that I established my connection in
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
//Below is code that kills my program if I have an error and it says what the
//error was
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }
//Below is the code that closes my connection
    public function closeConnection() {
        if(isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
//Below is the code that opens my connection so I can test it
        $this->openConnection();
//Below is the code that tests my query connection
        $query = $this->connection->query($string);
        
//Below is the code that closes my connection
  
        $this->closeConnection();
        
        return $query;
    }

}
