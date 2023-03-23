<?= $this->extend('layout/V_menu') ?>

<!--judul-->
<?= $this->section('judul') ?>
<h3><i class="fa fa-table"></i> Tambah Produk</h3>
<?= $this->endSection() ?>

<!--isi-->
<?= $this->section('content') ?>

<div class="card">
    <!--header-->
    <div class="card-header">
        <h3 class="card-title">
            <a href="/produk" class="btn btn-sm btn-primary">
                <i class="fa fa-backward"> </i> Kembali
            </a>
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <!--body-->
    <div class="card-body">
        <form method="post" action="/postproduk">
            <!--barcode-->
            <div class="form-group row">
                <label for="kodebarcode" class="col-sm-2 col-form-label">Kode Barcode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodebarcode" name="kodebarcode" autofocus>
                </div>
            </div>

            <!--nama produk-->
            <div class="form-group row">
                <label for="namaproduk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk">
                </div>
            </div>

            <!--stok produk-->
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok Tersedia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stok" name="stok" value="0">
                </div>
            </div>

            <!--kategori produk-->
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" id="kategori" class="form-control"></select>
                </div>
            </div>

            <!--satuan produk-->
            <div class="form-group row">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                    <select name="satuan" id="satuan" class="form-control"></select>
                </div>
            </div>

            <!--harga beli produk-->
            <div class="form-group row">
                <label for="hargabeli" class="col-sm-2 col-form-label">Harga Beli (Rp)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="hargabeli" name="hargabeli" style="text-align: right">
                </div>
            </div>

            <!--harga jual produk-->
            <div class="form-group row">
                <label for="hargajual" class="col-sm-2 col-form-label">Harga Jual (Rp)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="hargajual" name="hargajual" style="text-align: right">
                </div>
            </div>

            <!--gambar produk-->
            <div class="form-group row">
                <label for="uploadgambar" class="col-sm-2 col-form-label">Upload Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="uploadgambar" name="uploadgambar">
                </div>
            </div>

            <!--submit-->
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>