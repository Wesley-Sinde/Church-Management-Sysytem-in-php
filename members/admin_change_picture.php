<!-- modal -->
<div id="mymodal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="mymodalLabel">Change Picture</h3>
	</div>
		<div class="modal-body">
					<form method="post" class="form-horizontal" action="admin_pic.php" enctype="multipart/form-data">							
								<div class="control-group">
								<label class="control-label" for="inputPassword">Browse Your Computer</label>
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>
										
					
		</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Save</button>
					</div>
					</form>
</div>
<!-- end  modal -->