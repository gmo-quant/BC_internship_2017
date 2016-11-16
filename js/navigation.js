/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){

    $("#PD").click(function(){
        $.ajax({
            url: "./programDescription.php",
            success: function(result){
                $("#displayArea").html(result);
        }
        });
    });
    
    $("#PM").click(function(){
        $.ajax({
                url:"./programMaps.php",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
    
    $("#HC").click(function(){
        $.ajax({
                url:"./HC.php",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
    
    $("#SBSC").click(function(){
        $.ajax({
                url:"./SBSC.php",
                success: function(result){
                    $("#displayArea").html(result);
                }
            });
        });
        
    $("#SC").click(function(){
    $.ajax({
           url:"./SC.php",
           success: function(result){
               $("#displayArea").html(result);
           }
       });
   });
});
