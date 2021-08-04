<?php
if(isset($_POST['submit']))  
{   

$con=mysqli_connect("localhost","root","","placementdb");

if (!empty(	$_POST["rollno"]) and !empty($_POST["stuname"]))
{
session_start();
$un=$_SESSION['username'];
$rno=(integer)$_POST["rollno"];
$snam=$_POST["stuname"];
$fnam=$_POST["fname"];
$dob=$_POST["dob"];
$ph=$_POST["contno"];
$email=$_POST["email"];
$strm=$_POST["strm"];
$cors=$_POST["Qual"];
$scor=(float)$_POST["score"];
$areaInt=$_POST["AreaInt"];

$qry="insert into stureg_tbl values ('$un',$rno,'$snam','$fnam','$dob',
'$ph','$email','$strm','$cors',$scor,'$areaInt')";
		
if (mysqli_query($con,$qry)==true)
            {
				//echo $qry;
				echo "<script>alert('Data saved');</script>";
				header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
			}		
		else
		{
			//echo $qry;
			echo "<script>alert('could not save data');</script>";
			header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
		}
}
else
{
	echo "<script>alert('fields cannot be left empty');</script>";
	header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
}
}
?>

