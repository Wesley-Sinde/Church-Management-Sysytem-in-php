<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
    <link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen" />

</head>
<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <?php $query = mysqli_query($conn, "select * from members where id = '$session_id'") or die(mysqli_error());
                    $row = mysqli_fetch_array($query);
                    ?>
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnail']; ?>"><strong> Welcome! <?php echo $user_row['fname'] . " " . $user_row['lname'];  ?></strong>
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
                                        $result = mysqli_query($conn, "select *, SUm(Amount) AS value_sum from tithe where na='$session_id' ");
                                        $row = mysqli_fetch_assoc($result);
                                        $sum = $row['value_sum'];

                                        ?>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge"><?php echo $sum; ?></div>
                                                                    <div>my Total Tithes</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="Tithes.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Give Tithe</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                            $result1 = mysqli_query($conn, "select *, SUm(Amount) AS value_sum from offering where na='$session_id' ");
                                            $row = mysqli_fetch_assoc($result1);
                                            $sum1 = $row['value_sum'];

                                            ?>
                                            <div class="span6">
                                                <div class="panel panel-green">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge"><?php echo $sum1; ?></div>
                                                                    <div>my Total Offering</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="offering.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Offer Now</span>
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
                                        $result2 = mysqli_query($conn, "select *, SUm(Amount) AS value_sum from giving where na='$session_id' ");
                                        $row = mysqli_fetch_assoc($result2);
                                        $sum2 = $row['value_sum'];

                                        ?>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-yellow">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge"><?php echo $sum2; ?></div>
                                                                    <div>my Total Free Will Offering</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="giving.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Give Now</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <?php
                                            $count_members = mysqli_query($conn, "SELECT * FROM  members 
                                            WHERE  DATE_ADD(STR_TO_DATE(Birthday, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Birthday, '%Y-%m-%d')) YEAR) 
                                            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
                                            $count = mysqli_num_rows($count_members);
                                            ?>
                                            <div class="span6">
                                                <div class="panel panel-red">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-calendar  fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge"><?php echo $count; ?></div>
                                                                    <div>Current $ Upcoming Birthdays</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="events.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View Details</span>
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
                                        $count_members2 = mysqli_query($conn, "SELECT * 
FROm  event
WHERE  DATE_ADD(STR_TO_DATE(Date, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Date, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
                                        $counts = mysqli_num_rows($count_members2);
                                        ?>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-green">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-calendar fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge"><?php echo  $counts; ?></div>
                                                                    <div>Upcoming Events</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="events.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <?php
                                            $count_members = mysqli_query($conn, "SELECT * 
FROm  members
WHERE  DATE_ADD(STR_TO_DATE(Birthday, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Birthday, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
                                            $count = mysqli_num_rows($count_members);
                                            ?>

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