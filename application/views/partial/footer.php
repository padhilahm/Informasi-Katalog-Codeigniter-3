<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<!-- <li class="nav-item">
					<a class="nav-link" href="https://www.themekita.com">
						ThemeKita
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Help
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Licenses
					</a>
				</li> -->
			</ul>
		</nav>
		<div class="copyright ml-auto">
			<?= date('Y') ?>, <a href="#">Katalog Informasi</a>
		</div>				
	</div>
</footer>
</div>


<!-- Custom template | don't include it in your project! -->
<!-- <div class="custom-template">
	<div class="title">Settings</div>
	<div class="custom-content">
		<div class="switcher">
			<div class="switch-block">
				<h4>Logo Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
					<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
					<br/>
					<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Navbar Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeTopBarColor" data-color="dark"></button>
					<button type="button" class="changeTopBarColor" data-color="blue"></button>
					<button type="button" class="changeTopBarColor" data-color="purple"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
					<button type="button" class="changeTopBarColor" data-color="green"></button>
					<button type="button" class="changeTopBarColor" data-color="orange"></button>
					<button type="button" class="changeTopBarColor" data-color="red"></button>
					<button type="button" class="changeTopBarColor" data-color="white"></button>
					<br/>
					<button type="button" class="changeTopBarColor" data-color="dark2"></button>
					<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="purple2"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="green2"></button>
					<button type="button" class="changeTopBarColor" data-color="orange2"></button>
					<button type="button" class="changeTopBarColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Sidebar</h4>
				<div class="btnSwitch">
					<button type="button" class="selected changeSideBarColor" data-color="white"></button>
					<button type="button" class="changeSideBarColor" data-color="dark"></button>
					<button type="button" class="changeSideBarColor" data-color="dark2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Background</h4>
				<div class="btnSwitch">
					<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
					<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
					<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
					<button type="button" class="changeBackgroundColor" data-color="dark"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="custom-toggle">
		<i class="flaticon-settings"></i>
	</div>
</div> -->
<!-- End Custom template -->



<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url(); ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url(); ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="<?= base_url(); ?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url(); ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url(); ?>assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url(); ?>assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url(); ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url(); ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url(); ?>assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url(); ?>assets/js/setting-demo.js"></script>
<script src="<?= base_url(); ?>assets/js/demo.js"></script>
<script>
	$('#lineChart').sparkline([102,109,120,99,110,105,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: '#177dff',
		fillColor: 'rgba(23, 125, 255, 0.14)'
	});

	$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: '#f3545d',
		fillColor: 'rgba(243, 84, 93, .14)'
	});

	$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: '#ffa534',
		fillColor: 'rgba(255, 165, 52, .14)'
	});
</script>


<script >
	$(document).ready(function() {
		$('#basic-datatables').DataTable({
		});

		$('#multi-filter-select').DataTable( {
			"pageLength": 5,
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo( $(column.footer()).empty() )
					.on( 'change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
							);

						column
						.search( val ? '^'+val+'$' : '', true, false )
						.draw();
					} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

	<script>
		function confirmation(ev) {
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
			console.log(urlToRedirect); // verify if this is the right URL
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this imaginary file!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
			// redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
			if (willDelete) {
				swal("Poof! Your imaginary file has been deleted!", {
					icon: "success",
				});
			} else {
				swal("Your imaginary file is safe!");
			}
		});
		}
	</script>


	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {
				//== Sweetalert Demo 1

				$('.alert_notif').on('click',function(e) {
					swal({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Yes, delete it!',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							var getLink = $(this).attr('href');
							swal({
								title: 'Deleted!',
								text: 'Your file has been deleted.',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
							// console.log(getLink);
						} else {
							swal.close();
						}
					});
				});
			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>

	<script>
		function confirmation(ev) {
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href');
			console.log(urlToRedirect);
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				buttons:{
					confirm: {
						text : 'Yes, delete it!',
						className : 'btn btn-success'
					},
					cancel: {
						visible: true,
						className: 'btn btn-danger'
					}
				}
			})
			.then((willDelete) => {
				if (willDelete) {
					swal({
						title: 'Deleted!',
						text: 'Your file has been deleted.',
						type: 'success',
						buttons : {
							confirm: {
								className : 'btn btn-success'
							}
						}
					});
					window.location.href = urlToRedirect;
				} else {
					swal.close();
				}
			});
		}
	</script>



</body>
</html>