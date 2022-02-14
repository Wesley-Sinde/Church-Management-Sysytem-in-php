
<section class="listings">
		<div class="wrapper">
		
			<ul class="properties_list">
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
				<?php
					if(isset($_POST['send'])){
						
											
						$title = $_POST['title'];
						$date = $_POST['date'];
						$content = $_POST['content'];
							$qry = "INSERT INTO event (title,Date,content)
							VALUES('$title','$date','$content')";
							$result = mysqli_query($conn,$qry)or die(mysqli_error());
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											
											window.location = (\"events.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"message Not Send. Try Again\");
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>