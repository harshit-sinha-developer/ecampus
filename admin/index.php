<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" href="css/header_admin.css" type="text/css" />
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
</div>
</body>
</html>
