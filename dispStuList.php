<html>
<head>
<style>
    body
    {
    background-image: url('img11.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:90%;
    height:640px;
    }
</style>
</head>
<body>
<br>
<center><h1 style="color:#0055CC;font-weight:bold;text-shadow: 2px 2px white;"> STUDENTS LIST</h1><br><br></center>
<form method = "post" action ="saveresult.php" >
<table border="1" align="center" height="25%" width="40%" >
<tr style="text-align:center; background-color:white;font-size:20px;">
<th>User name</th>
<th>Student ID</th>
<th>Student Name</th>
<th>Result</th>
</tr>
<?php 
$con=mysqli_connect("localhost","root","","placementdb");
if(isset($_POST['submit']))  
{   
$jid=$_POST['jid'];

$qry="select s.userName, s.StuID,StuName from stureg_tbl s, jobapply_tbl j 
where s.userName=j.StuID and j.JobID='$jid'";
//echo $qry;
$i=1;
$recset=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($recset))
{
	if ($i%2==0)
	{
		echo "<tr bgcolor='#ffccff'><td>";
	}
	else
	{	
		echo "<tr bgcolor='#ff99ff'><td>";
	}
	$i++;	
	echo $row["userName"];
	echo "</td>";
	echo "<td>";
	echo $row["StuID"];
	echo "</td>";
	echo "<td>";
	echo $row["StuName"];
	echo "</td>";
	echo "<td>";
	$key=$row["userName"];
	echo '<input type="checkbox" name="result[]" value="'.$key.'"';
	echo "</td></tr>";
}
}
 echo '<input type="hidden" name="jobid" value="'.$jid.'">';
?>
<th colspan="4" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Save result" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>
</form>
</body>
