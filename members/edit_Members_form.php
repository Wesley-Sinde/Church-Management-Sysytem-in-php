<div class="row-fluid">				  
   <a href="add_members.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add New" ><i class="icon-plus-sign icon-large"></i> Add New  member</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit member Info.</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($conn,"select * from members where id = '$get_member_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
										<form method="post">
					<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="fname"  value="<?php echo $row['fname']; ?>" id="focusedInput" type="text" placeholder = "First Name" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="sname" value="<?php echo $row['sname']; ?>" id="focusedInput" type="text" placeholder = "Surname" required> 
                                   </p>
                                 </div>
                                  </div>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="lname" id="focusedInput" value="<?php echo $row['lname']; ?>" type="text" placeholder = "Last name" required> 
                                   </p>
                                 </div>
                                  </div>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="Gender" id="focusedInput" value="<?php echo $row['Gender']; ?>" type="text" placeholder = "Gender" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="birthday" id="focusedInput" value="<?php echo $row['Birthday']; ?>" type="date" placeholder = "Birthday" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="residence" id="focusedInput" value="<?php echo $row['Residence']; ?>" type="text" placeholder = "Residence" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="pob" id="focusedInput" value="<?php echo $row['pob']; ?>" type="text" placeholder = "place of birth" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>		
										
										<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="ministry" id="focusedInput" value="<?php echo $row['ministry']; ?>" type="text" placeholder = "ministry" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
									<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="mobile" id="focusedInput" value="<?php echo $row['mobile']; ?>" type="text" placeholder = "mobile number" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="email" value="<?php echo $row['email']; ?>" id="focusedInput" type="email" placeholder = "Email" > 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								 							 
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="password" id="focusedInput" value="<?php echo $row['password']; ?>" type="password" placeholder = "password " required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
                                    </div>
										
                                
                                        
										<div class="control-group">
                                          <div class="controls">
 <button name="update" class="btn btn-info" id="update" data-placement="right" title="Click to Update"><i class="icon-plus-sign icon-large"> Update</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
					</div>
                </div>
            </div>
              <!-- /block -->
      
<?php		
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$Gender = $_POST['Gender'];
$birthday = $_POST['birthday'];
$residence= $_POST['residence'];
$pob = $_POST['pob'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$password = $_POST['password'];



mysqli_query($conn,"update members set fname = '$fname',sname ='$sname',lname='$lname',Gender='$Gender',Birthday='$birthday', Residence='$residence',pob='$pob',ministry='$ministry',mobile='$mobile',email='$email',password='$password' where id='$get_member_id'") 
or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action)
 values(NOW(),'$admin_username','Edited member $sname')")or die(mysqli_error());
?>
<script>
  window.location = "add_members.php";
 $.jGrowl(" member Successfully Update", { header: 'member Update' });  
</script>
<?php
}
?>
