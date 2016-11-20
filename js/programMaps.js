/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function displayTime(str) {
  if (str==="") {
      $("#consequence").html("");
    return;
  } 
  $.ajax({
           url:"consequence.php?q="+str,
           success: function(result){
               $("#consequence").html(result);
           }
       });
}

