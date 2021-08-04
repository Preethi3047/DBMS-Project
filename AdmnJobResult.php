<html>
<head>
<style>
 body
    {
    background-image: url('img9.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:90%;
    height:640px;
	margin-top:5%;
    }
	.labl
 	{
	 font-weight: bold;
	 color:white;
	 font-size:25px;
 	}
</style>
</head>
<body>
<form method = "post" action="dispStuList.php" >
<table align="center" border="1" width="70%" height="30%">
	<th colspan="2" style="font-size:30px;font-weight:bold;text-shadow: 2px 2px white;background-color:#b0e0e6;  padding:5px;color: #0055CC;"> Update Job Result</th>
	<tr>
	<td><div class="labl">Job: </div></td>
	<td>	
	<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select JobID, JobDesc from placement_tbl";
	$run=mysqli_query($con,$qry);
	echo '<select name="jid">';
	while ($rows=mysqli_fetch_array($run))
	{
		
		echo "<option value=".$rows['JobID'].">".$rows['JobID'].".".$rows['JobDesc']."</option>";
	}
	?>			
	</td>
	</tr>
	
	<th colspan="2" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Students Applied"  style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>
</form>
</body>
</html>
