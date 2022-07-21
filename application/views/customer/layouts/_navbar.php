<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 shadow">
	<div class="container">
		<a class="navbar-brand font-weight-bold" href="<?= base_url() ?>">Bona Petshop</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active align-self-center">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item align-self-center">
					<a class="nav-link" href="<?= base_url("produk") ?>">Produk</a>
				</li>
				<li class="nav-item align-self-center">
					<a href="<?= base_url("kategori") ?>" class="nav-link">Kategori</a>
				</li>
				<?php if ($this->session->userdata("logged_in") == "customer") : ?>
					<li class="nav-item align-self-center">
						<?php
						$keranjang = $this->cart->total_items();
						?>
						<a class="nav-link" href="<?= base_url("detail-keranjang") ?>">
							<i class="fas fa-shopping-cart"></i> (<?= $keranjang ?>)
						</a>
					</li>
					<li class="nav-item dropdown align-self-center">
						<a class="nav-link" href="details.html#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")); ?>" alt="" class="rounded-circle profile-picture" style="height: 38px; width: 38px; object-fit: cover; object-position: center; border: 1px solid white;" />
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_url("home") ?>">Akun Saya</a>
							<a class="dropdown-item" href="dashboard-account.html">Settings</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-danger" href="<?= base_url("logout") ?>">Logout</a>
						</div>
					</li>
				<?php else : ?>
					<div class="nav-item align-self-center">
						<a href="<?= base_url("login"); ?>" class="btn btn-warning px-4 text-white shadow text-uppercase">Login</a>
					</div>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
