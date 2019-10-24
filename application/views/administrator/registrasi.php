<body class="bg-gradient-dark">
    <div class="container ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?= base_url('assets/img/welcome_screen.png'); ?>">
                    </div>

                    <div class="col-lg-6">
                        <div class="p-4 mr-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Aktivasi Akun Baru!</h1>
                                <p class="mb-4 tiga">Untuk bisa memulai menggunakan aplikasi, silakan masukkan NIP, pada kolom yang tersedia, dan kami akan mengirimkan anda email aktivasi anda!</p>
                            </div>

                            <form class="user" action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control placeholder_color form-control-user" id="NIP" name="NIP" placeholder="Nomor Induk Pegawai" value="<?= set_value('NIP'); ?>">
                                    <?= form_error('NIP', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control placeholder_color form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control placeholder_color form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control placeholder_color form-control-user" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password', '<small class="text-danger ml-3">', '</small>'); ?>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="password" class="form-control placeholder_color form-control-user" id="password1" name="password1" placeholder="Konfirmasi Password" value="<?= set_value('password1'); ?>">
                                        <?= form_error('password1', '<small class="text-danger ml-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block"></i> Registrasi Akun</button>
                            </form>

                            <hr>

                            <div class="text-center">
                                <a class="small" href="<?= site_url('auth/lupa_password'); ?>">Lupa Password?</a>
                            </div>

                            <div class="text-center">
                                <label class="small text-gray">Sudah aktivasi? </label>
                                <a class="small text-primary" href="<?= site_url('auth'); ?>"> Login disini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>