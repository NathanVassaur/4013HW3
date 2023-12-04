<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      if(insertCourse($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert">Course added. </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. </div>';
      }
      break;
    case "Edit":
      if(updateCourse($_POST['cNumber'], $_POST['cDesc'], $_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Course edit. </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. </div>';
      }
      break;
    case "Delete":
      if(deleteCourse($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Course deleted. </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. </div>';
      }
      break;
  }
}

$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
