<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<div class="card">
					<div class="card-body pb-3">
						<form role="form text-left">
							<label>Name</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn bg-gradient-primary">Save</button>
				<button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addRowModal" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p class="small">Create a new row using this form, make sure you fill them all</p>
				<form>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Name</label>
								<input id="addName" type="text" class="form-control" placeholder="fill name">
							</div>
						</div>
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Position</label>
								<input id="addPosition" type="text" class="form-control" placeholder="fill position">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Office</label>
								<input id="addOffice" type="text" class="form-control" placeholder="fill office">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
