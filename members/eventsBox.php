 <?php
    // $selMessage = $conn->query("SELECT * FROM newsAndEvents WHERE created > now() - INTERVAL 90 DAY ORDER BY created DESC ");
    // if ($selMessage->rowCount() > 0) {
    //     while ($message = $selMessage->fetch(PDO::FETCH_ASSOC)) {
    //     }
    // } else {
    // }
    ?>





 <div class="row-fluid">
     <!-- block -->
     <div class="block">
         <div class="navbar navbar-inner block-header">
             <div class="muted pull-left"><i class="icon-plus-sign icon-large">Select Reservation Event</i></div>
         </div>
         <div class="block-content collapse in">
             <div class="span12">
                 <div class="control-group">
                     <div class="controls">
                         <form action="Reserve.php" method="get">
                             <select class="mb-2 form-control" name="eventId">
                                 <option value="0">Select Reservation Event</option>
                                 <?php
                                    $selevent = $conn1->query("SELECT * FROM slotsreserved WHERE eventDate > now()  ORDER BY created DESC ");
                                    if ($selevent->rowCount() > 0) {
                                        while ($seleventRow = $selevent->fetch(PDO::FETCH_ASSOC)) { ?>

                                         <option value="<?php echo $seleventRow['eventId']; ?>">

                                             <?php echo $seleventRow['title']; ?>

                                         </option>
                                     <?php }
                                    } else { ?>
                                     <option value="0">No Reservation Found Found</option>
                                 <?php }
                                    ?>
                             </select>
                             <hr>
                             <input type="submit" data-placement="right" class="btn btn-info" title="Click to To Reserve Page" value="Go To Select Page">
                             <!-- <div class="control-group">
                                 <div class="controls">
                                     <button name="save" type="submit" class="btn btn-info" id="save" data-placement="right" title="Click to Save">
                                         <i class="icon-plus-sign icon-large"> Select</i></button>
                                     <script type="text/javascript">
                                         $(document).ready(function() {
                                             $('#save').tooltip('show');
                                             $('#save').tooltip('hide');
                                         });
                                     </script>
                                 </div>

                             </div> -->
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- /block -->
 </div>