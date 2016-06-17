<html>
<head>
</head>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mysite");
//session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
?>
<body>
    <div class="sidebar">
        
            <?php
                 $data = mysql_query("select * from loggeduser");
				 $rows = mysql_num_rows($data);
				 if($rows <= 0)
				 {
					 echo "No users currently logged in";
				 }
				 else
				 {
					 echo "<h4 style='color:darkgreen;border-bottom:1px solid red;'>People currently Online</h4>";
					 
					 echo "<ul>";
					 while($rec = mysql_fetch_row($data))
					 {
						 echo "<li>$rec[1]</li>";
					 }
					 echo "</ul>";
				 }
            ?>
        
    </div>
    
</body>