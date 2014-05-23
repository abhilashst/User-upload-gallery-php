<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
     echo "<script>";
		echo "alert('Upload Failed. File already exists')";
		echo "</script>";
		echo "<script>";
		echo "window.parent.location = 'uploadadmin.php'";
		echo "</script>";
		exit();
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "<script>";
		echo "alert('Sucessfully Uploaded')";
		echo "</script>";
		echo "<script>";
		echo "window.parent.location = 'uploadadmin.php'";
		echo "</script>";
		exit();
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>