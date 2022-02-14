<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar.php'); ?>
            <div class="span3" id="adduser">
                <?php include('eventsBox.php'); ?>
            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->

                    <div class="empty">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon-info-sign"></i> <strong>Note!:</strong> Here is the records from your previous slot reservation
                        </div>
                    </div>

                    <?php
                    $result = mysqli_query($conn, 'SELECT SUM(slots) AS slots FROM sportreserve');
                    $row = mysqli_fetch_assoc($result);
                    $sum = $row['slots'];
                    ?>
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"></i><i class="icon-user"></i> Reserving List History</div>
                            <div class="muted pull-right">
                                Total Number Reserving History: <span class="badge badge-info"><?php echo $sum; ?></span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    <?php include('modal_delete.php'); ?>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Event Name</th>
                                            <th>Slots Reserved</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $user_query = mysqli_query($conn, "select * from members INNER JOIN sportreserve ON members.id=sportreserve.na where na='$session_id' and eventDate >= now()") or die(mysqli_error());
                                        while ($row = mysqli_fetch_array($user_query)) {
                                            $id = $row['id'];
                                        ?>

                                            <tr>
                                                <td width="30">
                                                    <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td>
                                                    <?php
                                                    $myEventId = $row['eventId'];
                                                    try {
                                                        $selEventName = $conn1->query("SELECT * FROM slotsreserved WHERE eventId ='$myEventId' ")->fetch(PDO::FETCH_ASSOC);
                                                        if ($selEventName) {
                                                            echo $selEventName['title'];
                                                        } else {
                                                    ?>
                                                            <div style="background-color: #6e102b; color:white; font-size:large;">
                                                                Delete/Terminated
                                                            </div>
                                                        <?php
                                                        }
                                                    } catch (\Throwable $th) { ?>
                                                        <div style="background-color: #6e102b; color:white; font-size:large;">
                                                            Delete/Terminated
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $row['slots']; ?></td>
                                                <td><?php echo date('Y-m-d', strtotime($row['created'])); ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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