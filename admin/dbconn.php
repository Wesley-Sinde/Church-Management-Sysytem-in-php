<?php
$host="localhost";
		$uname="root";
		$pas="";
		$db_name="cman";
		$tbl_name="admin";
		
		$conn = @mysqli_connect("$host","$uname","$pas","$db_name") or die ("cannot connect to the database");
		?>