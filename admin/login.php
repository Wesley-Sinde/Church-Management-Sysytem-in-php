<?php
        include('lib/dbcon.php');
		dbcon(); 
		session_start();	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		/*................................................ admin .....................................................*/
			$query = "SELECT * FROm admin WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
			
		/*...................................................student ..............................................*/
		$query_student = mysqli_query($conn,"SELECT * FROm student WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$num_row_student = mysqli_num_rows($query_student);
		$row_student = mysqli_fetch_array($query_student);
		
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['admin_id'];
		echo 'true_admin';
		
		mysqli_query($conn,"insert into user_log (username,login_date,admin_id)values('$username',NOW(),".$row['admin_id'].")")or die(mysqli_error());
		
		}else if ($num_row_student > 0){
		$_SESSION['student']=$row_student["student_id"];
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (username,login_date,student_id)values('$username',NOW(),".$row_student["student_id"].")")or die(mysqli_error());
	
		 }else{ 
				echo 'false';
		}	
				
		?>