
<?php
mysql_connect("localhost","root","");
?>
<head>
<title>Admin Home</title>
<link rel="stylesheet" href="css/header_admin.css" type="text/css" />
<link rel="stylesheet" href="css/admin_panel_db.css" type="text/css" />
</head>

<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script>location='login.php'</script>";
}
include('header_admin.php');
?>
<div class="main">
<br><br>
<h1>Welcome Admin!</h1>
<br>

<div class='left'>
<form method="post" >
<input class="txt" type='text' name='insdb' placeholder='Create a new Database' required>
<input class="but" type='submit' name='sub' value="OK">
</form>
</div>
<?php
if(isset($_POST['sub']))
{
	$db = htmlspecialchars($_POST['insdb']);
	mysql_query("create database $db");
	
	
}
if(isset($_POST['sub1']))
{
	$sdb = htmlspecialchars($_POST['seldb']);
	mysql_query("drop database $sdb");
	
}
?>
<div class='right'>
<form method="post">
<select class="txt" id="sel" name='seldb'>
<option>Delete Database</option>
<?php
$dbt=mysql_query("show databases");
$opt="Delete Database";
while($rec = mysql_fetch_row($dbt))
{
	echo "<option>".$rec[0]."</option>";
}

?>
</select>
<input class="but" type='submit' name='sub1' value="OK" onClick="fun()">
</form>
</div>

</div>
</body>
