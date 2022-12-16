<!-- <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
	<span class="mask bg-gradient-dark opacity-6"></span>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 text-center mx-auto">
				<h1 class="text-white mb-2 mt-5">Welcome!</h1>
				<p class="text-lead text-white">
					Register your account to get started.
				</p>
			</div>
		</div>
	</div>
</div> -->
<div class="container">
	<div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
		<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
			<div class="card z-index-0">
				<div class="card-body">
					<h5 class="card-title text-center mb-4">Sign Up</h5>
					<form role="form" method="post" action="<?= base_url('auth/registration'); ?>">
						<div class="mb-3">
							<input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
							<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="mb-3">
							<input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="mb-3 row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
							</div>
							<div class="col-sm-6">
								<input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password" aria-label="Password">
							</div>
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="text-center">
							<button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign up</button>
						</div>
						<p class="text-sm mt-3 mb-0">Already have an account? <a href="<?= base_url('auth') ?>" class="text-primary font-weight-bolder">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>