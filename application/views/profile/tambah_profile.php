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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-user-circle"></i> Profile Saya</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/pegawai/tambah_pegawai'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-user-edit fa-sm text-white"></i> Edit Profile</a>
                        </div>
                    </div>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>

                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Circle Buttons -->
                                <div class="card shadow mb-4">
                                    <div class="card-body tiga">
                                        <div class="">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>

                                        <br>

                                        <a href="<?= base_url('administrator/pegawai/tambah_pegawai'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary btn-block shadow-sm"><i class="fas fa-user-edit fa-sm text-white"></i> Edit Profile</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="card shadow mb-4">
                                    <div class="card-body tiga">

                                        <div class="form-group row">
                                            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control placeholder_color tiga " id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                                <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Username" class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control placeholder_color tiga" id="username" placeholder="Username" name="username" value="<?= set_value('username'); ?>">
                                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Password" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga" id="password" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="konfirmasi_Password" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga" id="konfirmasi_password" placeholder="Konfirmasi Password" name="konfirmasi_password" value="<?= set_value('konfirmasi_password'); ?>">
                                                <?= form_error('konfirmasi_password', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Email" class="col-sm-3 col-form-label">Alamat Email</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control placeholder_color tiga" id="email" placeholder="Alamat Email" name="email" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
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