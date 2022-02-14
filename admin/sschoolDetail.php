<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
				<div class="empty">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete?
                    </div>
                </div>
				
				<?php	
	             $count_log=mysqli_query($conn,"select * from sundays");
	             $count = mysqli_num_rows($count_log);
				
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> Church Sunday School Kids</div>
								<div class="muted pull-right">
								Number of Kids: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
                            </div>
							<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_kids.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
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
								<form action="delete_kid.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						            <a data-placement="right" title="Click to Delete checked item" data-toggle="modal" href="#delete_kid" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>		
		        <tr>	
<th>Check</th>	
                	<th>Name</th>
					<th>Gender </th>
					<th>Residence</th>
			        <th>Place of Birth</th>
					<th>Birthday</th>
					<th>Parent</th>
                    <th>mobile No. </th>
                    	
                   		
                    				
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$members_query = mysqli_query($conn,"select * from sundays")or die(mysqli_error());
		while($row = mysqli_fetch_array($members_query)){
		$id = $row['id'];
	
		?>
									
		<tr><td width="70">
									     <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
								        </td>
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