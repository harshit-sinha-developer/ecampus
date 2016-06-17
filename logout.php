<?php
mysql_connect("localhost","root","");
mysql_select_db("mysite");
session_start();
if(isset($_SESSION['sess']))
{
mysql_query("delete from loggeduser where Email='".$_SESSION['sess']."'");
session_unset();
session_destroy();

echo "<script>location='index.php'</script>";
}
else
{
	echo "<script>location='index.php'</script>";
}
?>