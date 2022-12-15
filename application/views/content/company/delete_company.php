<!-- Modal -->
<div class="modal fade" id="modalDelete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary font-weight-bold">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control form-control-sm border-primary" name="delete_id" id="delete_id">
				<p>Are you sure want to delete it?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-sm btn-primary font-weight-bold" onclick="remove()">Delete</button>
			</div>
		</div>
	</div>
</div>
