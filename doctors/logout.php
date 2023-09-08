<?php
session_start();
unset($_SESSION['addDoc_fname']);
unset($_SESSION['docID']);
session_destroy();
echo "<script>
window.location.href='./DoctorLogin.php'
</script>";
?>