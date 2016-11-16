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

$str4 = "</span> </td>  </tr>  </table></td>  </tr></table></div>";
$startHint = '/<!-- jsp:useBean id="shRad" scope="page" class="events.SQLResults" \/ -->/';
$endHint = '/<!-- <br\/><a href="http:\/\/www.curricunet.com\/broward\/search\/course\/" target="_blank">Course Outline Information<\/a> -->/';
$headerB4title = "<!DOCTYPE html><html>  <head>";  
$title = "";
$headerAfterTitle = " 
		   <meta charset='utf-8'>
			<link href='../styles.css' rel='stylesheet' type='text/css' />
				
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        
			      <link href='bootstrap-3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
				   <script src='bootstrap-3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
           		<script src='js/jquery-3.1.1.min' type='text/javascript'></script>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>	

			
	</head>

				<body>
				
				<header>
                
          <img src='../images/Broward_College_Logo.png' alt='BC Logo'>
          </header>
					<h1>Computer Science Department</h1>
				
					<nav class='navbar navbar-inverse'>
                <div class='container-fluid'>
                  
                  <ul class='nav nav-pills'>
                    <li class='active'><a href='index.html'>Home</a></li>
                        
                  
            
                   
                          
                      <li class='dropdown'>
						  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Program Map <span class='caret'></span></a>
						  <ul class='dropdown-menu'>
							<li><a href='#'>Computer Programming and Analysis AS</a></li>
							<li><a href='#'>Computer Programmer TC</a></li>
							<li><a href='#'>Computer Programming Specialist TC</a></li>
							</ul>
						</li>
						
						<li class='dropdown'>
						  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>General Education Courses <span class='caret'></span></a>
						  <ul class='dropdown-menu'>
							<li><a href='#'>Humanities</a></li>
							<li><a href='#'>Social/Behavioral Science</a></li>
							<li><a href='#'>Sciences</a></li>
						  </ul>
						</li>
						
						
					 
					  
                    <li><a href='certsandcareers.html'>Certifications & Careers</a></li>
                  </ul>
                </div>
              </nav>
          ";

$footer = "		<br />

                                      <footer>Created By: BC Interns Team 2 Fall 2016 - Broward College Computer Science Department</footer>
                            </body>

</html>";
// fetch for BC for each courseID;
// save it and name it $courseID.html
$courseID = "id";
foreach($courseIDs as $courseID){
    $url = 'http://www.broward.edu/zext/ext/Coursedetail.jsp?ccn='.$courseID.'&Name=COP';
    $title = "<title>Class : ". "$courseID". "</title>";

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
    
//    $save = $headerB4title. $title. $headerAfterTitle. $table. $footer;
    $save = $table;
    $file = './../courseDescription/'.$courseID.'.html';
    file_put_contents($file, $save);
}
?>