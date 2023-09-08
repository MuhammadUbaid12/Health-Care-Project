<?php
session_start();
include_once("./config.php");

if (isset($_POST['SignIn'])) {

    $admin_email = $_POST['doc_email'];
    $admin_pswd = $_POST['doc_password'];

    if (empty($admin_email) || empty($admin_pswd)) {
        $error_msg = "filled all the requirements";
        echo $error_msg;
    } else {

        $admin_query = "SELECT * FROM admin where email='$admin_email' AND password='$admin_pswd'";
        $check = mysqli_query($config, $admin_query);

        if (mysqli_num_rows($check) > 0)
        /*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/{
            $check_row = mysqli_fetch_assoc($check);
            $_SESSION['name'] = $check_row['name'];
            $_SESSION['Pic'] = $check_row['pic'];
            echo "<script> window.location.href='./home.php' 
            </script> ";

        } else {
            echo "<script> 
        alert('invalid admin')
        window.location='./Adminlogin.php'</script> ";
        }

    }
}
?>

<!-- /////////////////////////// Add Disease /////////////////////// -->
<?php
include_once("./config.php");
if (isset($_POST['addDS'])) {
    $name = $_POST['Dname'];
    $dec = $_POST['desc'];
    $prev = $_POST['preven'];

    $d_signUpquery = "SELECT * from diseases where dName='$name'";
    $d_checkQuery = mysqli_query($config, $d_signUpquery);
    $d_assoc = mysqli_fetch_assoc($d_checkQuery);

    if ($d_assoc == null) {
        $ad_createuser = "INSERT INTO diseases(`dName`,`description`,`prevention`) VALUES('$name','$dec','$prev')";

        $inseruser = mysqli_query($config, $ad_createuser);
        echo "<script>window.location.href='./addDisease.php'
        alert('AddDisease Successfully Add')
        </script>";
    } else {
        // header("location:./UserSignup.php");
        echo "<script>alert('Wrong')</script>";
    }
}
?>

<!-- ////////////////////// Delete City //////////////////////// -->
<?php
include_once("./config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE from city where id=$id";
    $result = mysqli_query($config, $query);

    if($result) {
        header('location:viewCity.php?msg=City Record Deleted Successfully');
    }
    else{
        header('location:add_city.php?msg=City Record not Deleted ');
    }
}
?>



<!-- ////////////////////////// Delete Doctor /////////////////////// -->
<?php
include_once("./config.php");
if(isset($_GET['docid'])){
    $docid = $_GET['docid'];
    $docQuery = "DELETE from doctor where docID=$docid";
    $docresult = mysqli_query($config, $docQuery);

    if($docresult) {
        header('location:viewDoctor.php?msg=Doctor Record Deleted Successfully');
    }
    else{
        header('location:viewDoctor.php?msg=Doctor Record not Deleted ');
    }
}
?>

<!-- ////////////////////////// Delete Diseases /////////////////////// -->
<?php
include_once("./config.php");
if(isset($_GET['dID'])){
    $dID = $_GET['dID'];
    $DSQuery = "DELETE from diseases where d_id=$dID";
    $DSresult = mysqli_query($config, $DSQuery);

    if($DSresult) {
        header('location:viewDisease.php?msg=Diseases Record Deleted Successfully');
    }
    else{
        header('location:viewDisease.php?msg=Diseases Record not Deleted ');
    }
}
?>


<!-- ////////////////////////// Delete Patient /////////////////////// -->
<?php
include_once("./config.php");
if(isset($_GET['Patient_id'])){
    $pID = $_GET['Patient_id'];
    $PQuery = "DELETE from patient_details where id=$pID";
    $Presult = mysqli_query($config, $PQuery);

    if($Presult) {
        header('location:viewPatient.php?msg=Diseases Record Deleted Successfully');
    }
    else{
        header('location:viewPatient.php?msg=Diseases Record not Deleted ');
    }
}
?>