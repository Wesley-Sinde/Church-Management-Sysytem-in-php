<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
	<link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>

</head>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('sidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysqli_query($conn,"select * from admin where admin_id = '$session_id'")or die(mysqli_error());
			         $row = mysqli_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Welcome! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
     
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $student = mysqli_query($conn,"select * from members ")or die(mysqli_error());
		 $student = mysqli_num_rows($student);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-users fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $student; ?></div>
                                        <div>All members</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="membersDetail.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $new = mysqli_query($conn,"SELECT * 
FROm  members
WHERE  DATE_SUB(STR_TO_DATE(date, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(date, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_SUB(CURDATE(), INTERVAL -2 DAY)")or die(mysqli_error());
		 $new = mysqli_num_rows($new);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                     <i class="fa fa-plus-circle  fa-5x" aria-hidden="true"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $new;?></div>
                                        <div>New members</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="add_members.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Add member</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
        <?php 
	     $student = mysqli_query($conn,"select * from giving ")or die(mysqli_error());
		 $student = mysqli_num_rows($student);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                     <i class="fa fa-money  fa-5x" aria-hidden="true"></i>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $student; ?></div>
                                        <div>Givings</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="giving.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Givings</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
		
$bd= mysqli_query($conn,"SELECT * 
FROm  members
WHERE  DATE_ADD(STR_TO_DATE(Birthday, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Birthday, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
			$bd= mysqli_num_rows($bd);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-calendar  fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $bd;?></div>
                                        <div>Current & Upcoming Birthdays</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="birthdays.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Birthdays</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div>
		
<div id="page-wrapper">
        <?php 
	    $result2 = mysqli_query($conn,'SELECT SUm(Amount) AS value_sum FROm giving'); 
$row = mysqli_fetch_assoc($result2); 
$sum2 = $row['value_sum'];
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                     <i class="fa fa-money  fa-5x" aria-hidden="true"></i>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $sum2; ?></div>
                                        <div> Total Givings</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="giving.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left"> Totals Givings</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
		$result = mysqli_query($conn,'SELECT SUm(Amount) AS value_sum FROm offering'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-money  fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $sum;?></div>
                                        <div>Total Offering</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="#">							  
                                <div class="modal-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div>		

              </div>	       
        </div>  	

				
			                 </div>
                            </div>
                        </div>
                        <!-- /block --> 						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
