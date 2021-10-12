<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Halaman Admin</h2>
						<h5 class="text-white op-7 mb-2">Informasi Katalog</h5>
					</div>
					
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

			<div class="col-md-12">
				<div class="card">

					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Katalog Informasi</h4>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Tambah Katalog
							</button>
						</div>
					</div>

					<div class="card-body">
						<!-- Modal -->
						<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header no-bd">
										<h5 class="modal-title">
											<span class="fw-mediumbold">
											Tambah Katalog</span> 
											
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										
										<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>admin/tambah" >
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label>Judul</label>
														<input id="judul" name="judul" type="text" class="form-control" placeholder="Masukkan judul" required="">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Deskripsi</label>
														<textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" rows="5" required=""></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Gambar</label>
														<input id="gambar" name="gambar" type="file" class="form-control" required="">
													</div>
												</div>
											</div>

										</div>
										<div class="modal-footer no-bd">
											<input type="submit" name="tambah" value="Tambah" class="btn btn-primary">

											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<?php if (isset($_GET['gagal'])) { ?>
							<div class="alert alert-danger" role="alert">
								Katalog gagal ditambahkan
							</div>

						<?php }elseif (isset($_GET['sukses'])) { ?>
							<div class="alert alert-success" role="alert">
								Katalog berhasil ditambahkan
							</div>

						<?php }elseif (isset($_GET['gagalu'])) { ?>
							<div class="alert alert-danger" role="alert">
								Katalog gagal diedit
							</div>
						<?php }elseif (isset($_GET['suksesu'])) { ?>
							<div class="alert alert-success" role="alert">
								Katalog berhasil diedit
							</div>
						<?php }elseif (isset($_GET['gagalh'])) { ?>
							<div class="alert alert-danger" role="alert">
								Katalog gagal dihapus
							</div>
						<?php }elseif (isset($_GET['suksesh'])) { ?>
							<div class="alert alert-success" role="alert">
								Katalog berhasil dihapus
							</div>
						<?php } ?>

						<div class="table-responsive">
							<table id="add-row" class="display table table table-hover" >
								<thead>
									<tr>
										<th>Gambar</th>
										<th>Judul</th>
										<th>Deskripsi</th>
										
										<th>Kunjungan</th>
										<th style="width: 10%">Aksi</th>
									</tr>
								</thead>
								<!-- <tfoot>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Action</th>
									</tr>
								</tfoot> -->
								<tbody>

									<?php foreach ($data as $d) { ?>
										<tr>
											<td align="center"><a href="<?= base_url("assets/img/upload/$d->gambar_post")  ?>"><img width="100px" src="<?= base_url("assets/img/upload/$d->gambar_post")  ?>"></a></td>
											<td><?= $d->judul_post ?></td>
											<td><?= substr($d->isi_post, 0, 50).'...'; ?></td>
											
											<td><?= $d->kunjungan ?></td>
											<td>
												<div class="form-button-action">
													<button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" data-toggle="modal" data-target="#editRowModal<?= $d->id_post; ?>">
														<i class="fa fa-edit"></i>
													</button>
													<a onclick="confirmation(event)" href="<?= base_url(); ?>admin/hapus/<?= $d->id_post; ?>/<?= $d->gambar_post ?>"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</button></a>
													
												</div>
											</td>
										</tr>

										<!-- Modal -->
										<div class="modal fade" id="editRowModal<?= $d->id_post; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header no-bd">
														<h5 class="modal-title">
															<span class="fw-mediumbold">
															Edit Katalog</span> 

														</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">

														<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>admin/edit" >
															<input type="hidden" name="id_post" value="<?= $d->id_post; ?>">
															<input type="hidden" name="gambar_post_h" value="<?= $d->gambar_post; ?>">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group form-group-default">
																		<label>Judul</label>
																		<input id="judul" name="judul" type="text" class="form-control" placeholder="Masukkan judul" required="" value="<?= $d->judul_post ?>">
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Deskripsi</label>
																		<textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" rows="5" required=""><?= $d->isi_post; ?></textarea>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Gambar</label>
																		<input id="gambar" name="gambar" type="file" class="form-control">
																		<?= $d->gambar_post; ?>
																	</div>
																</div>
															</div>

														</div>
														<div class="modal-footer no-bd">
															<input type="submit" name="edit" value="Edit" class="btn btn-primary">

															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
											</div>
										</div>

									<?php } ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


