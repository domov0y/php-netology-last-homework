<?php
session_start();
if (isset($_SESSION['whoareyou']) )  unset($_SESSION['whoareyou']) ;
header("Location:/");
?>
