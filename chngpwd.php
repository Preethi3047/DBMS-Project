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
<form method = "post" action="savepwd.php">
<table align="center" border="1" width="50%" height="50%">
	<th colspan="2" style="font-size:30px;font-weight:bold;text-shadow: 2px 2px white;background-color:#b0e0e6;  padding:5px;color: #0055CC;"> Change Password</th>
	<tr>
	<td><div class="labl">Old Password: </div></td>
	<td><input type="password" name="oldpwd" style="width:200px;height:40px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Usertype: </div></td>
	<td><input type="text" name="usertype" value="admin" style="width:100px;height:40px;"></td>
	</tr>
	<tr>
	<td><div class="labl">New Password: </div></td>
	<td><input type="password" name="newpwd" style="width:200px;height:40px;"></td>
	</tr>
	<tr>
	<td><div class="labl">Confirm New Password: </div></td>
	<td><input type="password" name="cnewpwd" style="width:200px;height:40px;"></td>
	</tr>
		
	<th colspan="2" style="background-color:#0055CC;" ><input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table>
