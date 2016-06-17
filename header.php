<?php
mysql_connect("localhost","root","");
mysql_select_db("mysite");
$log="";
$link="";
$name="My Account";
if(isset($_SESSION['sess']))
{
	$log="Logout";
	$link="logout.php";
	$email=$_SESSION['sess'];
	$data=mysql_query("select * from user where Email='$email'");
	while($row=mysql_fetch_row($data))
	{
		$name=$row[1];
	}
}
else
{
	$log="Login";
	$link="login.php";
	$name="My Account";
}
?>
<div class="header">
<a href="index.php"><img class="logo" src="images/logo.png" height="200px" onMouseOver="hover_logo(this)" onMouseOut="out_logo(this)"></a>
<br><br>
<h1><span class="heading"><sup>e</sup>campus</span></h1>
<br>
<h3><span class="subheading">Come Study With Us</span></h3>
</div>
<div class="menu">
<div class="navigation1">
<ul>
<a href="index.php"><li>Home</li></a>
<a href="about.php"><li>About Us</li></a>
<li>Tutorials
    <ul>
    <li><a href="topics-html/HTML%20Tutorial%20-%20javatpoint.html">HTML</a></li>
    <li><a href="topics-css/CSS%20Tutorial%20-%20javatpoint.html">CSS</a></li>
    <li><a href="books.php">Books</a></li>
    </ul>
</li>
<a href="take_test.php"><li>Tests</li></a>

<a href="main_forum.php"><li>Forum</li></a>

</ul>
<div class="navigation2">
<ul>
<?php
echo "<script>document.write('<a href=$link ><li>$log</li></a>')</script>";
?>
<a href="register.php"><li>Register</li></a>
<a href="account.php"><li><?php echo $name ?></li></a>
</ul>
</div>
</div>

</div>



    
