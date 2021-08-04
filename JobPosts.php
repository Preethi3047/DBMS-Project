<html>
<head>
<title>POSTS</title>
<style>
body{
    background-image: url('img1.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    font-size:20px;
}
</style>
</head>
<body>
<link href="stypage.css" rel="stylesheet" type=text/css>
<h1 style="text-align:center;font-weight:bold;text-shadow: 2px 2px white;color:purple"> JOB DETAILS</h1>
<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select * from placement_tbl where expDate>'".date("Y-m-d")."'";
	
	$run=mysqli_query($con,$qry);
	while ($rows=mysqli_fetch_array($run))
	{
		echo "<div class=\"jobbox\">";
		echo "<h3>".$rows['JobID'].". ".$rows['JobDesc']."</h3>"." <p><font color=red> Last Date for Applying :".$rows['ExpDate']."</font></p>" ;
		echo "<b>Company:</b>".$rows['CompanyName']."<br>";
		echo "<b>Location:</b>".$rows['Location']."<br>";
		echo "<b>Date of Interview:</b>".$rows['InterviewDate']."<br>";
		echo "<b>Stream:</b>".$rows['Stream']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Salary Package:</b>".$rows['SalPackage']."<br>";
		echo "<b>Qualification:</b>".$rows['Qualification']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Other Requirements:</b>".$rows['OtherReq']."<br>";
		echo "</div>";
	}
	?><br><br><br><br><br><br><br><br><br><br><br><br>
	<form method="post" action="main.php">
	<center><input type="checkbox">
	<label>I read the above mentioned details</label><br><br>
	<input type="submit" name="submit" value="Go to main page" style="background-color:blue;"></center>
	</form>
    </body>
    </html>