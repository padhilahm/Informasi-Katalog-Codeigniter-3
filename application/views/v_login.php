<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Halaman Login</h2>
						<h5 class="text-white op-7 mb-2">Silahkan Login</h5>
					</div>
					
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Form Login</div>
						</div>

						<form method="post" action="<?= base_url() ?>login/proses">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6 col-lg-12">

										<?php if (isset($_GET['gagal'])) { ?>
											<div class="alert alert-danger" role="alert">
												Email/password salah
											</div>

										<?php } ?>

										<div class="form-group">
											<label for="email2">Email Address</label>
											<input type="email" class="form-control" id="email2" name="email2" placeholder="Enter Email" required="">

										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password2" name="password2" placeholder="Password" required="">
										</div>
									</div>


								</div>
							</div>
							<div class="card-action" align="right">
								<!-- <button class="btn btn-info">Masuk</button> -->
								<input type="submit" name="masuk" id="masuk" value="Masuk" class="btn btn-primary btn-round">
								<!-- <button class="btn btn-danger">Cancel</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>