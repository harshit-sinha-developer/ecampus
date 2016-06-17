<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/main_forum.css">
</head>
<?php
session_start();
if(!isset($_SESSION['sess']))
{
	echo "<script>location='login.php'</script>";
}
?>
<?php
include('header2.php');
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysite"; // Database name 
$tbl_name="fquestions"; // Table name 
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);
?>
<div class="forum_container">


<div class="forum_body">
<div class="forum_head">
<b>Dicscussions</b>
</div>
 
<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>
<div class="topic">
<table>

<tr class="row_topic"><td class="ent1"><b>Topic:</b> <a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></td>
<td class="ent2"><b>Views: </b><?php echo $rows['view']; ?></td>
<td class="ent3"><?php echo $rows['datetime']; ?></td>
</tr>

</table>
</div>
<?php
}

?>
 


</div>