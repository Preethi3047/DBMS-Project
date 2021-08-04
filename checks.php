<form method="get">
<?php
$conn = mysqli_connect("localhost", "root", "","placementdb");

$sql = "select password,usertype from users where username='".$_POST["uname"]."'";
$un=$_POST["uname"];

$retval = mysqli_query( $conn, $sql  );

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
{
	if ($row['password']==$_POST["pwd"] && $row['usertype']=="S" && $_POST['usertype']=="S")
	{
      echo "<script>alert('Login Successful');</script>";
	  session_start();
	  $_SESSION['username']=$un;
			header('refresh:0;url=http://localhost/Placement_Cell_System/studash.php');
	 }
     elseif ($row['password']==$_POST["pwd"] && $row['usertype']=="admin" && $_POST['usertype']=="A") {
        echo "<script>alert('Admin Login Successful');</script>";
	  session_start();
	  $_SESSION['username']=$un;
			header('refresh:0;url=http://localhost/Placement_Cell_System/admdash.php'); 
     }
	else
	{
		echo "<script>alert('username or password incorrect');</script>";
		if ($_POST['usertype']=="S")
				header('refresh:0;url=http://localhost/Placement_Cell_System/stulogin.php');
	  else
			header('refresh:0;url=http://localhost/Placement_Cell_System/adminlogin.php');
	}
   } 

   mysqli_close($conn);
?>
</form>