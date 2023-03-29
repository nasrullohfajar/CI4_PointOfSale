<?= $this->extend('layout/V_menu') ?>

<!--judul-->
<?= $this->section('judul') ?>
<h3>Pengelolaan Data Produk</h3>
<?= $this->endSection() ?>

<!--isi-->
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="/tambahproduk" class="btn btn-sm btn-primary">
                <i class="fa fa-plus"> </i> Tambah Data
            </a>
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barcode</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($dataproduk as $row):
                ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $row['kodebarcode']; ?></td>
                    <td><?= $row['namaproduk']; ?></td>
                    <td><?= $row['stok_tersedia']; ?></td>
                    <td><?= $row['harga']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <?= $pager->links('produk', 'bootstrap_pagination');?>
    </div>
</div>
</div>
<?= $this->endSection() ?>