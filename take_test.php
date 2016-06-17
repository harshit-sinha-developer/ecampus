<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/take_test.css">
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
<div class="body">
<div class="body_container">
<div class="body_head">
Select the Test
</div>
<div class="body_lower">
<ul class="ul1">
<a href="test.php?test=test1"><li class="li1">Test-1</li></a>
<a href="test.php?test=test2"><li class="li1">Test-2</li></a>
<a href="test.php?test=test3"><li class="li1">Test-3</li></a>
<a href="test.php?test=test4"><li class="li1">Test-4</li></a>
<a href="test.php?test=test5"><li class="li1">Test-5</li></a>
</ul>
</div>
</div>
</div>
</body>