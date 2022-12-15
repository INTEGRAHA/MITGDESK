<!-- Modal -->
<div class="modal fade" id="modalAdd" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary font-weight-bold" id="modalTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" id="formModalAdd" method="post">
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<div class="form-group">
								<label class="text-primary" for="company_name">Company Name <span class="text-danger">*</span></label>
								<input type="hidden" class="form-control" id="company_id" name="company_id">
								<input type="text" class="form-control" id="company_name" name="company_name">
								<span class="error-validation text-danger"></span>
							</div>
							<div class="form-group">
								<label class="text-primary" for="company_phone">Company Phone <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="company_phone" name="company_phone">
								<span class="error-validation text-danger"></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="form-group">
								<label class="text-primary" for="company_email">Company Email <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="company_email" name="company_email">
								<span class="error-validation text-danger"></span>
							</div>
							<div class="form-group">
								<label class="text-primary" for="company_website">Company Website</label>
								<input type="text" class="form-control" id="company_website" name="company_website">
							</div>
						</div>
						<div class="col-md-6 col-lg-12">
							<div class="form-group">
								<label class="text-primary" for="company_type">Industry Type <span class="text-danger">*</span></label>
								<select class="form-control" id="company_type" name="company_type">
									<option value="">-- Choose Option --</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<span class="error-validation text-danger"></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="form-group">
								<label class="text-primary" for="company_address">Address <span class="text-danger">*</span></label>
								<textarea class="form-control" id="company_address" name="company_address" rows="3"></textarea>
								<span class="error-validation text-danger"></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="form-group">
								<label class="text-primary" for="company_description">Description</label>
								<textarea class="form-control" id="company_description" name="company_description" rows="3"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-sm btn-primary font-weight-bold" onclick="save()">Save</button>
			</div>
		</div>
	</div>
</div>
