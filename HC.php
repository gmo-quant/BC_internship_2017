
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
                                    //Humanities
                                    "ARH2000", "LIT2000", "MUL2010", 
                                    "PHI2010", "THE2000",  "HUM1020", 
                                    "AML2010", "AML2020", "AML2600", 
                                    "AML2631", "AML2020", "AML2600", 
                                    "AML2631", "ENG2101", "ENL2012",
                                    "ENL2022", "ENL2330", "LIT2020", 
                                    "LIT2030", "LIT2110", "LIT2120",
                                    "LIT2190", "LIT2310", "ASL2160",
                                    "FRE2220", "GER2220", "HBR2220", 
                                    "ITA2220", "SPN2220", "SPN2201",
                                    "SPN2340", "ARH2050", "ARH2051", 
                                    "MUH2019", "MUH2111", "MUH2112", 
                                    "MUT1001", "DAN2100", "FIL2000",
                                    "THE2300", "ARC1701", "ARC2201",
                                    "PHI1100", "PHI2600", "REL2000",
                                    "REL2300"
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
