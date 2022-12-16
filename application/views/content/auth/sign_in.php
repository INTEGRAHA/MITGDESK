<div class="container">
	<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
		<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
			<div class="card z-index-0">
				<div class="card-body">
					<h5 class="card-title text-center mb-4">Sign In</h5>
					<form role="form" method="post" action="<?= base_url('auth'); ?>">
						<div class="mb-3">
							<?= $this->session->flashdata('message'); ?>
						</div>
						<div class="mb-3">
							<input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="text-center">
							<button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
						</div>
						<p class="text-sm mt-3 mb-0">Don't have an account? <a href="<?= base_url('auth/registration') ?>" class="text-primary font-weight-bolder">Sign up</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>