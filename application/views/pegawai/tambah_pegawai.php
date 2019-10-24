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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-fw fa-user-plus"></i> Tambah Pegawai</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('pegawai'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-5">
                                    <span class="field">
                                        <select name="status" class="form-control placeholder_color tiga" id="status" name="status ">
                                            <option value="0">Tidak Aktif</option>
                                            <option value="1">Aktif</option>
                                        </select>
                                    </span>
                                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Aktif Kerja</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt fa-sm text-gray"></i></div>
                                        </div>
                                        <input type="date" class="form-control tiga" id="tanggal_lahir" name="tanggal_lahir" value="<?= date('Y-m-d') ?>" placeholder="DD/MM/YYYY">
                                    </div>
                                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="nip" placeholder="NIP" name="nip" value="<?= set_value('nip'); ?>">
                                    <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. KTP</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="no_ktp" placeholder="No. KTP" name="no_ktp" value="<?= set_value('no_ktp'); ?>">
                                    <?= form_error('no_ktp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                    <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control placeholder_color tiga " id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
                                    <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt fa-sm text-gray"></i></div>
                                        </div>
                                        <input type="date" class="form-control tiga" id="tanggal_lahir" name="tanggal_lahir" value="<?= date('Y-m-d') ?>" placeholder="DD/MM/YYYY">
                                    </div>
                                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="jenis_kelamin" class="form-control placeholder_color tiga" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">- Pilih -</option>
                                            <option value="Laki - laki">Laki - laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </span>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="status_perkawinan" class="form-control placeholder_color tiga" id="status_perkawinan">
                                            <option value="">- Pilih -</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </span>
                                    <?= form_error('status_perkawinan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="jumlah_anak" id="jumlah_anak" class="form-control placeholder_color tiga">
                                            <option value="">- Pilih -</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="agama" id="agama" class="form-control placeholder_color tiga">
                                            <option value="">- Pilih -</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katholik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </span>
                                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Rumah</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="alamat" name="alamat" placeholder="Alamat Rumah" value="<?= set_value('alamat'); ?>"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="no_telepon" name="no_telepon" placeholder="No. Telepon" value="<?= set_value('no_telepon'); ?>">
                                    <?= form_error('no_telepon', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Departemen</label>
                                <div class="col-sm-7">
                                    <span class="field">
                                        <select name="agama" id="agama" class="form-control placeholder_color tiga">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($departemen->result() as $key => $data) { ?>
                                                <option value=""><?= $data->departemen ?></option>
                                            <?php } ?>
                                        </select>
                                    </span>
                                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= set_value('jabatan'); ?>">
                                    <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Penempatan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="penempatan" name="penempatan" placeholder="Lokasi Penempatan" value="<?= set_value('penempatan'); ?>">
                                    <?= form_error('penempatan', '<small class="text-danger">', '</small>'); ?>
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
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-7">
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