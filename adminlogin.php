<html>
<head>
<style>
body{
    background-image: url('img3.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    text-align:center;
}
.loginblock
{
	margin-top: 2%;
	padding: 3px;
	text-align:center;
	font-family:'Courier New', Courier, monospace;
	font-size:23px;
	font-weight: bold;
}
</head>
</style>
<body>
<form method="post" action="checks.php">
<div class="loginblock">
<h1>ADMIN LOGIN</h1><br>
<label>User Name:</label>
<input type="text" name="uname" placeholder="Enter your name" style="width:200px;height:30px;"><br><br>
<label>Password:</label>
<input type="password" name="pwd" placeholder="Enter your password" style="width:200px;height:30px;" ><br><br>
<input type="hidden" name="usertype" value="A">
<input type="submit" name="submit" name="submit" style="background-color:blue; height:30px;width:100px;"><br><br><br>
</div>
</form>
</div>
</body>
</html>
