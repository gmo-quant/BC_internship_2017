/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var courseList = ["CAP2760C","CDA2332C","CDA4411","CEN4341","CEN4722","CET1600C","CET1610C","CET1615C","CET1620C","CET1630C","CET2625C","CET2627C","CET2628C","CET2688C","CET3660C","CGS1060C","CGS1510C","CGS1540C","CGS1557C","CGS2100C","CIS1000C","CIS2028","CIS2352C","CIS2359C","CIS2910C","CIS2949","CIS3347C","CIS4253","CIS4361","CIS4596","CNT3014C","CNT3504C","CNT3604","CNT3702","CNT3721C","CNT4422C","COP1000C","COP1210C","COP1258C","COP1334C","COP1702C","COP2071C","COP2111C","COP2171C","COP2222C","COP2335C","COP2360C","COP2361C","COP2658C","COP2660C","COP2800C","COP2821C","COP2940","COP4858","CTS1106C","CTS1111C","CTS1133C","CTS1134C","CTS1212C","CTS1214C","CTS1390C","CTS1391C","CTS1392C","CTS1806C","CTS1808C","CTS1851C","CTS2120C","CTS2131C","CTS2148C","CTS2156C","CTS2314C","CTS2383C","CTS2393C","CTS2394C","CTS2395C","CTS2396C","CTS2420C","CTS2434C","CTS2437C","CTS2438C","CTS2441C","CTS2442C","CTS2445C","CTS2446C","CTS2451C","CTS2464C","CTS2651C","CTS2652C","CTS2852C","CTS2854","CTS2857C","CTS2858C","CTS3393C","CTS3394C","CTS3660C","CTS4339C","CTS4375C","CTS4395C","CTS4396C","CTS4627C","CTS4628C","ISM2311C","ISM4480C"];
var degreeList = ["Computer Science", "CS", "BS"];

$(function(){
    displayDegree(degreeList);
});

function displayDegree(degreeList){
    $("#title").text("Degree List");
    if ($("#cl").length > 0){
        $("#cl").remove();
    }
    var DL = $("<div></div>");
    DL.attr("id","dl");
    
    $(document).ready(function(){	
        $.each(degreeList, function(index, degree){
            $("#dl").append(
                    $("<a></a>").attr("id",degree)
                    .attr("href","#")
                    .attr("onclick","displayCourses(this.id);")
                    .text(degree)
            );	
        });		
    });
    $("#displayList").append(DL);
}

function displayCourses(degree){
    if ($("#dl").length > 0){
        $("#dl").remove();
    }
    var span = $("<span></span>");
    span.text(degree);
    $("#title").text("Course List of ");
    $("#title").append(span);
    
    var CL = $("<div></div>");
    CL.attr("id", "cl");
    
    $(document).ready(function(){
        $.each(courseList, function(index, course){
            $("#cl").append(
                    $("<a></a>").attr("id",course)
                    .attr("href","#")
                    .attr("onclick","displayCourse(this.id);")
                    .text(course)
            );	
        });		
    });
    
    $("#displayList").append(CL);
}

function displayCourse(course){
    var dir = "courseDescription/";
    var file = dir + course + ".html"
    $("#displayDescription").attr("src",file);
}