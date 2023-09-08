<?php
session_start();

if (isset($_SESSION['patientDetails'])) {
    session_unset();
    session_destroy();    
    header("Location: UserLogin.php");
    exit();
} 

?>