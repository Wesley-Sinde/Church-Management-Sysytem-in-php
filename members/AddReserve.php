  <?php
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
        $seats = $Totseats - $ssum;
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
                                  <input name="slots" required id="slots" placeholder="Enter Total Of The Sports You Want To Reserve..." class="form-control">

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

                          <!-- <div class="control-group">
                              <div class="controls">
                                  <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                  <script type="text/javascript">
                                      $(document).ready(function() {
                                          $('#save').tooltip('show');
                                          $('#save').tooltip('hide');
                                      });
                                  </script>
                              </div>
                          </div> -->
                          <p style="color: red; font-weight: bold;" id="message"></p>
                      </form>
                  </div>
              </div>
          </div>
          <!-- /block -->
      </div>
      <?php

        if (isset($_POST['send'])) {
            $slots = $_POST['slots'];
            $insData = $conn->query("INSERT into  sportreserve  (slots, na, eventId,eventDate) VALUES ('$slots','$session_id','$eventId','$eventDate')");
            //mysqli_query($conn, "insert into sportreserve (slots,na) values('$slots','$session_id')") or die(mysqli_error());
            if ($insData) {
                echo ('Reserve added');
        ?>
              <script>
                  window.location = "myReserve.php";
                  $.jGrowl("The Reserve Successfully added", {
                      header: 'Reserve added'
                  });
              </script>
          <?php
            } else {
                echo ('failed');
            ?>
              <script>
                  window.location = "myReserve.php";
                  $.jGrowl("The Reserve failed added", {
                      header: 'Reserve save failed'
                  });
              </script>
          <?php
            }
            ?>
      <?php
        }

        ?>
      </script>
      <script>
          //   document.getElementById("slotsAvailable").addEventListener("change", function(event) {
          //       checkSlots();
          //   });
          //   document.getElementById("slots").addEventListener("onblur", function(event) {
          //       checkSlots();
          //   });
          //   document.getElementById("slots").addEventListener("Keydown", function(event) {
          //       checkSlots();
          //   });
          //   document.getElementById("slots").addEventListener("onblur", function(event) {
          //       checkSlots();
          //   });
      </script>
  <?php
    }
    ?>