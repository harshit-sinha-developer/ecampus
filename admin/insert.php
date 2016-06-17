<?php
mysql_connect("localhost","root","");
?>
<html>
<head>
<link rel="stylesheet" href="css/header_admin.css" type="text/css" />
<title>Admin Home</title>
<style>
.main{
	text-align:center;
	width:80%;
	height:800px;
	margin:auto;
	background:#FF915B;
}
.txt{
	width:300px;
	height:30px;
	padding:5px;
	margin:10px;
}
.txt1{
	width:180px;
	height:30px;
	padding:5px;
	margin:10px;
}
.but{
	padding:10px;
	margin:5px;
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
<br>
<select class="txt" onChange="fun_change(this.value)">
<option>Select Database</option>
<?php
$data=mysql_query("show databases");
$col = mysql_num_fields("$data");

while($rec = mysql_fetch_row($data))
{
echo "<option>$rec[0]</option>";
}
?>
</select>
<script>
function fun_change(no)
{
	location = "insert.php?db="+no;
}

</script>
<?php
$tblfield = $tblname ="";
if(isset($_REQUEST['db']))
{
	$db = $_REQUEST['db'];
	echo "<fieldset>";
	echo "<legend><h4>Create New Table</h4></legend>";
	echo "<form onSubmit=fun1($db)>";
	echo "<center><table>";
	echo "<input type='hidden' name='db' value=$db>";
	
	echo "<tr><td>Enter Table Name</td><td><input class='txt' type='text' name='name' placeholder='Enter table name' required='required'></td></tr>";
	echo "<tr><td>Enter No. of Fields</td><td><input class='txt' type='number'  name='no' placehoder='Eneter no. of fields' required='required'></td></tr>";
	echo "<tr><td colspan=2><center><input class='but' type='submit' name='submit' value='Submit'><center></td></tr>";
	echo "</table></center>";
	echo "</form></fieldset>";
	
}
?>

<?php
if(isset($_REQUEST['submit']))
{
	$db = $_REQUEST['db'];
	$tblname = $_REQUEST['name'];
	$tblfield = $_REQUEST['no'];
	echo "<br><br><br>";
	echo "<fieldset>";
	echo "<legend>Enter the fields</legend>";
	echo "<form method='post'>";
	echo "<input type='hidden' name='db' value=$db>";
	echo "<input type='hidden' name='tblname' value=$tblname>";
	echo "<input type='hidden' name='tblfield' value=$tblfield>";
	echo "<center><table>";
	echo "<tr><th>FieldName</th><th>Type</th><th>Length</th><th>Attribute</th><th>AUTO_INCREMENT</th></tr>";
	for($i=0;$i<$tblfield;$i++)
	{
		echo "<tr>";
		echo "<td><input class='txt1' type='text' name='name$i'></td>";
		echo "<td><select class='txt1' name='type$i'>";
		echo "<option>INT</option>";
		echo "<option>CHAR</option>";
		echo "<option>VARCHAR</option>";
		echo "</select></td>";
		echo "<td><input class='txt1' type='text' name='value$i'></td>";
		echo "<td><select class='txt1' name='attribute$i'>";
		echo "<option></option>";
		echo "<option>PRIMARY KEY</option>";
		echo "<option>UNIQUE</option>";
		echo "<option>FULL TEXT</option>";
		echo "<option>INDEX</option>";
		echo "</select></td>";
		echo "<td><input class='txt1' type='checkbox' name='a_i$i' value='AUTO_INCREMENT'></td>";
		echo "</tr>";
	}
	echo "<tr><td colspan=5><center><input class='but' type='submit' name='go' value='Go'></center></td></tr>";	
	echo "</table></center>";
	echo "</form></fieldset>";
}
?>
<script>
function fun2(db,tbl,field)
{
	location = "insert.php?db="+db+"&tblname="+tbl+"&tblfield="+field;
}
</script>
<?php
if(isset($_POST['go']))
{
	$db=$_POST['db'];
	$tblfield = $_POST['tblfield'];
	$tblname = $_POST['tblname'];
	mysql_select_db($db);
	$query="";
	for($i=0;$i<$tblfield;$i++)
	{
		$fname = $_POST['name'.$i];
		$type = $_POST['type'.$i];
		$fvalue = $_POST['value'.$i];
		$fattribute = $_POST['attribute'.$i];
		
		$query =$query.$fname." ".$type."(".$fvalue.")"." NOT NULL ".$fattribute." ".@$_POST['a_i'.$i];
		if($i != $tblfield -1)
		{
			$query .= ",";
		}
	}
	
	$d=mysql_query("create table $tblname($query)");
	if($d == true)
	{
	    echo "<script>alert('Table $tblname created successfully')</script>";
		echo "<script>location='insert.php'</script>";
	}
}
?>
</div>
</body>
</html>