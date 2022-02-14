<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					   <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_members=mysqli_query($conn,"SELECT * 
FROm  event
WHERE  DATE_ADD(STR_TO_DATE(Date, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Date, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
	             $count = mysqli_num_rows($count_members);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i>Upcoming Events</div>
                          <div class="muted pull-right">
								Upcoming Events <span class="badge badge-info"><?php  echo $count; ?></span>
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
		   <a href="#" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
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
                	<th>TITLE</th>
					<th>DATE </th>
					<th>DESCRIPTION</th>
			        
                    	
                   		
                    				
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$members_query = mysqli_query($conn,"SELECT * 
FROm  event
WHERE  DATE_ADD(STR_TO_DATE(Date, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Date, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)")or die(mysqli_error());
		while($row = mysqli_fetch_array($members_query)){
		$username = $row['id'];
	
		?>
									
		<tr>
		    
			<td><?php echo $row['Title']; ?></td>
			<td><?php echo $row['Date']; ?></td>
			<td><?php echo $row['content']; ?></td>
		
           
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