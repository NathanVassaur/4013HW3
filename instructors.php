<?php
require_once("util-db.php");
require_once("model-instructors.php");


include "view-header.php";
$pageTitle = "Instructors";
$instructors = selectInstructors();
include "view-instructors.php";

include "view-footer.php";
?>
