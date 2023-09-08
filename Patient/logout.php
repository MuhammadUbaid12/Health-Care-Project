<?php
session_start();
unset($_SESSION['p_fname']);
unset($_SESSION['id']);
session_destroy();
echo "<script>
window.location.href='./UserLogin.php'
</script>";
?>