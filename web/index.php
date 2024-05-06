<?php
session_start();
?>
<html>
 <?php 
if (!isset( $_SESSION['whoareyou']))
  include_once("form.php");
else
  echo "Доброго времени суток <b>".$_SESSION['whoareyou']."</b> <a href=/exit.php>Exit</a>";
?>
<hr>
<?php
  include_once("manifest-of-hackers.php");
  ?>
</html>
