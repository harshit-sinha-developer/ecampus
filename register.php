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
mysql_connect("localhost","root","");
mysql_select_db("mysite");
if(isset($_POST['submit']))
{
	$name=htmlspecialchars($_POST['name']);
	$address=htmlspecialchars($_POST['address']);
	$contact=htmlspecialchars($_POST['contact']);
	$email=htmlspecialchars($_POST['email']);
	$username=htmlspecialchars($_POST['username']);
	$pass=htmlspecialchars($_POST['password']);
	$data=mysql_query("insert into user(ID,Name,Address,Contact,Email,Username,Password) values ('','$name','$address',$contact,'$email','$username','$pass')");
	$data1=mysql_query("insert into score(ID,Email,Previous,Total) values('','$email',0,0)");
	
}
?>
<form method="post" name="register" onSubmit='return genError()'>
<div class="body">
<div class="form_out">
<div class="form">
<div class="form-head">
<img src="images/register.png" height='40px' style='float:left;padding:10px'/><h1 style='padding:10px;padding-left:30px'>Register</h1>
</div>
<div class="form-body">

<div class="horizontal">
<input type="text" id="name" name="name" class="inp" placeholder="Enter Your name" onBlur="return gen_NameErr()"/><span class="err" id="errname">*</span>
</div>
<div class="horizontal">
<textarea name="address" class="inp_a" placeholder="Enter Your Address" onBlur="return gen_AddErr()"></textarea><span class="err" id="erradd">*</span>
</div>
<div class="horizontal">
<input type="text" name="contact" class="inp" placeholder="Enter Your Phone No." onBlur="return gen_ContErr()"/><span class="err" id="errcont">*</span>
</div>
<div class="horizontal">
<input type="email" name="email" class="inp" placeholder="Enter Your Email Id" onKeyUp="return gen_MailErr()" onBlur="return gen_MailErr()"/><span class="err" id="errmail">*</span>
</div>
<div class="horizontal">
<input type="text" name="username" class="inp" placeholder="Choose Your username"/><span class="err" id="erruser">*</span>
</div>
<div class="horizontal">
<input type="password" name="password" class="inp" placeholder="Type your password" onBlur="return gen_passErr()" onKeyUp="return gen_passErr()"/><span class="err" id="errpass">*</span>
</div>
<div class="horizontal">
<input type="password" name="repass" class="inp" placeholder="Re-type your password" onBlur="return gen_repassErr()"/><span class="err" id="repasser">*</span>
</div>
<div class="horizontal">
<div class="center"><input type="submit" name="submit" class="but" value="Register" onClick="return genError()"/></div>

</div>
</div>
</div>
</div>
</div>
</form>
<script type="text/javascript" src="js/validation.js"></script>
</body>

</html>