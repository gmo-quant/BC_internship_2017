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
                                    //social behavioral sicence
                                    "AMH2020", "POS2041", "ANT2000",
                                    "ECO2013", "PSY2012", "SYG2000",
                                    "AMH2010", "AMH2091", "EUH1000",
                                    "EUH1001", "GEA2000", "GEA2030",
                                    "GEA2040", "GEO1000", "GEO2370",
                                    "GEO2420", "INR2002", "POS2112",
                                    "WOH2040", "ANT2140", "ANT2211",
                                    "DEP2002", "DEP2004", "DEP2302",
                                    "SOP2002", "SYG2010", "SYG2340"
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
