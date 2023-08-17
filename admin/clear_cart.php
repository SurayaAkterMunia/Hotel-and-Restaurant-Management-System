<?php
session_start();
unset($_SESSION["cart"]);
echo '<script>window.location="cart_irl.php"</script>';

?>