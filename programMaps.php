<!DOCTYPE html>
<html>
    <head>
        <title>Course Description</title>
<?php
    require 'head.php';
?>
        <link rel="stylesheet" href="CSS/programMaps.css">
        <script src="js/programMaps.js"></script>
    </head>
    <body>
<?php
    require 'header.php';
?>
<div id="middle" class="container padding-16">
    <div id="main" class='padding-16 row'>
        <div id ="left" class="left col-sm-6">
            <input id="partTime" type="button" value="partTime" onclick="displayTime(this.value)">
            <input id="fullTime" type="button" value="fullTime" onclick="displayTime(this.value)">
            <div id="careerPath"></div>
        </div>
        <div id="right" class="right col-sm-6">
            <div id ="displayDescription"></div>
        </div>
    </div>
</div>
        
<?php
require 'footer.php';
?>
    </body>
</html>