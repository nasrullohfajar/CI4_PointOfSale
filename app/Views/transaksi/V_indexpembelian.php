<?= $this->extend('layout/V_menu') ?>

<!--judul-->
<?= $this->section('judul') ?>
<h3><i class="fa fa-fw fa-edit"></i> Input Pembelian</h3>
<?= $this->endSection() ?>

<!--isi-->
<?= $this->section('content') ?>

<div class="card card-default color-palette-box">
    <div class="card-body">
        <form method="post" action="/postpembelian">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nofaktur">Faktur</label>
                        <input type="text" class="form-control form-control-sm" style="color:red;font-weight:bold;"
                            name="nofaktur" id="nofaktur">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" readonly
                            value="<?= date('Y-m-d'); ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal">Aksi</label>
                        <div class="input-group">
                            <button class="btn btn-danger btn-sm" type="button" id="btnHapusTransaksi">
                                <i class="fa fa-trash-alt"></i>
                            </button>&nbsp;
                            <button class="btn btn-success" type="submit" role="button">
                                <i class=" fa fa-save"></i>
                            </button>&nbsp;
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="kodebarcode">Kode Produk</label>
                <input type="text" class="form-control form-control-sm" name="kodebarcode" id="kodebarcode" autofocus>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="jml">Jumlah</label>
                <input type="number" class="form-control form-control-sm" name="jumlah" id="jumlah" value="1" min="1"
                    max="100">
            </div>
        </div>
        <div class="col-md-4">
            <label for="jml">Total Bayar</label>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="totalbayar" id="totalbayar"
                    style="text-align: right; color:blue; font-weight : bold; font-size:30pt;" value="0" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 dataDetailPenjualan">

        </div>
    </div>
</div>

<!--riwayat transaksi-->
<div class="card-body">
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Faktur</th>
                <th>Tanggal Beli</th>
                <th>Kode Supplier</th>
                <th>Total Harga</th>
            </tr>
        </thead>

        <tbody>
            <?php $nomor = 1;
                    foreach($datapembelian as $row):
                ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['beli_faktur']; ?></td>
                <td><?= $row['beli_tgl']; ?></td>
                <td><?= $row['beli_supplierkode']; ?></td>
                <td><?= $row['beli_totalharga']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</div>

<?= $this->endSection() ?>