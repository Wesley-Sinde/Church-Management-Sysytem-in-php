  <?php error_reporting(0); ?>
  <?php $get_event_id = $_GET['id']; ?>
  <a href="addResrveSlots.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add New"><i class="icon-plus-sign icon-large"></i> Add New Event</a>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#add').tooltip('show');
          $('#add').tooltip('hide');
      });
  </script>
  <div class="navbar navbar-inner block-header">
      <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Slot Info.</div>
  </div>
  <?php
    $query = mysqli_query($conn, "select * from slotsreserved where eventId = '$get_event_id'") or die(mysqli_error());
    $row = mysqli_fetch_array($query);
    ?>

  <div class="row-fluid">
      <!-- block -->
      <div class="block">
          <div class="navbar navbar-inner block-header">
              <div class="muted pull-left"><i class="icon-plus-sign icon-large"> EDIT Slot</i></div>
          </div>
          <div class="block-content collapse in">
              <div class="span12">
                  <form method="post">
                      <table>
                          <tr>
                              <td style="color: #003300; font-weight: bold; font-size: 16px">Edit Slot Here:</td>
                          </tr>
                          <tr>
                              <td>&nbsp;</td>
                          </tr>
                          <td>&nbsp; Title</td>
                          </tr>
                          <tr>
                              <td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
                          </tr>
                          <tr>
                              <td>&nbsp; No of slots available</td>
                          </tr>
                          <tr>
                              <td><input type="number" name="slots" value="<?php echo $row['slots']; ?>"></td>
                          </tr>

                          <tr>
                              <td>&nbsp; Event Date</td>
                          </tr>
                          <tr>
                              <td><input type="date" name="eventDate" value="<?php echo $row['eventDate']; ?>"></td>
                          </tr>

                          <tr>
                              <td>&nbsp; Description</td>
                          </tr>
                          <tr>
                              <td>
                                  <textarea name="description" value="<?php echo $row['description']; ?>" class="text"><?php echo $row['description']; ?></textarea>
                              </td>
                          </tr>


                          <tr>
                              <td><input type="submit" name="update" value="SAVE"></td>
                          </tr>
                      </table>
                  </form>
              </div>
          </div>
      </div>
      <!-- /block -->
  </div>

  <?php

    if (isset($_POST['update'])) {


        $title = $_POST['title'];
        $slots = $_POST['slots'];
        $eventDate = $_POST['eventDate'];
        $description = $_POST['description'];
        $u_id = $_SESSION['id'];


        $qry = "UPDATE slotsreserved  SET title='$title',slots='$slots',eventDate='$eventDate',
        description='$description',u_id='$u_id' where eventId='$get_event_id'";

        $result = mysqli_query($conn, $qry) or die(mysqli_error());
        if ($result == TRUE) {
            echo "<script type = \"text/javascript\">
											
											window.location = (\"events.php\")
											</script>";
        } else {
            echo "<script type = \"text/javascript\">
											alert(\"Not Updated. Try Again\");
											</script>";
        }
    }


    ?>