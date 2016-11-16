<meta charset="utf-8">
				
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./CSS/share.css">
<link href="./CSS/header.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
<script src="./js/programMaps.js"></script>
<script src="./js/navigation.js"></script>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$id = 2;
//$title = "";

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

    $title = $result[0]['program_name'];
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
        <title><?php echo $title ?></title>