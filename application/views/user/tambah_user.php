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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-fw fa-user-plus"></i> Tambah User</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/user'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="Username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="username" placeholder="Username" name="username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control placeholder_color tiga" id="password" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="konfirmasi_Password" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control placeholder_color tiga" id="konfirmasi_password" placeholder="Konfirmasi Password" name="konfirmasi_password" value="<?= set_value('konfirmasi_password'); ?>">
                                    <?= form_error('konfirmasi_password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga " id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                    <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Email" class="col-sm-2 col-form-label">Alamat Email</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="email" placeholder="Alamat Email" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Level" class="col-sm-2 col-form-label" name="level" id="level">Level</label>
                                <div class="col-sm-5">
                                    <span class="field">
                                        <select name="level" class="form-control tiga">
                                            <option value="">- Pilih -</option>
                                            <option value="Menikah">admin</option>
                                            <option value="Belum Menikah">user</option>
                                        </select>
                                    </span>
                                    <?= form_error('level', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-5">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="User" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-2">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="User" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
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