

function displayCourse(course){
    if (course==="") {
        $("#displayDescription").html("");
        return;
    } 
  
    $.ajax({
         url:"displayCourse.php?q="+course,
         success: function(result){
             $("#displayDescription").html(result);
         }
    });
}