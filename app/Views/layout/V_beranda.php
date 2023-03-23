<?= $this->extend('layout/V_menu') ?>

<!--judul-->
<?= $this->section('judul') ?>
<h3>Selamat Datang</h3>
<?= $this->endSection() ?>

<!--isi-->
<?= $this->section('content') ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Anda telah berhasil login!</h5>
</div>
<?= $this->endSection() ?>