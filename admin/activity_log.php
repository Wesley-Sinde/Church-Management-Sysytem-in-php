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
	             $count_log=mysqli_query($conn,"select * from activity_log");
	             $count = mysqli_num_rows($count_log);
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> System User Activity Log</div>
								<div class="muted pull-right">
								Number of System user Activity Log: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_log.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						            <a data-placement="right" title="Click to Delete checked item" data-toggle="modal" href="#delete_log" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th>Date</th>
												<th>System User</th>
												<th>Action</th>
									
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysqli_query($conn,"select * from  activity_log order by date DESC")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id = $row['activity_log_id'];
										$username = $row['username'];
									?>
							
                                    <tr>
					                    <td width="70">
									     <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
								        </td>

                                         <td><i class="icon-calendar"></i>&nbsp;
										 <?php  echo $row['date']; ?></td>
                                         <td>
										 <?php echo $row['username']; ?></td>
                                         <td><i class="icon-tasks"></i>&nbsp;
										 <?php echo $row['action']; ?></td>

                                        </tr>
                         
						                 <?php } ?>
						   
                              
										</tbody>
									</table>
								</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>