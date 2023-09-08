<?php
include_once("./config.php");

if (isset($_GET['id'])) {
    
    $appointmentId = $_GET['id'];
    $newStatus = 'Approved';
    $sql = "UPDATE appointment SET status = '$newStatus' WHERE app_id = $appointmentId";
    $mysqlQuery = mysqli_query($config,$sql);
    if ($mysqlQuery == true) {    
        echo "Appointment status updated successfully.";
    } else {
        echo "Error updating appointment status:";
    }
}

?>
