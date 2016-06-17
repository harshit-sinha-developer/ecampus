<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/check_test.css">
<?php
session_start();
include('header.php');
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
$email=$_SESSION['sess'];
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$score=0;
$test_name=$_POST['test'];
?>
<div class="check_page">
<div class="check_container">
<div class="check_head">
<center><h1>Result</h1></center>
</div>
<?php
for($i=0;$i<$_POST['rows'];$i++)
{
	$rows=0;
	$id=$_POST['id'.$i];
	if(isset($_POST["opt".$i]))
	{
		$ans=$_POST["opt".$i];
		$data=mysql_query("select * from $test_name where ID='$id' and Answer='$ans'");
		$rows=mysql_num_rows($data);
	}?>
    <div class="ans" id='ans<?php echo $i ?>'>
    <?php
	if($rows==1)
	{
		echo "<script>document.getElementById('ans$i').style.background='green'</script>";
		echo ($i+1).". Correct<br>";
		$score++;
	}
	else
	{
		echo "<script>document.getElementById('ans$i').style.background='red'</script>";
		echo ($i+1).". Wrong<br>";
	}?>
    </div>
    <?php
	
}?>
<div class="check_foot">
<?php
echo "<center><h2>Your Score:".$score."/".$_POST['rows']."</h2></center>";

?>
</div>
</div>
</div>
<?php
$datas=mysql_query("select * from score where Email='$email'");
while($row=mysql_fetch_row($datas))
{
	$total=$row[3];
	$total = $total + $score;
	mysql_query("update score set Previous=$score,Total=$total where Email='$email'");
}
?>