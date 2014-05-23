<?php
session_start();
session_destroy();


echo "<script>";
echo "window.parent.location = 'folio.php'";

echo "</script>";
exit();
?>