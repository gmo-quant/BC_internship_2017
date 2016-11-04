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

echo "<table>
<tr>
<th>term</th>
<th>courseID</th>
<th>course Name</th>
</tr>";

$courseID = array("COP1210C","CTS2438C","COP2071C", "COP1334C");
$courseName = "courseName";

if($_GET["q"] == "partTime"){
    echo "<tr>";
    echo "<td rowspan='2'>". "1". "</td>";
    echo "<td><a href='#' id ='". $courseID[0]. "'  onclick='displayCourse(this.id)'>" . $courseID[0] . "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id='" . $courseID[1] ."' onclick='displayCourse(this.id)'>". $courseID[1]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<td rowspan='2'>". "2" . "</td>";
    echo "<td><a href='#' id='" . $courseID[2] ."' onclick='displayCourse(this.id)'>". $courseID[2]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><a href='#' id='" . $courseID[3] ."' onclick='displayCourse(this.id)'>". $courseID[3]. "</a></td>";
    echo "<td>" . $courseName . "</td>";
    echo "</tr>";
}else {
    echo "<tr>";
    echo "<td rowspan='4'>". "1". "</td>";
    echo "<td>" . $courseID[0] . "</td>";
    echo "<td>" . $courseID[1] . "</td>";
    echo "<td>" . $courseID[2] . "</td>";
    echo "<td>" . $courseID[3] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
