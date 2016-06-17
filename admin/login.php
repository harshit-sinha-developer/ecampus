<head>
<style>
.tabl{
	background:#8ECDDB;
	box-shadow:0px 0px 20px red;
}
.form{
	margin:auto;
	width:285px;
	padding:30px;
	border:1px solid black;
}
.header{
	width:100%;
    float:left;
	text-align:center;
	color:#50D52;
}
.logo{
	height:150px;
	margin:10 30 20 30;
	float:left;
}
.heading{
	width:500px;
	
	color:#50D52F;
	font-size:150%;
}
.subheading{
	color:#50D52F;
}
.container{
	width:100%;
	float:left;
}
</style>
</head>
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$i=0;
   if(isset($_POST['sub']))
   {
	   $email = htmlspecialchars($_POST['email']);
	   $pass = htmlspecialchars($_POST['pass']);
	   $check=mysql_query("select * from admin where Email='$email' AND Password='$pass'");
	   $true = mysql_num_rows($check);
	   if($true == true)
	   {
		   $_SESSION['admin']= $email;
		   $a = $_SESSION['admin'];
		   echo "<script>location='index.php'</script>";
		   
	   }
   }
	   
		   
   
?>

<div class="header">
<a href="../index.php"><img class="logo" src="../images/logo.png" height="200px" onMouseOver="hover_logo(this)" onMouseOut="out_logo(this)"></a>
<br><br>
<h1><span class="heading"><sup>e</sup>campus</span></h1>
<br>

</div>
<hr>
<div class="container">
<center>
<div class="form">
<table class="tabl" border="0" cellpadding=10px>
<tr ><td colspan=2><h1>Admin Login</h1></td></tr>
<form method="post">
<tr>
<td>Email Id:</td>
<td><input type="email" width="250px" name="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" width="250px" name="pass"></td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Submit"></td>

</tr>

</form>
</table>
</div>
</center>
</div>

