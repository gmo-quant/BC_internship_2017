<?php
$servername = "localhost";
$username = "root";
$password = "";


 $SCIDs = array( 
                                     //SCIENCE
                                    "BSC1005", "BSC2010", "BSC2085",
                                    "AST1002", "CHM1020", "CHM1045",
                                    "ESC1000", "EVR1001", "PHY2048",
                                    "PHY2053", "BSC1311", "BOT2010",
                                    "BOT2800", "ENY1001", "ZOO2010",
                                    "AST1003", "AST1004", "CHM1032",
                                    "CHM1040", "GLY1010", "GLY1100",
                                    "OCE1001", "PHY1001", "PSC1121"
                        );
 $HCIDs = array( 
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
 $SBSCIDs = array( 
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


try {
    $conn = new PDO("mysql:host=$servername;dbname=bc_intern", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("INSERT INTO `courses` (`type`, `course_id`, `course_name`) VALUES (:type, :id, :name)"); 
     $stmt->bindParam(':type', $type);
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':name', $name);
     
     $type="SC";
     foreach($SCIDs as $id){
         $name = $id;
              $stmt->execute();
     }
     $type="HC";
     foreach($HCIDs as $id){
         $name=$id;
         $stmt->execute();
     }
     $type="SBSC";
     foreach($SBSCIDs as $id){
         $name = $id;
         $stmt->execute();
     }

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
