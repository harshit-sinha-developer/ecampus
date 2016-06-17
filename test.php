<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" href="css/test.css" type="text/css">
<link rel="stylesheet" href="css/form.css" type="text/css">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
include('header.php');
?>
<div class="body_test">

<div class="test_container">
<div class="test_head">
<div class="test_head_left"><h2>Test</h2></div><div class="test_head_right"><span id="remain"></span></div>
</div>
<div class="test_body">
<?php
if(isset($_REQUEST['test']))
{
	$test_name=$_REQUEST['test'];
}
echo "<script>document.write('<form method=post action=check_test.php id=form1 name=form1 >')</script>";
echo "<script>document.write('<input type=hidden name=test value=".$test_name." />')</script>";
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$data=mysql_query("select * from ".$test_name);
$i=0;
$col=mysql_num_fields($data);
while($row=mysql_fetch_row($data))
{
	echo "<div class='ques'>";
	echo "<script>document.write('<input type=hidden value=$row[0] name=id$i />')</script>";
	echo "<script>document.write('<div class=query ><b>Q. $row[1]</b></div>')</script>";
	echo "<br/>";
	for($j=2;$j<=5;$j++)
	{
		echo "<script>document.write('<div class=opt ><input class=rad type=radio value=\'$row[$j]\'  name=opt".$i." />$row[$j]</div>')</script>";
	}
	echo "</div>";
	$i++;
}
echo "<script>document.write('<input type=hidden name=rows value=$i />')</script>";

?>
<input class="but" type="submit" name="sub" value="Submit" />
</form>
</div>
</div>
</div>
<script type="text/javascript" src="js/test.js"></script>
</body>
</html>
