<?php

include_once("./config.php");
session_start();

if (isset($_POST['submitAppointment'])) {
    $app_specialist = $_POST['app_specialist'];
    $app_doctor = $_POST['app_doctor'];
    $app_available = $_POST['app_available'];
    $app_date = $_POST['app_date'];
    $app_patient = $_POST['app_patient'];
    $app_number = $_POST['app_number']; 
    $app_message = $_POST['app_message'];
    $patientId=$_SESSION['patientDetails']['id'];

    $createApp = "INSERT INTO appointment (`specialist`,`doctor`,`availability`,`app_date`,`app_name`,`app_num`,`app_message`,`patient_id`) values ('$app_specialist','$app_doctor','$app_available','$app_date','$app_patient','$app_number','$app_message',$patientId)";
    $insertVal = mysqli_query($config,$createApp);
    echo "<script>window.location.href='./showAppointment.php'</script>";
}

?>