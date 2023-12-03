<?php
require_once("util-db.php")
require_once("models-courses.php")

$pageTitle = "Courses";
include "view-header.php";
$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
