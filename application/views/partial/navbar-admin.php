<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
	
	<div class="container-fluid">
		<div class="collapse" id="search-nav">
			
		</div>
		<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
			
			<li class="nav-item dropdown hidden-caret">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
					<div class="avatar-sm">
						<img src="<?= base_url(); ?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-user animated fadeIn">
					<div class="dropdown-user-scroll scrollbar-outer">
						<li>
							<div class="user-box">
								<div class="avatar-lg"><img src="<?= base_url(); ?>assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
								<div class="u-text">
									<h4>admin</h4>
									<p class="text-muted">admin@admin.com</p><!-- <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a> -->
								</div>
							</div>
						</li>
						<li>
							<!-- <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="#">My Balance</a>
							<a class="dropdown-item" href="#">Inbox</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Account Setting</a> -->
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url(); ?>login/logout">Logout</a>
						</li>
					</div>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<!-- End Navbar -->
</div>