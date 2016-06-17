<?php
mysql_connect("localhost","root","");
mysql_select_db("mysite");
if(isset($_GET['email']))
{
	$email=$_GET['email'];
	$data=mysql_query("select * from user where Email='$email'");
	$row=mysql_num_rows($data);
	if($row>0)
	{
		echo "This Email-ID already exists";
	}
	else
	{
		echo "";
	}
}
?>