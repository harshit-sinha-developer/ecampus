<head>
<link rel="stylesheet" href="css/header.css" type="text/css" />
<link rel="stylesheet" href="css/account.css" type="text/css" />
</head>
<?php
session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
include('header.php');
$email=$_SESSION['sess'];
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$data=mysql_query("select * from user where Email='$email'");
$data1=mysql_query("select * from score where Email='$email'");
while($row=mysql_fetch_row($data))
{
	$name=$row[1];
	$user=$row[5];
}
while($row=mysql_fetch_row($data1))
{
	$prev=$row[2];
	$total=$row[3];
}
?>
<div class="account_page">
<div class="account_container">
<div class="account_head">
<center><h1>Account Information</h1></center>
</div>
<div class="horiz">
Name: <?php echo " $name";?>
</div>
<div class="horiz">
Username: <?php echo " $user";?>
</div>
<div class="horiz">
Previous Score: <?php echo " $prev";?>
</div>
<div class="horiz">
Total Score: <?php echo " $total";?>
</div>
<div class="account_foot">
<center><h3><?php echo " $email";?></h3></center>
</div>
</div>
</div>