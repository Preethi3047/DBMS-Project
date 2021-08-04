<html>
<head>
<style>
    body
    {
    background-image: url('img4.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:90%;
    height:640px;
    }
</style>
</head>
<body>
<br>
<center><h1 style="color:blue;font-weight:bold;text-shadow: 2px 2px white;"> RESULT</h1><br></center>
<table border="1" width="70%" align="center">
<tr style="font-size:25px;font-weight:bold;text-shadow: 2px 2px white;background-color:rgb(100,149,237);padding:3px;color: black;">
<th>Job Name</th>
<th>Company Name</th>
<th> Date of Interview</th>
<th>Result</th>
</tr>
<?php 
$con=mysqli_connect("localhost","root","","placementdb");

session_start();
$un=$_SESSION['username'];

$qry="select j.JobDesc , j.CompanyName,Qualified, j.InterviewDate from JobApply_tbl s, Placement_tbl j where s.JobID=j.JobID and s.StuID='$un'";
//echo $qry;
$i=1;
$recset=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($recset))
{
	if ($i%2==0)
	{
		echo "<tr bgcolor='#B7F7F2'><td>";
	}
	else
	{	
		echo "<tr bgcolor='#6BF5F1'><td>";
	}
	$i++;	
	echo $row["JobDesc"];
	echo "</td>";
	echo "<td>";
	echo $row["CompanyName"];
	echo "</td>";
	echo "<td>";
	echo $row["InterviewDate"];
	echo "</td>";
	echo "<td>";
	if ($row["Qualified"]==1)
		echo 'Selected';
	elseif($row["Qualified"]==0)
		echo 'not updated';
	else 
		echo 'Not Selected';
	echo "</td></tr>";
}

?>
</table>
