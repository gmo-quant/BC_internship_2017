<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
    <div id="programMaps" class='padding-16 row'>
        <div id ="left" class="left col-sm-6">
            <?php

                echo "<table>
                    <tr>
                    <th>courseID</th>
                    <th>course Name</th>
                    </tr>";


                $servername = "localhost";
                $username = "root";
                $password = "";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=bc_intern", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT `course_id`, `course_name` FROM `courses` WHERE `type`= :type "); 
                    $stmt->bindParam(':type', $type);
                    $type=  filter_input(INPUT_GET, 'type');
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    $result = $stmt->fetchAll();

                foreach($result as $row){
                    echo "<tr>";
                    echo "<td><a href='#' id ='{$row['course_id']}'  onclick='displayCourse(this.id)'>{$row['course_id']}</a></td>";
                    echo "<td>{$row['course_name']}</td>";
                    echo "</tr>";
                }

                }
                catch(PDOException $e){
                    echo "Connection failed: " . $e->getMessage();
                }
                    

                echo "</table>";

            ?>
        </div>
        <div id="right" class="right col-sm-6">
            <div id ="displayDescription"></div>
        </div>
    </div>

</body>
</html>
