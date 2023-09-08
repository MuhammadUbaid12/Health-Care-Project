<?php
include_once("header.php");
?>

<?php
include_once("nav_bar.php");
?>

<?php
include_once("./config.php");
if (isset($_SESSION['patientDetails']) && isset($_SESSION['patientDetails']['id'])) {
    $p_id = $_SESSION['patientDetails']['id'];
    
    $appointmentQuery = "SELECT * FROM appointment WHERE patient_id='$p_id'";
    $appointmentResult = mysqli_query($config, $appointmentQuery);
    // print_r($appointmentResult);

    if (mysqli_num_rows($appointmentResult) > 0) {
        echo '<table class="table table-dark table-striped">';
        echo '<tr>
        <th scope="col">id</th>
        <th scope="col">Specialist</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Availability</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Your Number</th> 
        <th scope="col">Messsage</th>
        <th scope="col">Status</th>

        </tr>';
        while ($appointmentRow = mysqli_fetch_assoc($appointmentResult)) {
            echo '<tr>';
            echo '<td>' . $appointmentRow['app_id'] . '</td>';
            echo '<td>' . $appointmentRow['specialist'] . '</td>';
            echo '<td>' . $appointmentRow['doctor'] . '</td>';
            echo '<td>' . $appointmentRow['availability'] . '</td>';
            echo '<td>' . $appointmentRow['app_date'] . '</td>';
            echo '<td>' . $appointmentRow['app_name'] . '</td>';
            echo '<td>' . $appointmentRow['app_num'] . '</td>';
            echo '<td>' . $appointmentRow['app_message'] . '</td>';
            if ($appointmentRow['status'] === 'Approved') {
                echo '<td>Approved</td>';
            } else {
                echo '<td></td>';
            }
            echo '</tr>';

            
        }

        echo '</table>';
    } else {
        echo "No appointments found.";
    }
} else {
    echo "User not logged in.";
}
?>

<?php
include_once("./footer.php");
?>





