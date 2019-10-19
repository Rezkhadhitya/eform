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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-fw fa-landmark"></i> Tambah Departemen</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('departemen'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="no_telepon" class="col-sm-2 col-form-label">Nama Departemen *</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="nama_departemen" name="nama_departemen" placeholder="Nama Departemen" value="<?= set_value('nama_departemen'); ?>">
                                    <?= form_error('nama_departemen', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telepon" class="col-sm-2 col-form-label">Nama Pejabat *</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="nama_pejabat" name="nama_pejabat" placeholder="Nama Pejabat" value="<?= set_value('nama_pejabat'); ?>">
                                    <?= form_error('nama_pejabat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-sm tiga"><i class="fas fa-paper-plane fa-sm text-white"></i> Simpan Data</button>
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