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
 	}
</style>
</head>
<body>
<form method = "post" action ="savestdata.php">
<table align="center" border="5px solid blue" width="60%" height="80%">

	<th colspan="2" style="font-size:30px;font-weight:bold;text-shadow: 2px 2px white;background-color:#b0e0e6;padding:5px;color: #0055CC;">Add your details </th>
	<tr>
	<td><div class="labl">StudentID/Roll No: </div></td>
	<td><input type="string" name="rollno" style="width:200px;height:25px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Name: </div></td>
	<td><input type="string" name="stuname" style="width:450px;height:30px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Father's Name: </div></td>
	<td><input type="string" name="fname" style="width:450px;height:30px"></td>
	</tr>
	<tr>
	<td><div class="labl">Date of Birth: </div></td>
	<td><input type="date" name="dob" value="<?php echo date('d-m-y');?>"></td>
	</tr>
	<tr>
	<td><div class="labl">Contact Number: </div></td>
	<td><input type="string" name="contno" style="width:450px;height:30px"></td>
	</tr>
	<tr>
	<td><div class="labl">Email ID: </div></td>
	<td><input type="string" name="email" style="width:450px;height:30px"></td>
	</tr>
	<tr>
	<td><div class="labl">Stream: </div></td>
	<td>	<select name="strm">
			<option value="Comp Science">Computer Science</option>
			<option value="Science">Science</option>
			<option value="Commerce">Commerce</option>
			<option value="Business Administration">Business Administration</option>
			<option value="Arts">Arts</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">Qualification: </div></td>
	<td><select name="Qual">
			<option value="BCA">BCA</option>
			<option value="B.Sc.">B.Sc.</option>
			<option value="PGDCA">PGDCA</option>
			<option value="PGDMC">PGDMC</option>
			<option value="BBA">BBA</option>
			<option value="BCOM">BCOM</option>
			<option value="BE">BE</option>
			<option value="ME">ME</option>
			<option value="MCOM">MCOM</option>
			<option value="M.Sc.">M.Sc.</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">last Score in %age:</div></td>
	<td><input type="string" name="score" style="width:450px;height:30px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Area of Interest: </div></td>
	<td><input type="string" name="AreaInt" style="width:200px;height:25px;"></td>
	</tr>
	
	<th colspan="2" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Save Job" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>

</form>
</body>
</html>
