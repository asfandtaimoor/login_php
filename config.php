<?php 


// This file contain database configuration assume you're running my sqli usign your use root and passwords ""
define('DB_SERVER' , "localhost");
define('DB_USERNAME' , "root");
define('DB_PASSWORD' , "");
define('DB_NAME' , "login");

// Try connecting to database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD ,DB_NAME);


// checking connection


if ($conn === false){
    echo "Error connecting";
}


?>