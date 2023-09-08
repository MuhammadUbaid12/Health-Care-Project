<?php
session_start();
include_once("./config.php");

if (isset($_POST['doc'])) {

    $doc_email = $_POST['doc_email'];
    $doc_pswd = $_POST['doc_password'];

    if (empty($doc_email) || empty($doc_pswd)) {
        $error_msg = "filled all the requirements";
        echo $error_msg;
    } else {
        $admin_query = "SELECT * FROM doctor where addDoc_email='$doc_email'";
        $run = mysqli_query($config, $admin_query);


        if (mysqli_num_rows($run) > 0) {
            $row = mysqli_fetch_assoc($run);
            $encpPass = $row['addDoc_password']; // Hashed password from database

            $firstname = $row['addDoc_fname']; // Doktar ka pehla naam (firstname) extract karein
            $_SESSION['addDoc_fname'] = $firstname;

            $docid = $row['docID']; // Doktar ka pehla naam (firstname) extract karein
            $_SESSION['docID'] = $docid;

            $pic = $row['pic']; // Doktar ka picture extract karein
            $_SESSION['pic'] = $pic;

            // Verify the entered password with the hashed password
            if (password_verify($doc_pswd, $encpPass)) {
                echo "<script> window.location.href='./home.php' 
            </script> ";
            } else {
                // Password does not match
                echo "Invalid password.";
            }

        } else {
            echo "
            <script>
                alert('invalid doctor')
                window.location =  './DoctorLogin.php'</script>";
        }

    }
}

//////////////////////////// Update Doctor /////////////
if (isset($_POST['updateDoctor'])) {
    $id= $_SESSION['docID'];
    $fname = $_POST['addDoc_fname'];
    $lname = $_POST['addDoc_lname'];
    $email = $_POST['addDoc_email'];
    $Qualification = $_POST['addDoc_Qualification'];
    $city = $_POST['addDoc_city'];

    $updQuery = "UPDATE doctor set addDoc_fname='$fname', addDoc_lname='$lname', addDoc_email='$email', addDoc_Qualification='$Qualification' , addDoc_city='$city' where docID='$id'";
    $updResult = mysqli_query($config, $updQuery);
    if($updResult){
        header('location:myprofile.php?msg=Doctor updated Successfully');
        // echo "<script>window.location.href='./viewDoctor.php'
        // alert('Doctor Record Update Successfully')
        // </script>";
    }
    else{
        header('location:myprofile.php?msg=Doctor not updated');
    }
}
?>

