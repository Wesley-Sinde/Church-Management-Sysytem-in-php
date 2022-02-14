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
					   				
					  <!-- block -->
                        <div id="block_bg" class="block">
                            
							
                           <div class="block-content collapse in">
				           <div class="span12">
									
				              <div class="block-content collapse in">
<div id="page-wrapper">
				
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Add An Event</div>
                          <div class="muted pull-right">
								 <span class="badge badge-info"></span>
							 </div>
						  </div>
						  
                
													

	
<div class="block-content collapse in">
    <div class="span12">
<?php include('add_event.php')?>	
		
			  		
</div>
</div>
</div>
</div>
</div>
					     
						
                                </div>
                            </div>
                        </div></div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />		
</html>