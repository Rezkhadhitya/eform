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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-fw fa-user-plus"></i> Tambah Cuti</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('cuti'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Departemen</label>
                                <div class="col-sm-6">
                                    <span class="field">
                                        <select name="departemen" class="form-control placeholder_color tiga" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($departemen->result() as $key => $data) { ?>
                                                <option value=""><?= $data->departemen ?></option>
                                            <?php } ?>
                                        </select>
                                    </span>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Cuti</label>
                                <div class="col-sm-6">
                                    <span class="field">
                                        <select name="jenis_kelamin" class="form-control placeholder_color tiga" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">- Pilih -</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Berduka">Berduka Cita</option>
                                            <option value="Ijin Pribadi">Ijin Pribadi</option>
                                            <option value="Melahirkan">Hamil / Melahirkan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </span>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat_tinggal" class="col-sm-2 col-form-label">Alasan Cuti</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="alasan_cuti" name="alasan_cuti" placeholder="Alasan Cuti"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="periode_cuti" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt fa-sm text-gray"></i></div>
                                    </div>
                                    <input type="date" class="form-control tiga" id="inlineFormInputGroup" value="<?= date('Y-m-d') ?>" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="periode_cuti" class="col-sm-2 col-form-label">Awal Cuti</label>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt fa-sm text-gray"></i></div>
                                    </div>
                                    <input type="date" class="form-control tiga" id="inlineFormInputGroup" value="<?= date('Y-m-d') ?>" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="periode_cuti" class="col-sm-2 col-form-label">Akhir Cuti</label>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt fa-sm text-gray"></i></div>
                                    </div>
                                    <input type="date" class="form-control tiga" id="inlineFormInputGroup" value="<?= date('Y-m-d') ?>" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Username" class="col-sm-2 col-form-label">Lama Cuti</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control placeholder_color tiga" id="username" placeholder="Lama Cuti" name="username">
                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
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