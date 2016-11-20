/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    // when click the Program Description, display the program description 
    // in the  #displayArea in the degreeProgramFrame page
    $("#PD").click(function(){
        $.ajax({
            url: "./navigation/programDescription.php?pid=" + $("#PD").val(),
            success: function(result){
                $("#displayArea").html(result);
        }
        });
    });
    
    // when click the Program Maps, display the Program Maps 
    // in the  #displayArea in the degreeProgramFrame page
    $("#PM").click(function(){
        $.ajax({
                url:"./navigation/programMaps.php",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
    
    // when click the Humanity Courses, display the course list of Humanity Courses
    // in the  #displayArea in the degreeProgramFrame page
    $("#HC").click(function(){
        $.ajax({
                url:"./navigation/CL.php?type=HC",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
    
    // when click the Social and Behavior Science Courses, display course list  of 
    //  Social and Behavior Science Courses
    // in the  #displayArea in the degreeProgramFrame page
    $("#SBSC").click(function(){
        $.ajax({
                url:"./navigation/CL.php?type=SBSC",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
        
     // when click the Science Courses, display course list  of Science
    // in the  #displayArea in the degreeProgramFrame page   
    $("#SC").click(function(){
    $.ajax({
           url:"./navigation/CL.php?type=SC",
           success: function(result){
               $("#displayArea").html(result);
           }
       });
   });
   
   // when click the Login, popup a login window, which let the authorized 
   //user login to his/her profolio
   $("#LG").click(function(){
        var str = $("#LGA").text();
        if ( str === "Login"){

            // change "Login" to "Log Out"
            $("#LGA").text("Log Out");
               // load LG.php to let authorized user to login
            $.ajax({
                   url:"./navigation/LG.php",
                   success: function(result){
                       $("#displayArea").html(result);
                   }
            });
        }else{
             // change "Log Out" to "Login"
            $("#LGA").text("Login");
               // load LO.php to sign the user out
            $.ajax({
                   url:"./navigation/LO.php",
                   success: function(result){
                       $("#displayArea").html(result);
                   }
            });
        }
    });
});
