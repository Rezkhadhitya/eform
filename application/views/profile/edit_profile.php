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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-user-circle"></i> Ubah profile</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/profile'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>

                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Circle Buttons -->
                                <div class="card mb-4 rounded-0">
                                    <div class="card-body tiga">
                                        <div class="">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail rounded-circle">
                                        </div>

                                        <br>

                                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-camera fa-sm text-white"></i>
                                            Ganti foto profile
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="border-success col-lg-9">
                                <div class="card mb-4 rounded-0">
                                    <div class="card-body tiga">

                                        <div class="form-group row">
                                            <label for="Username" class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control placeholder_color tiga" id="username" placeholder="Username" name="username" value="<?= set_value('username'); ?>">
                                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Password" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control placeholder_color tiga" id="password" placeholder="Nama Lengkap" name="password" value="<?= set_value('password'); ?>">
                                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control placeholder_color tiga" id="email" placeholder="Alamat Email" name="email" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_tinggal" class="col-sm-3 col-form-label">Alamat Rumah</label>
                                            <div class="col-sm-7">
                                                <textarea class="form-control placeholder_color tiga" rows="3" id="alamat" name="alamat" placeholder="Alamat Tinggal"></textarea>
                                                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Email" class="col-sm-3 col-form-label">Telepon</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control placeholder_color tiga" id="email" placeholder="Telepon" name="email" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="User" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary btn-sm tiga"><i class="fas fa-paper-plane fa-sm text-white"></i> Simpan Data</button>
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