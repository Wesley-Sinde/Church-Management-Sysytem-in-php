  <?php error_reporting(0); ?>
  <?php $get_event_id = $_GET['id']; ?>
  <a href="events.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add New"><i class="icon-plus-sign icon-large"></i> Add New Event</a>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$('#add').tooltip('show');
  		$('#add').tooltip('hide');
  	});
  </script>
  <div class="navbar navbar-inner block-header">
  	<div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit member Info.</div>
  </div>
  <?php
	$query = mysqli_query($conn, "select * from event where id = '$get_event_id'") or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	?>

  <div class="row-fluid">
  	<!-- block -->
  	<div class="block">
  		<div class="navbar navbar-inner block-header">
  			<div class="muted pull-left"><i class="icon-plus-sign icon-large"> EDIT EVENT</i></div>
  		</div>
  		<div class="block-content collapse in">
  			<div class="span12">
  				<form method="post">
  					<table>
  						<tr>
  							<td style="color: #003300; font-weight: bold; font-size: 16px">Edit Event Here:</td>
  						</tr>
  						<tr>
  							<td>&nbsp;</td>
  						</tr>
  						<tr>
  							<td><input type="text" name="title" value="<?php echo $row['Title']; ?>"></td>
  						</tr>

  						<tr>
  							<td><input type="date" name="date" value="<?php echo $row['Date']; ?>"></td>
  						</tr>
  						<tr>
  							<td>
  								<textarea name="content" rows="" cols="" value=""><?php echo $row['content']; ?></textarea>
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
		$date = $_POST['date'];
		$content = $_POST['content'];
		$qry = "UPDATE event  SET Title='$title',Date='$date',content='$content' where id='$get_event_id'";

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