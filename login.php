<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<?php
include('header.php');
?>
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$i=0;
   if(isset($_POST['submit']))
   {
	   $email = htmlspecialchars($_POST['email']);
	   $pass = htmlspecialchars($_POST['password']);
	   $check=mysql_query("select * from user where Email='$email' AND Password='$pass'");
	   $true = mysql_num_rows($check);
	   if($true == true)
	   {
		   $name = "";
		   $User = mysql_query("select Name from user where Email='$email'");
		   while($rec = mysql_fetch_row($User))
		   {
			   $name = $rec[0];
		   }
		   mysql_query("insert into loggeduser values('','$email','$name')");
		   $_SESSION['sess']= $email;
		   echo "<script>location='index.php'</script>";
		   
	   }
   }
?>
<div class="body">
<div class="form_out">
<div class="form">
<div class="form-head">
<img src="images/login.png" height='40px' style='float:left;padding:10px'/><h1 style='padding:10px;padding-left:30px'>Login</h1>
</div>
<form method="post" action="login.php">
<div class="form-body">
<div class="horizontal">
<input type="email" name="email" class="inp" placeholder="Enter email" required/><span class="ast">*</span>
</div>
<div class="horizontal">
<input type="password" name="password" class="inp" placeholder="Enter password" required/><span class="ast">*</span>
</div>
<div class="horizontal">
<div class="center"><input type="submit" name="submit" class="but" value="Login"/></div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>