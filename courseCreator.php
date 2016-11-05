

<?php
$doc = new DOMDocument();
//$doc->loadHTML("F:\\BC_course\\CIS2949\\webpage\\fetchCourseList.php.html");
$doc->loadHTMLFile("./courseDescription/fetchCourseList.php.html");
$elements = $doc->getElementsByTagName('td');
$arr = null;
$courseIDs = null;
$CID= "";
$key = "key";
$val = "val";
if (!is_null($elements)) {
    foreach ($elements as $element){
        $arr[]= $element->nodeValue;
    }
}

$len = count($arr);
for ($i = 5;$i<$len; $i=$i+2 ){
    $courseIDs[] = '"'.trim($arr[$i]).'"';
}
foreach($courseIDs as $courseID){
    $CID .= $courseID. ',';
}

$course = "./courseDescription/courseIDs.txt";
file_put_contents($course, $CID);
?>