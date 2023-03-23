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
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"> </i> tambah data
                </button>
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
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $nomor = 1;
                    foreach($dataproduk as $row):
                ?>
                    <tr>
                        <td><?= $nomor++; ?></td>
                        <td><?= $row['kodebarcode']; ?></td>
                        <td><?= $row['namaproduk']; ?></td>
                        <td><?= $row['stok_tersedia']; ?></td>
                        <td><?= $row['harga_beli']; ?></td>
                        <td><?= $row['harga_jual']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection() ?>