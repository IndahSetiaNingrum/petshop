<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?= base_url() ?>">Bona Petshop</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?= base_url() ?>">IP</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="active">
				<a href="<?= base_url("dashboard") ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
			</li>
			<li class="menu-header">Main Menu</li>
			<li><a class="nav-link" href="<?= base_url("kelola-customer") ?>"><i class="fas fa-users"></i> <span>Customer</span></a></li>
			<?php if ($this->session->userdata("logged_in") == "admin" && $this->session->userdata("role") == "Admin") : ?>
				<li><a class="nav-link" href="<?= base_url("kelola-admin") ?>"><i class="fas fa-users"></i> <span>Admin & Staff</span></a></li>
			<?php endif; ?>
			<li class="dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i> <span>Produk</span></a>
				<ul class="dropdown-menu">
					<li><a href="<?= base_url("kelola-kategori") ?>">Kategori</a></li>
					<li><a class="nav-link" href="<?= base_url("kelola-produk") ?>">Data Produk</a></li>
				</ul>
			</li>
			<li><a class="nav-link" href="<?= base_url("kelola-orderan") ?>"><i class="fas fa-credit-card"></i> <span>Transaksi</span></a></li>
			<li><a class="nav-link" href="<?= base_url("admin/bank") ?>"><i class="fas fa-credit-card"></i> <span>Rekening</span></a></li>
		</ul>
	</aside>
</div>
