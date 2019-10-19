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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-lock"></i> Ubah password</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('profile'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>

                        <div class="row">
                            <div class="border-success col-lg-12">
                                <div class="card mb-4 rounded-0">
                                    <div class="card-body tiga">

                                        <div class="form-group row">
                                            <label for="nama_lengkap" class="col-sm-3 col-form-label">Password saat ini</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga " id="nama_lengkap" placeholder="Password saat ini" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                                <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Username" class="col-sm-3 col-form-label">Password baru</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga" id="username" placeholder="Password baru" name="username" value="<?= set_value('username'); ?>">
                                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Password" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga" id="password" placeholder="Konfirmasi password" name="password" value="<?= set_value('password'); ?>">
                                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="User" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary btn-sm tiga"><i class="fas fa-save fa-sm text-white"></i> Simpan Perubahan</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->