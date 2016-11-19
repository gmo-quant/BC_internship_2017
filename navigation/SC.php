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

                    $courseIDs = array( 
                                     //SCIENCE
                                    "BSC1005", "BSC2010", "BSC2085",
                                    "AST1002", "CHM1020", "CHM1045",
                                    "ESC1000", "EVR1001", "PHY2048",
                                    "PHY2053", "BSC1311", "BOT2010",
                                    "BOT2800", "ENY1001", "ZOO2010",
                                    "AST1003", "AST1004", "CHM1032",
                                    "CHM1040", "GLY1010", "GLY1100",
                                    "OCE1001", "PHY1001", "PSC1121"
                        );
                    
                    $courseName = "courseName";
                    foreach($courseIDs as $courseID){
                        echo "<tr>";
                        echo "<td><a href='#' id ='". $courseID. "'  onclick='displayCourse(this.id)'>" . $courseID . "</a></td>";
                        echo "<td>" . $courseName . "</td>";
                        echo "</tr>";
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
