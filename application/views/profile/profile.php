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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-user-circle"></i> Profile Saya</h5>
                        </div>
                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Circle Buttons -->
                                <div class="card mb-4">
                                    <div class="card-body text-center tiga">
                                        <div class="">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail rounded-circle col-md-7">
                                        </div>
                                        <div class="form-group row text-left">
                                            <a class="col-sm-12 col-form-label mb-n1"><i class="fas fa-user fa-fw "></i> <?= $user['nama_lengkap']; ?></a>
                                            <a class="col-sm-12 col-form-label mb-n1"><i class="fas fa-envelope fa-fw"></i> <?= $user['email']; ?></a>
                                            <a class="col-sm-12 col-form-label mb-n1"><i class="fas fa-phone fa-fw"></i> +62 821 7719 4495</a>
                                            <a class="col-sm-12 col-form-label mb-n4"><i class="fas fa-map-marker-alt fa-fw"></i> Jagakarsa, Jakarta Selatan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="form-group row text-center">
                                            <a for="nama_lengkap" class="col-sm-12 col-form-label"> <strong>Informasi Data Diri</strong></a>
                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-user-tie fa-5x text-gray-300 rotate"></i>
                                            </div>
                                            <label for="nama_lengkap" class="col-sm-12 col-form-label tiga">Edit informasi personal anda.</label>
                                            <a href="<?= site_url('administrator/profile/konf_profile'); ?>" for="nama_lengkap" class="col-sm-12 col-form-label  mb-n4"> <strong>Informasi Data Diri<i class="fas fa-angle-right fa-fw"></i></strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="form-group row text-center">
                                            <a for="nama_lengkap" class="col-sm-12 col-form-label"> <strong>Informasi Keamanan</strong></a>

                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-user-edit fa-5x text-gray-300 rotate"></i>
                                            </div>
                                            <label for="nama_lengkap" class="col-sm-12 col-form-label tiga">Edit informasi keamanan anda.</label>
                                            <a href="<?= site_url('administrator/profile/edit_profile'); ?>" for="nama_lengkap" class="col-sm-12 col-form-label  mb-n4"> <strong>Informasi Keamanan<i class="fas fa-angle-right fa-fw"></i></strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="form-group row text-center">
                                            <a for="nama_lengkap" class="col-sm-12 col-form-label"> <strong>Kata Sandi</strong></a>
                                            <div class="col-sm-12 text-center">
                                                <i class="fas fa-lock fa-5x text-gray-300 rotate"></i>
                                            </div>
                                            <label for="nama_lengkap" class="col-sm-12 col-form-label tiga">Edit kata sandi anda.</label>
                                            <a href="<?= site_url('administrator/profile/ubah_password'); ?>" for="nama_lengkap" class="col-sm-12 col-form-label mb-n4"> <strong>Ubah Kata Sandi<i class="fas fa-angle-right fa-fw"></i></strong></a>
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

    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <div class="text-left">
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-bell"></i> Notifikasi</h5>
                        </div>
                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
        </div>

    </div>
    <!-- End of Main Content -->