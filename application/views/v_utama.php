
<div class="main-panel">
	<div class="content">

		<div class="panel-header bg-primary-gradient">

			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

					<div>


						<h2 class="text-white pb-2 fw-bold">Halaman Utama</h2>
						<h5 class="text-white op-7 mb-2">Informasi Katalog</h5>
					</div>
					<img src="<?= base_url() ?>assets/img/bg.png" alt="">
					
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

			<div class="row">

				<?php foreach ($tampil as $t) { ?>

				<div class="col-md-3">
					<div class="card card-post card-round">
						<img class="card-img-top" src="<?= base_url(); ?>assets/img/upload/<?= $t->gambar_post; ?>" alt="Card image cap">
						<div class="card-body">
							
							<h3 class="card-title">
								<a href="<?= base_url('utama/katalog/'.$t->id_post) ?>">
									<?= $t->judul_post; ?>
								</a>
							</h3>
							<p class="card-text"><?= substr($t->isi_post, 0, 70).'...'; ?></p>
							<a href="<?= base_url('utama/katalog/'.$t->id_post) ?>" class="btn btn-primary btn-rounded btn-sm">Read More</a>
						</div>
					</div>
				</div>

			<?php } ?>

			</div>

		</div>
	</div>
	