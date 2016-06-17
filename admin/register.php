<head>
<style>
.tabl{
	background:#8ECDDB;
	box-shadow:0px 0px 20px red;
	width:800px;
}
.form{
	float:left;
	padding:30px;
	border:1px solid black;
}
.write{
	width:300px;
}
#err{
	color:red;
	padding:5px;
}
</style>
<script>
function checkuser(email)
{
	var xmlhttp;
	var url = "response.php?email="+email;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4)
		{
			document.getElementById("err").innerHTML = xmlhttp.responseText;
			if(document.getElementById("err").innerHTML == "")
			{
				document.getElementById("err").style.border="";
			}
			else
			{
				document.getElementById("err").style.border="1px solid red";
			}
				}
			}
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	
}
</script>
</head>
<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script>location='login.php'</script>";
}
mysql_connect("localhost","root","");
mysql_select_db("mysite");
   if(isset($_POST['submit']))
   {
	   $email = htmlspecialchars($_POST['email']);
	   $pass = htmlspecialchars($_POST['pass']);
	   $data = mysql_query("select * from admin where Email='$email'");
	   $true = mysql_num_rows($data);
	   if($true == false)
	   {
		   mysql_query("insert into admin(ID,Email,Password) values('','$email','$pass')");
	   }
	   else
	   {
		   echo "<script>alert('Could not Insert');</script>";
	   }
	   
   }
?>
<body>

<div class="form">
<table class="tabl" border="0" cellpadding=10px>
<tr ><td colspan=2><h1>Registration Form</h1></td></tr>
<form method="post">

<tr>
<tr>
<td>Email:</td>
<td><input class="write" type="text" width="250px" name="email" onBlur="checkuser(this.value)" required></td>
<td><span id="err"></span></td>
</tr>
<tr>
<td>Password:</td>
<td><input class="write" type="password" width="250px" name="pass" required></td>
</tr>
<tr>
<td>Retype Password:</td>
<td><input class="write" type="password" width="250px" name="repass" required></td>
</tr>
<tr>
<td colspan=2><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
</div>
</body>