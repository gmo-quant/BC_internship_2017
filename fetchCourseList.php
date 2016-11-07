<?php
// url to get the course list table
$url = 'http://www.broward.edu/zext/ext/DepartmentCourseList.jsp?Name=COP';
$startHint = '/<!-- jsp:useBean id="shRad" scope="page" class="events.SQLResults" \/ -->/';
$endHint = '/<BR>/';
$strStart = 0;
$strEnd = 0;
$str = file_get_contents($url);

//match the beginning part that we need from the fetched file.
if ( preg_match($startHint, $str, $matches,PREG_OFFSET_CAPTURE)){
    $strStart = $matches[0][1];
}else{
    echo "a match was not found";
}
//match the ending part that we need from the fetched file
if (preg_match($endHint, $str, $matches,PREG_OFFSET_CAPTURE)){
     $strEnd = $matches[0][1];
}else{
    echo "a match was not found";
} 
//save the CourseID table  in string to a file
$strLen = $strEnd - $strStart;
$strSave = substr($str, $strStart, $strLen);
$fileHeader = "<!DOCTYPE html>";
$fileHeader = $fileHeader."<html><head><title>courseIDs</title></head><body>";
$fileEnd = "</body></html>";
//$strSave = $fileHeader . $strSave . $fileEnd;
echo $strSave;
$file = './courseDescription/courseIDs.html';
file_put_contents($file, $strSave);
//$handle = fopen($file, 'w') or die ("cannot open file: ".$file);
//fwrite($handle, $strSave);
//fclose($handle);
?>