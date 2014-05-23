<?php
session_start();
session_destroy();


echo "<script>";
echo "window.parent.location = 'index.php'";

echo "</script>";
exit();
?>