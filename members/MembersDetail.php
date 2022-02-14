<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_members.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add members" ><i class="icon-plus-sign icon-large"></i> Add members</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_members=mysqli_query($conn,"select * from members");
	             $count = mysqli_num_rows($count_members);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Registered members List</div>
                          <div class="muted pull-right">
								Number of Registered members: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">members List 
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

													
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_members.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
	
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
<!-----------------------------------Content------------------------------------>
<?php
		$members_query = mysqli_query($conn,"select * from members")or die(mysqli_error());
		while($row = mysqli_fetch_array($members_query)){
		$username = $row['id'];
	
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