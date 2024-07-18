<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) 
{

	function validate($data)
	{
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) 
	{
		die("User Name is required");
	} 
	else if (empty($pass)) 
	{
        die("Password is required");
	} 
	else 
	{
		
        $pass = md5($pass);
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) 
		{
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) 
			{
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['név'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            } 
			else 
			{
				die("Incorrect User name or password");
			}
		} 
		else 
		{
			die("Incorrect User name or password");
		}
	}
} 
else 
{
	die("No POST data received");
}