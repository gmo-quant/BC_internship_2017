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
            <iframe id="map" src="orgProMap.php"></iframe>
        </div>
        <div id="right" class="right col-sm-6">
            <iframe id="displayDescription" src=""></iframe>
        </div>
    </div>
</div>
        
<?php
require 'footer.php';
?>
    </body>
</html>