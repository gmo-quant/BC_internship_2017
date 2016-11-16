<?php

$servername = "localhost";
$username = "root";
$password = "";
$id = 1;
$title = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bc_intern", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     $stmt = $conn->prepare("SELECT * from programs where program_id = :id "); 
     $stmt->bindParam(':id', $id);
    $stmt->execute();

    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
//    print_r($result);
//    foreach( $result[0] as $k => $v){
//        echo $v;
//    }
    $title = $result[0]['program_name'];
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>