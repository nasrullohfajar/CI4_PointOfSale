<?= $this->extend('layout/V_template') ?>

<?= $this->section('menu') ?>
<li class="nav-item">
    <a href="/beranda" class="nav-link">
        <i class="nav-icon fa fa-house-user"></i>
        <p>Beranda</p>
    </a>
</li>

<li class="nav-header">Kelola</li>
<li class="nav-item">
    <a href="/kategori" class="nav-link">
        <i class="nav-icon fa fa-list"></i>
        <p>Kategori</p>
    </a>
</li>

<li class="nav-item">
    <a href="/produk" class="nav-link">
        <i class="nav-icon fa fa-table"></i>
        <p>Produk</p>
    </a>
</li>

<li class="nav-header">Transaksi</li>
<li class="nav-item">
    <a href="/penjualan" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>Penjualan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/pembelian" class="nav-link">
        <i class="nav-icon far fa-plus-square"></i>
        <p>Pembelian</p>
    </a>
</li>

<?= $this->endSection() ?>