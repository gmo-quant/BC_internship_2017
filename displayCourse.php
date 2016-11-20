<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<?php

// when user select a course for the list, 
//display course description on the other side.
$courseID = filter_input(INPUT_GET, "q");
$dir = "./courseDescription/";
$file = $dir . $courseID . ".html";
$str = file_get_contents($file);
echo $str;
?>
</body>
</html>
