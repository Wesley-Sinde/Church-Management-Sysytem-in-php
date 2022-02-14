<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_teen'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROm teens where id='$id[$i]'");
}
header("location: teensDetail.php");
}
?>