<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROm student where RegNo='$id[$i]'");
}
header("location: add_student.php");
}
?>