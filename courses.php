<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      if(insertCourse($_POST['cNumber'], $_POST['cDesc'])){
        echo'<div class="alert alert-success" role="alert">Course Added</div>'
          } else{<div class="alert alert-success" role="alert">Error.</div>'}
      break;     
  }
}

$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
