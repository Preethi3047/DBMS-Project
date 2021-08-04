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
	.labl
 	{
	 font-weight: bold;
	 color:white;
     font-size:20px;
 	}
</style>
</head>
<body>
<form method = "post" action="saveAppJob.php">
<br><br>
<table align="center" border="1" width="70%">

	<th colspan="2"style="font-size:30px;font-weight:bold;text-shadow: 2px 2px white;background-color:#b0e0e6;padding:5px;color: #0055CC;"> Apply for a Job</th>
	
	<tr>
	<td><div class="labl">Jobs Available</div></td>
	<td>	
	<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select JobID, JobDesc,ExpDate from placement_tbl where expDate>'".date("Y-m-d")."'";
	$run=mysqli_query($con,$qry);
	echo '<select name="jid">';
	while ($rows=mysqli_fetch_array($run))
	{
		
		echo "<option value=".$rows['JobID'].">".$rows['JobID'].".".$rows['JobDesc']." It Expries on ".$rows['ExpDate']." </option>";
		
	}
	?>
				
	</td>
	</tr>
	<th colspan="2" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>

</form>
</body>
</html>
