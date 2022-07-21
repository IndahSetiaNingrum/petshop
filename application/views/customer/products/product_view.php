<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("customer/layouts/_head"); ?>

<body>

	<!-- Navigation -->
	<?php $this->load->view("customer/layouts/_navbar"); ?>
	<!-- Page Content -->

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

	<div class="container py-5">

		<div class="row">
			<div class="col">
				<div class="title-page">
					<h3 class="font-weight-bold">Katalog Produk</h3>
					<p class="text-muted">Katalog produk yang kami jual</p>
				</div>
			</div>
			<div class="col align-self-center">
				<form action="<?= base_url("produk") ?>" method="POST">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Cari produk" name="keyword">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Cari</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<hr>

		<?php if ($products) : ?>
			<div class="row">
				<?php foreach ($products as $product) : ?>
					<div class="col-sm-3 mt-4">
						<div class="card h-100 shadow border-0">
							<a href="<?= base_url("produk/" . $product["slug"]) ?>"><img class="card-img-top" src="<?= base_url("assets/uploads/items/" . $product["images"]) ?>" style="height: 180px; object-fit: cover; object-position: center;"></a>
							<div class="card-body">
								<h5 class="card-title">
									<a href="<?= base_url("produk/" . $product["slug"]) ?>"><?= $product["name"] ?></a>
								</h5>
								<h6>IDR. <?= number_format($product["price"]) ?></h6>
							</div>
							<div class="card-footer border-top-0 bg-white">
								<div class="action text-center">
									<a href="<?= base_url("tambah-keranjang/" . $product["item_id"]) ?>" class="btn btn-success btn-sm">Add to Cart</a>
									<a href="<?= base_url("produk/" . $product["slug"]) ?>" class="btn btn-warning btn-sm text-white">Detail</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

		<?php else : ?>
			<div class="alert alert-danger">
				Maaf, Data tidak tersedia.
			</div>
		<?php endif; ?>

	</div>
	<!-- /.container -->


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
