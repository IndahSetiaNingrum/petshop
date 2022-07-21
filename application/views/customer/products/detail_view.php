<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("customer/layouts/_head"); ?>

<body>

	<!-- Navigation -->
	<?php $this->load->view("customer/layouts/_navbar"); ?>
	<!-- Page Content -->
	<div class="container py-5">

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url("produk") ?>">Produk</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?= $product["name"] ?></li>
			</ol>
		</nav>

		<hr>

		<div class="row">
			<div class="col-sm-5">
				<figure class="figure">
					<img src="<?= base_url("assets/uploads/items/" . $product["images"]) ?>" class="figure-img shadow-sm img-fluid rounded-lg" alt="...">
				</figure>
			</div>
			<div class="col-sm-5">
				<a href="" class="text-dark text-decoration-none">
					<h5 class="font-weight-bold"><?= $product["name"] ?></h5>
				</a>
				<p class="lead text-muted">Rp. <span class="text-warning font-weight-bold"><?= number_format($product["price"]) ?></span></p>
				<p class="text-muted">Stok : <?= $product["stock"] ?> Unit</p>
				<hr>
				<form action="<?= base_url("tambah-keranjang/" . $product["item_id"]) ?>" method="POST">
					<div class="row">
						<div class="col-sm-3">
							<input type="number" class="form-control" name="qty" value="1" min="1" max="<?= $product["stock"] ?>">
						</div>
						<div class="col-sm-9">
							<button type="submit" class="btn btn-success btn-block text-white">Add to Cart</button>
						</div>
					</div>
				</form>
				<a href="<?= base_url() ?>" class="btn btn-light btn-block text-muted mt-3">Kembali</a>
			</div>
		</div>
		<!-- <div class="row py-3 ml-0"> -->
		<h5 class="font-weight-bold">Deskripsi Produk</h5>
		<p class="text-muted"><?= $product["description"] ?></p>
		<!-- </div> -->
	</div> <!-- /.container -->

	<!-- Footer -->
	<?php $this->load->view("customer/layouts/_footer"); ?>

	<?php $this->load->view("customer/layouts/_scripts"); ?>
	<script>
		const flashData = $('.flash-data').data('flashdata');
		if (flashData) {
			Swal.fire({
				title: 'Yeaayy!!!',
				text: 'Item berhasil ' + flashData,
				icon: 'success'
			});
		}
	</script>

</body>

</html>
