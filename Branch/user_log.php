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
						<?php	
	                 $count_log=mysqli_query($conn,"select * from user_log");
	                 $count = mysqli_num_rows($count_log);
                     ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-group"></i> Users Log List</div>
								<div class="muted pull-right">
								Number of System User Log: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_user_log.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								    <a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#delete_user_log" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th>Date Login</th>
												<th>Date logout</th>
												<th>Username</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from user_log order by login_date AND logout_date DESC")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['user_log_id'];
													?>
									
												<tr>
												
											   <td width="70">
									           <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
								               </td>
												<td><i class="icon-calendar"></i>&nbsp;
												<?php echo $row['login_date']; ?></td>
												<td><i class="icon-calendar"></i>&nbsp;
												<?php echo $row['logout_date']; ?></td>
												<td><i class="icon-user"></i>&nbsp;
												<?php echo $row['username']; ?></td>
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

</html>