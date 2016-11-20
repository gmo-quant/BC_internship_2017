<?php
    // the main frame for displaying information of each degree program
    // including any AA, AS degree
    // this page will display the degree title and related courses 
    // with retriving information from the DB
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        
        // fetch  the title and file path of the degree program
        // store the information and display the title.
        $servername = "localhost";
        $username = "root";
        $password = "";
        $id = filter_input(INPUT_GET,"pid");
        try {
            $conn = new PDO("mysql:host=$servername;dbname=bc_intern", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * from `programs` where `program_id` = :id "); 
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $result = $stmt->fetchAll();
            foreach($result as $row){
                $title = "{$row['program_name']}";
                $descriptionFile = "{$row['description']}";
            }
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
        <?php
            require 'head.php';
        ?>
    </head>
    <body>
        <?php
            require 'header.php';
            require 'navigation.php';
        ?>         
        <div id="displayArea" class="container"></div>
       
        <?php
            require 'footer.php';
        ?>
    </body>
</html>