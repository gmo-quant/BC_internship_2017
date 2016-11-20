<?php
$servername = "localhost";
$username = "root";
$password = "";
$id = filter_input(INPUT_GET, 'pid');

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
    $descriptionFile = $result[0]['description'];
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<div id="programdescription" class="container">
    <?php 
    
        $file = '../programDescription/'. $descriptionFile;
        require $file;
    ?>
</div>