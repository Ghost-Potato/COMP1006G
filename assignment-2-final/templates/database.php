<?php
//going to use PDO to connect to the database. Using AMPPS.
try {
    $connection = new PDO('mysql:host=localhost;dbname=php_class, root, mysql');
    //adding error mode attribute for error handling
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection incomplete: " . $e->getMessage();
}
