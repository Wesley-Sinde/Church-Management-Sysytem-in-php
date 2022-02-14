  <?php
    @$editID = $_GET['id'];
    @$eventId = $_GET['eventId'];
    if ($eventId != '') {
        $sresult = mysqli_query($conn, "SELECT SUM(slots) AS slots FROM sportreserve where eventId='$eventId'");
        $srow = mysqli_fetch_assoc($sresult);
        $ssum = $srow['slots'];


        $selEventData = $conn1->query("SELECT * FROM slotsreserved WHERE eventId='$eventId ' ");
        $selslotsRow = $selEventData->fetch(PDO::FETCH_ASSOC);
        if ($selEventData->rowCount() > 0) {
            $Totseats = $selslotsRow['slots'];
            $eventDate = $selslotsRow['eventDate'];
        }

        //$selEventToedit = $conn1->query("select * from members INNER JOIN sportreserve ON members.id=sportreserve.na where id='$editID' and eventDate >= now() and  na='$session_id'")->fetch(PDO::FETCH_ASSOC);


        $selEventToedit = $conn1->query("SELECT * FROM sportreserve where id=$editID ");
        if ($selEventToedit->rowCount() > 0) {
            while ($selEventToeditrow = $selEventToedit->fetch(PDO::FETCH_ASSOC)) {
                $seats = $Totseats - $ssum + $selEventToeditrow['slots'];
                $savedSlots = $selEventToeditrow['slots'];
            }

            // $selEventToedit = $conn1->query("SELECT * FROM slotsreserved WHERE eventId ='$myEventId' ")->fetch(PDO::FETCH_ASSOC);
            // if ($selEventToedit) {
            //     $seats = $Totseats - $ssum + $selEventToedit['slots'];
    ?>


          <div class="row-fluid">
              <!-- block -->
              <div class="block">
                  <div class="navbar navbar-inner block-header">
                      <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Reserve Your Spot</i></div>
                      <hr>
                      <div class="muted pull-left"> </div>
                      <div class="empty">
                          <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-info-sign"></i>
                              <strong>Note!:</strong> Spot remaining: <?php echo $seats; ?>
                          </div>
                      </div>
                  </div>
                  <div class="block-content collapse in">
                      <div class="span12">
                          <form method="post">
                              <div class="control-group">
                                  <div class="controls">
                                      <!-- <input class="input focused" name="slots" id="slotChange" type="number" placeholder="Enter Total Of The Sports You Want To Reserve" required> -->
                                      <input class="input focused" name="slotsAvailable" value="<?php echo $seats; ?>" required id="slotsAvailable" type="hidden" class="form-control">
                                      <input name="slots" value="<?php echo $savedSlots; ?>" required id="slots" placeholder="Enter Total Of The Sports You Want To Reserve..." class="form-control">
                                      <input type="hidden" name="id" value="<?php echo $editID ?>" id="">
                                      <br>
                                      <hr>
                                      <button onclick="checkSlots()" class="btn btn-info" data-placement="right" title="Click to Check">
                                          <i class="icon-info-sign icon-large"> Check Validity</i>
                                      </button>
                                      <br>
                                      <hr>
                                      <button disabled type="submit" id="submit" name="send" class="btn btn-primary btn-lg">Reserve Slot(s)</button>
                                      <p style="color: red; font-weight: bold;" id="errorMessage"></p>

                                  </div>
                              </div>
                              <p style="color: red; font-weight: bold;" id="message"></p>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- /block -->
          </div>
          <?php

            if (isset($_POST['send'])) {
                $idsave = $_POST['id'];
                $slotsSave = $_POST['slots'];
                // get_event_id

                $upddata = $conn1->query("UPDATE sportreserve SET slots = '$slotsSave' WHERE sportreserve.id = '$idsave'");
                // $upddata = $conn1->query("UPDATE sportreserve SET slots='$slotsSave' WHERE id='$idsave' ");
                if ($upddata) {
            ?>
                  <script>
                      $.jGrowl("The Reserve Successfully updated", {
                          header: 'Reserve updated'
                      });
                      window.location = "MyReserve.php";
                  </script>
          <?php
                } else {
                    echo "<script type = \"text/javascript\">
											alert(\"Not Updated. Try Again\");
											</script>";
                }
            }

            ?>
      <?php

        } else {
            echo "Error in Fetching Your Event";
        }
    } else {
        ?>
      <div class="muted pull-left"><i class="icon-plus-sign icon-large">Select The Reserve Your Want To Edit</i></div>
      <hr>
      <div class="muted pull-left"> </div>
      <div class="empty">
          <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon-info-sign"></i>
              <strong>Note!:</strong> Spot remaining: <strong> Not Yest Selected Your Reserve </strong>
          </div>
      </div>
  <?php
    }
    ?>