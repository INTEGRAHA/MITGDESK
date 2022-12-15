<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url('assets/vendor/atlantis/') ?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							Muhammad Zahra
							<span class="user-level">IT Department</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="<?= base_url('auth/profile') ?>">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('auth/profile') ?>">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('auth/settings') ?>">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'dashboard') ?>">
					<a href="<?= base_url('dashboard') ?>">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Masters Menu</h4>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'company') ?>">
					<a href="<?= base_url('company') ?>">
						<i class="fas fa-building"></i>
						<p>Companies</p>
					</a>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'department') ?>">
					<a href="<?= base_url('department') ?>">
						<i class="fas fa-sitemap"></i>
						<p>Departments</p>
					</a>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'contact') ?>">
					<a href="<?= base_url('contact') ?>">
						<i class="fas fa-address-book"></i>
						<p>Contacts</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Contents Menu</h4>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'ticket') ?>">
					<a href="<?= base_url('ticket') ?>">
						<i class="fas fa-ticket-alt"></i>
						<p>Tickets</p>
					</a>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'performance') ?>">
					<a href="<?= base_url('performance') ?>">
						<!-- <i class="fas fa-ticket-alt"></i> -->
						<i class="fas fa-tachometer-alt"></i>
						<p>Performance</p>
					</a>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'forum') ?>">
					<a href="<?= base_url('forum') ?>">
						<i class="fas fa-comments"></i>
						<p>Forums</p>
					</a>
				</li>
				<li class="nav-item <?php check_is_active($this->uri->segment(1), 'rating') ?>">
					<a href="<?= base_url('rating') ?>">
						<i class="fas fa-star"></i>
						<p>Review & Ratings</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->
