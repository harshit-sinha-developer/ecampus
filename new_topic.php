<?php
session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
?>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<?php
include('header.php');
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$email=$_SESSION['sess'];
$data=mysql_query("select * from user where Email='$email'");
while($row = mysql_fetch_row($data))
{
	$name=$row[1];
}
?>
<form id="form1" name="form1" method="post" action="add_new_topic.php">

<div class="body">
<div class="form_out">
<div class="form">
<div class="form-head">
<img src="images/register.png" height='40px' style='float:left;padding:10px'/><h1 style='padding:10px;padding-left:30px'>Create New Topic</h1>
</div>
<div class="form-body">

<div class="horizontal">
<input type="text" id="name" name="topic" class="inp" placeholder="Topic" onBlur="" required/>
</div>
<div class="horizontal">
<textarea name="detail" class="inp_a" placeholder="Details" onBlur="" id="detail" required></textarea>
</div>
<input type="hidden" name="name" value=<?php echo '$name' ?> />
<input type="hidden" name="email" value=<?php echo '$email' ?> />
<div class="horizontal">
<div class="center"><input type="submit" name="Submit" class="but" value="Go" onClick="return genError()"/></div>
</div>
</div>
</div>
</form>

</body>
</html>