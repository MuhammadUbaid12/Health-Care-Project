<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['pic']);
session_destroy();
echo "<script>
window.location.href='./Adminlogin.php'
</script>";
?>