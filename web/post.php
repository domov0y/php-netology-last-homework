<?php
if (isset($_POST["whoareyou"]) && trim($_POST["whoareyou"])!='')
{
  session_start();
  $_SESSION['whoareyou']=trim($_POST["whoareyou"]);
  header("Location:/");
}
