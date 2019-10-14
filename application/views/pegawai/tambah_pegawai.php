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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-fw fa-user-plus"></i> Tambah Pegawai</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/pegawai'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="nip" placeholder="NIP" name="nip">
                                    <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_ktp" class="col-sm-2 col-form-label">No. KTP</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control placeholder_color tiga" id="no_ktp" placeholder="No. KTP" name="no_ktp">
                                    <?= form_error('no_ktp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control placeholder_color tiga" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
                                    <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga " id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir">
                                    <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <div class=" controls input-append date form_date" data-date="" data-date-format="dd/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_lahir" id="tanggal_lahir">
                                        <input class="tanggal form-control placeholder_color tiga" size="20" type="text" placeholder="DD/MM/YYYY">
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <span class="field">
                                        <select name="jenis_kelamin" class="form-control placeholder_color tiga" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">- Pilih -</option>
                                            <option value="Menikah">Laki - laki</option>
                                            <option value="Belum Menikah">Perempuan</option>
                                        </select>
                                    </span>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status_perkawinan" class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-10">
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Anak</label>
                                <div class="col-sm-10">
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <span class="field">
                                        <select name="agama" id="agama" class="form-control placeholder_color tiga">
                                            <option value="">- Pilih -</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen Protestan</option>
                                            <option value="3">Katolik</option>
                                            <option value="4">Hindu</option>
                                            <option value="10">Buddha</option>
                                            <option value="6">Kong Hu Cu</option>
                                            <option value="7">Lainnya</option>
                                        </select>
                                    </span>
                                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat_tinggal" class="col-sm-2 col-form-label">Alamat Rumah</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="alamat" name="alamat" placeholder="Alamat Rumah"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="no_telepon" name="no_telepon" placeholder="No. Telepon">
                                    <?= form_error('no_telepon', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="email" name="email" placeholder="Alamat Email">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="jabatan" name="jabatan" placeholder="Jabatan">
                                    <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Penempatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control placeholder_color tiga" id="penempatan" name="penempatan" placeholder="Lokasi Penempatan">
                                    <?= form_error('penempatan', '<small class="text-danger">', '</small>'); ?>
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