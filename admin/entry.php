<?php
mysql_connect("localhost","root","");
?>
<html>
<head>
<link rel="stylesheet" href="css/header_admin.css" type="text/css" />
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

<title>Data Entry</title>
<script>
function fun1(t)
{
	location="entry.php?db="+t;
}
function table(db,tbl)
{
	location="entry.php?db="+db+"&tbl="+tbl;
}
</script>
</head>
<body>
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
<select class="txt" onChange="fun1(this.value)">
<option>Select Database</option>
<?php
$data=mysql_query("show databases");
while($rec = mysql_fetch_row($data))
{
	echo "<option>$rec[0]</option>";
}
?>
</select>
<br>
<br>
<?php
if(isset($_REQUEST['db']))
{
	$db = $_REQUEST['db'];
	$d=mysql_query("show tables from $db");
	echo "<select class='txt' onChange=table('$db',this.value)>";
	echo "<option>Select Table</option>";
	while($rc = mysql_fetch_row($d))
	{
		echo "<option>$rc[0]</option>";
	}
	echo "</select>";
	
}

if(isset($_REQUEST['tbl']))
{
	$db = $_REQUEST['db'];
	$tbl = $_REQUEST['tbl'];
	mysql_select_db($db);
	$da=mysql_query("select * from $tbl");
	$col = mysql_num_fields($da);
	echo "<br><br>";
	echo "<fieldset>";
	echo "<legend><h4>Enter data to be inserted in $tbl</h4></legend>";
	echo "<form method='post'>";
	echo "<input type='hidden' value='$db' name='db'>";
	echo "<input type='hidden' value='$tbl' name='tbl'>";
	echo "<br>";
	echo "<center><table>";
	for($i=0;$i<$col;$i++)
	{
		$f=mysql_field_name($da,$i);
		echo "<tr><td><span class='txt'>$f</span></td><td><input type='text' class='txt' name='field$i'></td></tr>";
	}
	echo "<tr><td colspan=2><center><input class='cell' type='submit' value='Go' name='sub'></center></td></tr>";
	echo "</table></center><br><br>";
	echo "</form></fieldset>";
}
if(isset($_POST['sub']))
{
	$db= $_POST['db'];
	$tbl = $_POST['tbl'];
	mysql_select_db($db);
	$d=mysql_query("select * from $tbl");
	$col = mysql_num_fields($d);
	$query1="";
	$query2="";
	for($i=0;$i<$col;$i++)
	{
		$query1 .= mysql_field_name($d,$i);
		if(mysql_field_name($d,$i) == 'INT')
		{
			$query .= $_POST['field'.$i];
		}
		else
		{
		    $query2 .= "'".$_POST['field'.$i]."'";
		}
		if($i != $col -1)
		{
			$query1 .= ",";
			$query2 .= ",";
		}
	}
	$test =mysql_query("insert into $tbl($query1) values($query2)");
	if($test == true)
	{
		echo "<script>alert('Inserted')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

?>
</div>
</body>
</html>