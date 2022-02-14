   <div class="row-fluid">
   	<!-- block -->
   	<div class="block">
   		<div class="navbar navbar-inner block-header">
   			<div class="muted pull-left"><i class="icon-plus-sign icon-large"> ADD EVENT</i></div>
   		</div>
   		<div class="block-content collapse in">
   			<div class="span12">
   				<form method="post">
   					<table>
   						<tr>
   							<td style="color: #003300; font-weight: bold; font-size: 16px">Add Event Here:</td>
   						</tr>
   						<tr>
   							<td>&nbsp;</td>
   						</tr>
   						<tr>
   							<td><input type="text" name="title" value="Title"></td>
   						</tr>

   						<tr>
   							<td><input type="date" name="date" value="Date"></td>
   						</tr>
   						<tr>
   							<td>
   								<textarea name="content" placeholder="Description" class="text"></textarea>
   							</td>
   						</tr>
   						<tr>
   							<td><input type="submit" name="send" value="SAVE"></td>
   						</tr>
   					</table>
   				</form>
   			</div>
   		</div>
   	</div>
   	<!-- /block -->
   </div>

   <?php

	if (isset($_POST['send'])) {


		$title = $_POST['title'];
		$date = $_POST['date'];
		$content = $_POST['content'];
		$qry = "INSERT INTO event (Title,Date,content)
							VALUES('$title','$date','$content')";
		$result = mysqli_query($conn, $qry) or die(mysqli_error());
		if ($result == TRUE) {
			echo "<script type = \"text/javascript\">
											
											window.location = (\"events.php\")
											</script>";
		} else {
			echo "<script type = \"text/javascript\">
											alert(\"message Not Send. Try Again\");
											</script>";
		}
	}


	?>