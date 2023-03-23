<?= $this->extend('layout/template') ?>

<?= $this->section('menu') ?>
<li class="nav-item">
    <a href="<?= site_url('layout/home') ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Beranda</p>
    </a>
</li>
<?= $this->endSection() ?>