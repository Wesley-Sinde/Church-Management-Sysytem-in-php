<?php
 	 include('./lib/dbcon.php'); 
     dbcon();
	include('session.php');
	$id=$_POST['selector'];
 	$stdev_id  = $_POST['stdev_id'];


	if ($id == '' ){ 
	header("location: device_location.php");
	?>
	

	<?php }else{
	
	$query = mysqli_query($conn,"select * from location_details order by ld_id DESC")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$ld_id  = $row['ld_id'];
	

    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
	$oras = strtotime("now");
	$ora = date("Y-m-d",$oras);
    mysqli_query($conn,"insert location_details (id,stdev_id,date_deployment) values('$id[$i]','$stdev_id','$ora')")or die(mysqli_error());
	mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Assign Device id $id[$i] to location id $stdev_id')")or die(mysqli_error());		
    }
    header("location: device_location.php");
    }  
?>
	
	

	
	