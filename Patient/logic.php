<!-- ///////////////////////////// Sign Up Work //////////////////////////////// -->
<?php
session_start();

include_once("./config.php");
if (isset($_POST['P_signup'])) {
    $p_fname = $_POST['fname'];
    $p_lname = $_POST['lname'];
    $p_address = $_POST['address'];
    $p_phoneNum = $_POST['number'];
    $p_Gender = $_POST['gender'];
    $p_age = $_POST['age'];
    $p_email = $_POST['email'];
    $p_password = $_POST['password'];

    $p_signUpquery = "SELECT * from patient_details where p_email='$p_email'";
    $p_checkQuery = mysqli_query($config, $p_signUpquery);
    $p_assoc = mysqli_fetch_assoc($p_checkQuery);
    $encrpPass = password_hash($p_password, PASSWORD_DEFAULT);

    if ($p_assoc == null) {
        $p_createuser = "INSERT INTO patient_details(`p_fname`,`p_lname`,`p_address`,`p_phone`,`p_gender`,`P_age`,`p_email`,`p_password`) VALUES('$p_fname','$p_lname','$p_address','$p_phoneNum','$p_Gender','$p_age','$p_email','$encrpPass')";
        
        $_SESSION['userDetails'] = ['p_fname' =>$p_fname, 'p_lname' =>$p_lname, 'p_email' =>$p_email];

        $p_inseruser = mysqli_query($config, $p_createuser);
        echo "<script>window.location.href='./UserSignup.php'</script>";
    } else {
        echo "<script>window.location.href='./UserLogin.php'</script>";
        // header("location:./UserSignup.php");
        // echo "<script>alert('Wrong')</script>";
        }
}

////////////////////////////// login Work /////////////////////////////
if (isset($_POST['p_login'])) {
    $p_signinEmail = $_POST['p_email'];
    $p_signinPassword = $_POST['p_password'];
    $p_signinQuery = "SELECT * from patient_details where p_email='$p_signinEmail'";
    $p_signinResult = mysqli_query($config, $p_signinQuery);
    $p_signAssoc = mysqli_fetch_assoc($p_signinResult);
    // $row = mysqli_fetch_assoc($p_signAssoc);
    if ($p_signAssoc == null) {
        echo "<script>alert('User not found')
        window.location.href='./UserSignup.php'
        </script>";

    } else {
        $decyPass = password_verify($p_signinPassword, $p_signAssoc['p_password']);

        $_SESSION['patientDetails'] = [
            'id' => $p_signAssoc['id'],
            'p_fname' => $p_signAssoc['p_fname'],
            'p_lname' => $p_signAssoc['p_lname'],
            'p_email' => $p_signAssoc['p_email']
        ]; // Store user details in session

        if ($decyPass) {
            echo "<script>alert('Login Successful')
        window.location.href='./index.php'
        </script>";
        
        } else {
            echo "<script>alert('incorrect password Or Email')
        window.location.href='./UserLogin.php'
        </script>";
        }
    }
}
?>

