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

<?php
// display the program map for part time/full time recommended pathway
echo "<table>
<tr>
<th>term</th>
<th>courseID</th>
<th>course Name</th>
</tr>";

$courseIDs = array( "ENC1101","MAC1105","SPC1024","SPC1608");
$courseName = "courseName";
$courseID = filter_input(INPUT_GET, "q");
if($courseID == "partTime"){
    echo "<tr>";
    echo "<td rowspan='2'>". "1". "</td>";
    echo "<td><a href='#' id ='". $courseIDs[0]. "'  onclick='displayCourse(this.id)'>" . $courseIDs[0] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id='" . $courseIDs[1] ."' onclick='displayCourse(this.id)'>". $courseIDs[1]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td rowspan='2'>". "2" . "</td>";
    echo "<td><a href='#' id='" . $courseIDs[2] ."' onclick='displayCourse(this.id)'>". $courseIDs[2]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id='" . $courseIDs[3] ."' onclick='displayCourse(this.id)'>". $courseIDs[3]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
}else {
    echo "<tr>";
    echo "<td rowspan='4'>". "1". "</td>";
    echo "<td><a href='#' id ='". $courseIDs[0]. "'  onclick='displayCourse(this.id)'>" . $courseIDs[0] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id ='". $courseIDs[1]. "'  onclick='displayCourse(this.id)'>" . $courseIDs[1] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id ='". $courseIDs[2]. "'  onclick='displayCourse(this.id)'>" . $courseIDs[2] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id ='". $courseIDs[3]. "'  onclick='displayCourse(this.id)'>" . $courseIDs[3] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
