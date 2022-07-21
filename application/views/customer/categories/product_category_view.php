<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("customer/layouts/_head"); ?>

<body>

	<!-- Navigation -->
	<?php $this->load->view("customer/layouts/_navbar"); ?>
	<!-- Page Content -->
	<div class="container mt-3">

		<div class="row">

			<div class="col-lg-3">

				<h4 class="my-4 font-weight-bold">Kategori</h4>
				<div class="list-group shadow">
					<?php foreach ($categories as $category) : ?>
						<a href="<?= base_url("kategori/" . $category["category_id"]) ?>" class="list-group-item border-0"><?= $category["name"] ?></a>
					<?php endforeach; ?>
					<a href="<?= base_url("kategori") ?>" class="list-group-item border-0 text-center text-muted">Lihat semua</a>
				</div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">

				<section class="some-products py-5">
					<div class="row">
						<div class="col-7">
							<h4 class="font-weight-bold"><?= $active_category["name"]; ?></h4>
							<p class="small text-muted">Berikut produk dengan kategori <?= $active_category["name"]; ?></p>
						</div>
					</div>
					<hr>
					<?php if ($products) : ?>
						<div class="row">
							<?php foreach ($products as $product) : ?>
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100 shadow border-0">
										<a href="<?= base_url("produk/" . $product["slug"]) ?>"><img class="card-img-top" src="<?= base_url("assets/uploads/items/" . $product["images"]) ?>" style="height: 180px; object-fit: cover; object-position: center;"></a>
										<div class="card-body">
											<h5 class="card-title">
												<a href="<?= base_url("produk/" . $product["slug"]) ?>"><?= $product["name"] ?></a>
											</h5>
											<h6>IDR. <?= $product["price"] ?></h6>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<!-- /.row -->
						<div class="text-center mb-5">
							<a href="<?= base_url("produk") ?>">Lihat semua produk</a>
						</div>
					<?php else : ?>
						<div class="alert alert-danger">
							Maaf, belum ada produk tersedia untuk saat ini.
						</div>
					<?php endif; ?>
				</section>


			</div>
			<!-- /.col-lg-9 -->

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<?php $this->load->view("customer/layouts/_footer"); ?>

	<?php $this->load->view("customer/layouts/_scripts"); ?>

</body>

</html>
