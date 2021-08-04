<?php 
$con=mysqli_connect("localhost","root","","placementdb");   
session_start();
$sid=$_SESSION['username'];
$opwd=$_POST['oldpwd'];
$npwd=$_POST['newpwd'];
$cnpwd=$_POST['cnewpwd'];
	if ($npwd!=$cnpwd)
	{
		echo "<script>alert('password do not match');</script>";
		header('refresh:0;url=http://localhost/Placement_Cell_System/admdash.php');
	}
	elseif($_POST['usertype']=="admin")
	{	
		$qry="update users set password='$npwd' where username='$sid' ";
		if (mysqli_query($con,$qry)==true)
		{
			echo "<script>alert('password updated');</script>";
			header('refresh:0;url=http://localhost/Placement_Cell_System/admdash.php');
		}		
		else
		{
		//echo $qry;
			echo "<script>alert('could not update password');</script>";
			header('refresh:0;url=http://localhost/Placement_Cell_System/admdash.php');
		}
	}
	else
	{	
		$qry="update users set password='$npwd' where username='$sid' " ;
		if (mysqli_query($con,$qry)==true)
		{
			echo "<script>alert('password updated');</script>";
			header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
		}		
		else
		{
		//echo $qry;
			echo "<script>alert('could not update password');</script>";
			header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
		}
	}
?>
