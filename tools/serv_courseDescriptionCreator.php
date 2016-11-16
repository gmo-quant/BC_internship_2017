<?php

$courseIDs = array(
    
    "ENC1101","MAC1105","SPC1024","SPC1608",
    //ELECTIVE
    "MAT1033", "COP2335C", "COP2360C",
    "COP2800C","COP2361C", "COP2222C",
    "CGS1060C",
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
    "REL2300",
    //social behavioral sicence
    "AMH2020", "POS2041", "ANT2000",
    "ECO2013", "PSY2012", "SYG2000",
    "AMH2010", "AMH2091", "EUH1000",
    "EUH1001", "GEA2000", "GEA2030",
    "GEA2040", "GEO1000", "GEO2370",
    "GEO2420", "INR2002", "POS2112",
    "WOH2040", "ANT2140", "ANT2211",
    "DEP2002", "DEP2004", "DEP2302",
    "SOP2002", "SYG2010", "SYG2340",
    //SCIENCE
    "BSC1005", "BSC2010", "BSC2085",
    "AST1002", "CHM1020", "CHM1045",
    "ESC1000", "EVR1001", "PHY2048",
    "PHY2053", "BSC1311", "BOT2010",
    "BOT2800", "ENY1001", "ZOO2010",
    "AST1003", "AST1004", "CHM1032",
    "CHM1040", "GLY1010", "GLY1100",
    "OCE1001", "PHY1001", "PSC1121");

$close_tbl = "</span> </td>  </tr>  </table></td>  </tr></table></div>";
$startHint = '/<!-- jsp:useBean id="shRad" scope="page" class="events.SQLResults" \/ -->/';
$endHint = '/<!-- <br\/><a href="http:\/\/www.curricunet.com\/broward\/search\/course\/" target="_blank">Course Outline Information<\/a> -->/';

// fetch for BC for each courseID;
// save it and name it $courseID.html
$count = 0;
foreach($courseIDs as $courseID){
    echo "file ". $count ;
    $count += 1;
    $url = 'http://www.broward.edu/zext/ext/Coursedetail.jsp?ccn='.$courseID.'&Name=COP';

    $strStart = 0;
    $strEnd = 0;
    $str = file_get_contents($url);

    if ( preg_match($startHint, $str, $matches,PREG_OFFSET_CAPTURE)){
        $strStart = $matches[0][1];
    }else{
        echo "a match was not found";
        echo $courseID;
    }
    if (preg_match($endHint, $str, $matches,PREG_OFFSET_CAPTURE)){
         $strEnd = $matches[0][1];
    }else{
        echo "a match was not found";
        echo $courseID;
    } 
    $strLen = $strEnd - $strStart;
    $table = substr($str, $strStart, $strLen);
    
    $save =  $table. $close_tbl;
    $file = './../courseDescription/'.$courseID.'.html';
    file_put_contents($file, $save);
    echo "done ". $file ;
}
?>