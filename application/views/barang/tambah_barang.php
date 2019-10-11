<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <div class="text-left">
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-fw fa-file"></i> Tambah Barang</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/barang'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2 col-form-label">Kode Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="kode_barang" placeholder="Kode Barang" name="kode_barang">
                                    <?= form_error('kode_barang', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_ktp" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control placeholder_color tiga" id="nama_barang" placeholder="Nama Barang" name="nama_barang">
                                    <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga " id="merk" placeholder="Merk" name="merk">
                                    <?= form_error('merk', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="harga" name="harga" placeholder="Harga">
                                    <?= form_error('harga', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="kategori" name="kategori" placeholder="Kategori">
                                    <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Supplier</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="supplier" name="supplier" placeholder="Supplier">
                                    <?= form_error('supplier', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat_tinggal" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                    <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-info tiga"><i class="fas fa-paper-plane fa-sm text-white"></i> Simpan Data</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->