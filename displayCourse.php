<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<?php
$courseID = filter_input(INPUT_GET, "q");
$dir = "./courseDescription/";
$file = $dir . $courseID . ".html";
$str = file_get_contents($file);
echo $str;
?>
</body>
</html>
