<!DOCTYPE html>
<html>
    <head>
        <title>Course Description</title>
<?php
    require 'head.php';
?>
        <link rel="stylesheet" href="CSS/courseDescription.css">
        <script src="js/courseDescription.js"></script>
    </head>
    <body>
<?php
    require 'header.php';
?>
<div id="middle" class="container padding-16">
    <div id="main" class='padding-16 row'>
        <div id="sidenav" class="sidenav col-sm-4">
            <div class="leftmenu">
                <div id="leftmenuinner">
                    <h2 id="title" class="padding-16" style="text-align:center; position: relative; background-color: white;" ></h2>
                    <div id="displayList">
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="rightframe" class="rightframe col-sm-8">
            <iframe id="displayDescription" src=""></iframe>
        </div>
    </div>
</div>      
<?php
require 'footer.php';
?>
    </body>
</html>