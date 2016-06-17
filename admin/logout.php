<?php
session_start();
if(isset($_SESSION['admin']))
{

session_unset();
session_destroy();

echo "<script>location='index.php'</script>";
}
else
{
	echo "<script>location='index.php'</script>";
}
?>