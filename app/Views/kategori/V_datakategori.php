<?= $this->extend('layout/V_menu') ?>

<!--judul-->
<?= $this->section('judul') ?>
<h3>Pengelolaan Data Kategori</h3>
<?= $this->endSection() ?>

<!--isi-->
<?= $this->section('content') ?>
<div class="card">
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
                    <th>Nama Kategori</th>
                </tr>
            </thead>

            <tbody>
                <?php $nomor = 1;
                    foreach($datakategori as $row):
                ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $row['kategori_nama']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

</div>
<?= $this->endSection() ?>