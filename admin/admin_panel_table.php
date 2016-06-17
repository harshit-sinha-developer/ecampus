<?php
mysql_connect("localhost","root"."");
?>

<head>
<link rel="stylesheet" href="css/header_admin.css" type="text/css" />
<title>Admin Home</title>
<style>
.main{
	text-align:center;
	width:80%;
	margin:auto;
	background:#FF915B;
	height:3000px;
}
.txt{
	width:300px;
	height:30px;
	padding:5px;
}
.cell{
	padding:10px;
}
</style>

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
<div class="inner">
<script>
function database(no)
{
	location="admin_panel_table.php?db="+no;
}
function table(db,tbl)
{
	location="admin_panel_table.php?db="+db+"&tbl="+tbl;
}
</script>
<select id="id1" class="txt" onChange="database(this.value)">
<option>Select Database</option>

<?php
$data=mysql_query("show databases");
while($rec = mysql_fetch_row($data))
{
	echo "<option>$rec[0]</option>";
}
?>

</select><br><br>
<center>
<?php
if(isset($_REQUEST['db']))
{
	$qs = $_REQUEST['db'];
	echo "<select class='txt' onChange=table('$qs',this.value)><option>Select Table</option>";
	$tbl = mysql_query("show tables from $qs");
	while($rect = mysql_fetch_row($tbl))
	{
		echo "<option>$rect[0]</option>";
	}
	echo "</select>";
	
}
if(isset($_REQUEST['tbl']))
{
	$qs = $_REQUEST['db'];
	$t = $_REQUEST['tbl'];
	mysql_select_db($qs);
	$dat= mysql_query("select * from $t");
    $col =mysql_num_fields($dat);
	echo "<br><br>";
	echo "<table border=1 cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	for($i=0;$i<$col;$i++)
	{
		echo "<th class='cell'>".mysql_field_name($dat,$i)."</th>";
	}
	echo "</tr>";
	while($record = mysql_fetch_row($dat))
	{
		echo "<tr>";
		for($i=0;$i<$col;$i++)
		{
			echo "<td class='cell'>".$record[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
		
?>
</center>
</div>
</div>

