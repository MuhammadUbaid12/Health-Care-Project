<?php
include_once("./config.php");

if (isset($_POST['specialistId'])) {
$specialistId = $_POST['specialistId'];
$result = mysqli_query($config, "SELECT * FROM doctor WHERE addDoc_specialist = '$specialistId' ORDER BY addDoc_fname ASC");
$fname = array();

while ($row = mysqli_fetch_array($result)) {
    $fname[] = $row['addDoc_fname'];
}
echo json_encode($fname);
}


if (isset($_POST['fnameId'])) {
$fnameId = $_POST['fnameId'];
$result = mysqli_query($config, "SELECT * FROM doctor WHERE addDoc_fname = '$fnameId' ORDER BY addDoc_time ASC");
$fname = array();
while ($row = mysqli_fetch_array($result)) {
    $availability[] = $row['addDoc_time'] . ' To ' . $row['addDoc_endtime'] ;
}
echo json_encode($availability);
}

///////////////////////////////////

?>
