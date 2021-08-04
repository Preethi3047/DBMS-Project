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
	margin-top:2%;
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
<form method = "post" action="saveuser.php">
<table align="center" border="1" width="50%" height="50%">

	<th colspan="2" style="font-size:35px;font-weight:bold;text-shadow: 2px 2px white;background-color:#b0e0e6; padding:5px;color: #0055CC;"> Add a New User</th>
	<tr>
	<td><div class="labl">User Name:</div></td>
	<td><input type="string" name="username" style="width:200px;height:30px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Password: </div></td>
	<td><input type="password" name="password" style="width:200px;height:30px;"></td>
	</tr>
	<tr>
	<td><div class="labl">User Type: </div></td>
	<td><input type="radio" name="userType" value="admin" style="font-size:25px;"> Admin<input type="radio" name="userType" value="student" style="font-size:25px">Student
	</td>
	</tr>
	<th colspan="2" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>
</form>
</body>
</html>
