<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.68.62.201','nathanva_hw3user', 'MIS4013HW3', 'nathanva_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
