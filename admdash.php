<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1">
<style>
*{
	box-sizing: border-box;
}
body{
	margin:0px;
}
.header{
	width:100%;
	height:70px;
	background:black;
	color:white;
	text-align:center;
	border:2px solid;
	border-color:white;
	font-weight:bolder;
}
.left-menu{
	width:290px;
	height:580px;
	background:black;
	float:left;
	border:2px solid;
	border-color:white;
	font-size:23px;
	text-align:left;
	display:block;
	overflow: hidden;
	padding:14px 14px 14px;
}
.left-menu a{
	color:white;
	text-decoration:none;
	padding:14px 14px;
}
.left-menu a:hover{
	background-color:#ddd;
	color:black;
}
.middle{
	height:580px;
	background:url("img5.png");
	background-repeat:no-repeat;
	background-size:100% 100%;
	border:2px solid;
	border-color:white;
	text-align:right;
	font-size:25px;
	text-decoratoion: none;
}
.middle a{
	color:black;
	text-decoration:none;
	padding:14px 14px;
}
.middle a:hover{
	background-color:#ddd;
	color:black;
}
</style>
</head>
<body>
<div class="header">
<h1>ADMIN DASHBOARD</h1>
</div>
<div class="left-menu"><br>
<img src="img10.jpg" height="30px" width="30px"><a href="CreateJob.php"> Create a New Job</a><br><br>
<img src="img8.png" height="30px" width="30px"><a href="NewUser.php">Add a New user</a><br><br>
<img src="img14.png" height="30px" width="30px"><a href="chngpwd.php">Change password</a><br><br>
<img src="img15.jpg" height="30px" width="30px"><a href="AdmnJobResult.php">Update Result</a><br><br>
</div>
<div class="middle">
<br><img src="img6.png" height="100px" width="100px" style="float:right;border:2px solid black;">&emsp;<br><br><br><br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>