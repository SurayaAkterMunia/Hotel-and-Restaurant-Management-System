<?php
session_start();
unset($_SESSION["cart"]);
echo '<script>window.location="wcart_irl.php"</script>';

?>