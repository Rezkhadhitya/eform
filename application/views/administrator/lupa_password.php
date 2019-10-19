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
                        <div class="mt-4 p-4 mr-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Lupa password anda?</h1>
                                <p class="mb-4 tiga">Kami akan mengirimkan kode OTP ke alamat email anda, mohon untuk tidak memberitahukan kepada pihak lain!</p>
                            </div>

                            <?= $this->session->flashdata('pesan'); ?>

                            <form class="user" action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control placeholder_color form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan alamat email..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger ml-3">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block"></i> Reset Password</button>

                            </form>

                            <hr>

                            <div class="text-center">
                                <label class="small text-gray">Kembali ke</label>
                                <a class="small text-primary" href="<?= site_url('auth'); ?>"> Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>