 <?php
 include('lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($conn,"update members set password = '$new_password' where id = '$session_id'")or die(mysqli_error());
 ?>