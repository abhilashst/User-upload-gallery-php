<?php
$loginusername = $_POST['lemail'];
$loginpassword = $_POST['lpassword'];
if(empty($loginusername) || empty($loginpassword))
{
	echo "<script>";
	echo "alert('Login Failed. Username or Password cannot be empty.')";
	echo "</script>";
	echo "<script>";
	echo "window.parent.location = 'admin.php'";
	echo "</script>";
	exit();
}

	/*$a = "SELECT * FROM usereg WHERE email='$loginusername' AND password='$loginpassword'";
	$b=mysql_query($a);
	$c = mysql_fetch_array($b);
	$d=mysql_num_rows($b);
*/

	else if($loginusername == 'admin' && $loginpassword == 'admin')
	{
		/*$status = $c['status'];
		
		if($status == "Suspended")
		{
			echo "<script>";
			echo "alert('Access Denied: Your Account has been Suspended. Please contact our Technical Support')";
			echo "</script>";
			echo "<script>";
			echo "window.opener.location.reload(false);";
			echo "window.close();";
			echo "</script>";
			exit();
		}
		else if($status == "Deactivated")
		{
			echo "<script>";
			echo "alert('Access Denied: Account does not Exist')";
			echo "</script>";
			echo "<script>";
			echo "window.opener.location.reload(false);";
			echo "window.close();";
			echo "</script>";
			exit();
		}
		else
		{*/
			ob_start();
			session_start();
			$_SESSION['username']=$loginusername;
		
			echo "<script>";
			echo "window.parent.location = 'uploadadmin.php'";
			echo "</script>";
			exit();
		}
else
	{
		echo "<script>";
		echo "alert('Login Failed. Invalid Username or Password')";
		echo "</script>";
		echo "<script>";
		echo "window.parent.location = 'admin.php'";
		echo "</script>";
		exit();
	}

?>