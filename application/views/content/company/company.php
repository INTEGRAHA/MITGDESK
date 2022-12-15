<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<button class="btn btn-sm btn-primary font-weight-bold" onclick="open_modal_add('company')">
						<i class="fas fa-plus-circle"></i>
						Add Company
					</button>
					<button class="btn btn-sm btn-outline-success ml-auto font-weight-bold" data-toggle="modal" data-target="#addRowModal">
						<i class="far fa-file-excel"></i>
						Download
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive" width="100%">
					<table class="display table table-sm table-striped table-hover use-datatable">
						<thead>
							<tr>
								<th class="text-primary" width="5%">#</th>
								<th class="text-primary" width="20%">Company</th>
								<th class="text-primary" width="25%">Address</th>
								<th class="text-primary" width="15%">Email</th>
								<th class="text-center text-primary" width="10%">Contact</th>
								<th class="text-center text-primary" width="10%">Tickets</th>
								<th class="text-center text-primary" style="width: 10%">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1 ?>
							<?php foreach ($companies as $company) : ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= strtoupper($company['company_name']) ?></td>
									<td><?= $company['company_address'] ?></td>
									<td><?= $company['company_email'] ?></td>
									<td class="text-center">0</td>
									<td class="text-center">0</td>
									<td class="text-center">
										<div class="form-button-action">
											<button type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-outline-warning mr-2" data-original-title="Edit" onclick="open_modal_edit('<?= $company['t_company_id'] ?>')">
												<i class="fa fa-edit"></i>
											</button>
											<button type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-outline-danger" data-original-title="Remove" onclick="open_modal_delete('<?= $company['t_company_id'] ?>')">
												<i class="fa fa-trash"></i>
											</button>
										</div>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
