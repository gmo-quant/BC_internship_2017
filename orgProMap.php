

<!DOCTYPE html>
<html>
    <head>
        <title>Course Description</title>
<?php
    require 'head.php';
?>
        <link rel="stylesheet" href="CSS/programMaps.css">
        <script src="js/programMaps.js"></script>
        <script>
        function displayTime(str) {
          if (str=="") {
            document.getElementById("careerPath").innerHTML="";
            return;
          } 
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById("careerPath").innerHTML=this.responseText;
            }
          }
          xmlhttp.open("GET","careerPath.php?q="+str,true);
          xmlhttp.send();
        }
</script>
    </head>
    <body>
        <form>
            <input id="partTime" type="button" value="partTime" onclick="displayTime(this.value)">
            <input id="fullTime" type="button" value="fullTime" onclick="displayTime(this.value)">
        </form>
        
        
        <div id="careerPath"></div>
    </body>
</html>

