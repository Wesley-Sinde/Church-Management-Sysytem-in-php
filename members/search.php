<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$username = $_POST['username'];
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Advance Search Result List</strong>
                       </div>
			        </div>
				
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $count_student=mysqli_query($conn,"select * from members where mobile LIKE '%$username%' ");
							 
	             $count = mysqli_num_rows($count_student);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i>member Search Result List</div>
                          <div class="muted pull-right">
								Number of Search members : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
<h4 id="sc">Students List 
    <div align="right" id="sc">Date:
		<?php
            $date = new DateTime();
             echo $date->format('l, F jS, Y');
        ?></div>
 </h4>						  
                  					  
<br/>
 	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
                	<th>Name</th>
					<th>Gender </th>
					<th>Residence</th>
			        <th>Place of Birth</th>
					<th>Birthday</th>
					<th>ministry</th>
                    <th>mobile No. </th>
                    					
		    </tr>
		</thead>
<tbody>
<?php
		$search_query = mysqli_query($conn,"select * from members	where mobile LIKE '%$username%'")or die(mysqli_error());
		while($row = mysqli_fetch_array($search_query)){
		$RegNo = $row['mobile'];
		?>
		<tr>
		
		
			 <td><?php echo $row['fname']." ".$row['lname']; ?></td>
			<td><?php echo $row['Gender']; ?></td>
			<td><?php echo $row['Residence']; ?></td>
			<td><?php echo $row['pob']; ?></td>
			<td><?php echo $row['Birthday']; ?></td>
			<td><?php echo $row['ministry']; ?></td>	
            <td><?php echo $row['mobile']; ?></td>
			
						
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>