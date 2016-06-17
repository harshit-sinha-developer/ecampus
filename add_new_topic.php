<?php
session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}

?>

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysite"; // Database name 
$tbl_name="fquestions"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
$datetime=date("d/m/y h:i:s"); //create date time
 
$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);
echo "<script>location='main_forum.php'</script>";


mysql_close();
?>