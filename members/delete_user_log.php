<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_user_log'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROm user_log where user_log_id='$id[$i]'");
}
header("location: user_log.php");
}
?>