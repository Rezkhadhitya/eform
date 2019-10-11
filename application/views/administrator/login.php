<body class="bg-gradient-dark">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?= base_url('assets/img/welcome_screen.png'); ?>">
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-5 p-4 mr-5">
                            <div class="text-center">
                                <h6 class="h4 text-gray-900 mb-2">Selamat datang!</h6>
                                <p class="mb-3 tiga">Silakan masukkan Username dan Password anda!</p>
                            </div>

                            <?= $this->session->flashdata('pesan'); ?>

                            <form method="post" action="<?= base_url('administrator/auth/proses_login') ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control placeholder_color form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username anda" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control placeholder_color form-control-user" id="password" name="password" placeholder="Masukkan Password anda">
                                    <?= form_error('password', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <button class="btn btn-primary btn-user btn-block">Login</button>
                            </form>

                            <hr>

                            <div class="text-center">
                                <label class="small text-gray mb-0">Belum punya akun,</label>
                                <a class="small text-primary mb-0" href="<?= base_url('administrator/auth/registrasi'); ?>"> Daftar disini!</a>
                            </div>

                            <div class="text-center">
                                <a class="small mt-0" href="<?= base_url('administrator/auth/lupa_password'); ?>">Lupa password?</a>
                            </div>
                        </div>
                    </div>

                    <!-- Nested Row within Card Body -->
                </div>
            </div>
        </div>
    </div>