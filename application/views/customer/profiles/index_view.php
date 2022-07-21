<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("customer/layouts/_home/_head"); ?>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view("customer/layouts/_home/_sidebar"); ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view("customer/layouts/_home/_topbar"); ?>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800"><?= $page_title; ?></h1>
						<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
					</div>

					<div class="row">
						<div class="col-4">
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-md-4">
										<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")); ?>" class="card-img">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title"><?= $this->session->userdata("name"); ?></h5>
											<p class="card-text"><?= $this->session->userdata("email"); ?></p>
											<p class="card-text"><small class="text-muted">Bergabung Sejak : <?= date('d F Y', strtotime($this->session->userdata("created_at"))); ?></small></p>
										</div>
									</div>
								</div>
							</div>
							<?= $this->session->flashdata("message"); ?>
						</div>
						<div class="col-8">
							<div class="card">
								<div class="card-body">
									<h5 class="font-weight-bold">Update Profile</h5>
									<hr>
									<form action="<?= base_url("customer/profile/update-profile") ?>" method="post" enctype="multipart/form-data">
										<div class="form-group row">
											<label for="email" class="col-sm-2 col-form-label">E-mail kamu</label>
											<div class="col-sm-10">
												<input type="email" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("email"); ?>" readonly>
												<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
												<small class="text-muted">Hubungi administrator untuk merubah e-mail</small>
											</div>
										</div>
										<div class="form-group row">
											<label for="name" class="col-sm-2 col-form-label">Nama kamu</label>
											<div class="col-sm-10">
												<input type="name" name="name" id="name" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("name"); ?>">
												<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="phone" class="col-sm-2 col-form-label">Nomor Ponsel</label>
											<div class="col-sm-10">
												<input type="number" name="phone" id="phone" class="form-control <?= form_error('phone') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("phone"); ?>">
												<?= form_error('phone', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="address" class="col-sm-2 col-form-label">Alamat Kamu</label>
											<div class="col-sm-10">
												<textarea name="address" id="address" rows="3" class="form-control <?= form_error('address') ? 'is-invalid' : ''; ?>"><?= $this->session->userdata("address"); ?></textarea>
												<?= form_error('address', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="avatar" class="col-sm-2 col-form-label">Update Photo Profil</label>
											<div class="col-sm-10">
												<input type="file" name="avatar" id="avatar" class="form-control">
												<small class="text-muted">Kosongkan jika tidak ingin merubah</small>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary">Update Profile</button>
												<a href="<?= base_url("home"); ?>" class="btn btn-warning">Batalkan</a>
											</div>
										</div>
									</form>
								</div>
							</div>
							<br>
							<div class="card">
								<div class="card-body">
									<h5 class="font-weight-bold">Ganti Password</h5>
									<hr>
									<form action="<?= base_url("customer/profile/ubah-password") ?>" method="post">
										<div class="form-group row">
											<label for="current_password" class="col-sm-2 col-form-label">Password saat ini</label>
											<div class="col-sm-10">
												<input type="password" name="current_password" id="current_password" class="form-control <?= form_error('current_password') ? 'is-invalid' : ''; ?>">
												<?= form_error('current_password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
											<div class="col-sm-10">
												<input type="password" name="new_password" id="new_password" class="form-control <?= form_error('new_password') ? 'is-invalid' : ''; ?>">
												<?= form_error('new_password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="password_confirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
											<div class="col-sm-10">
												<input type="password" name="password_confirm" id="password_confirm" class="form-control <?= form_error('password_confirm') ? 'is-invalid' : ''; ?>">
												<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary">Ganti Password</button>
												<a href="<?= base_url("home") ?>" class="btn btn-warning">Batalkan</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php $this->load->view("customer/layouts/_home/_footer"); ?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>


	<?php $this->load->view("customer/layouts/_home/_scripts"); ?>

</body>

</html>
