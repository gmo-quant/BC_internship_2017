/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function displayTime(str) {
  if (str==="") {
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
    if (this.readyState===4 && this.status===200) {
      document.getElementById("careerPath").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","careerPath.php?q="+str,true);
  xmlhttp.send();
}

function displayCourse(course){
    if (course==="") {
    document.getElementById("displayDescription").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("displayDescription").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","displayCourse.php?q="+course,true);
  xmlhttp.send();
}