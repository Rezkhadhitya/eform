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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-users"></i> Master Pegawai</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('pegawai/tambah_pegawai'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-user-plus fa-sm text-white"></i> Tambah Data</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?= $this->session->flashdata('message'); ?>

                        <div class="table-responsive tiga">
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="160%" cellspacing="0">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Penempatan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->nip ?></td>
                                            <td class="align-middle"><?= $data->nama_lengkap ?></td>
                                            <td class="align-middle"><?= $data->jabatan ?></td>
                                            <td class="align-middle"><?= $data->penempatan ?></td>
                                            <td class="text-center align-middle" width="160px">
                                                <button type="button" onclick="lihat_detail('<?= $data->nip; ?>')" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalPegawai" title="Detail data"><i class="fas fa-folder-open fa-sm text-white"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm" title="Edit data"><i class="fas fa-edit fa-sm text-white"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" title="Hapus data"><i class="fas fa-trash-alt fa-sm text-white"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalPegawai" tabindex="-1" role="dialog" aria-labelledby="ModalPegawaiTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-primary text-center" role="alert">
                    <i class="fas fa-user-cog fa-sm"></i>
                    <strong>Data Detail Pegawai</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body tiga">

                    <div class="form-group row mb-1">
                        <h5><strong><label id="lbl_nama_lengkap" class="col-sm-12 col-form-label">&nbsp;</label></strong></h5>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">NIP</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_nip" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_jeniskelamin" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_tempat_lahir" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Status Perkawinan</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_status_perkawinan" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Jumlah Anak</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_jumlah_anak" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Agama</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_agama" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Alamat</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_alamat" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">No. Telepon</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_no_telepon" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_email" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Jabatan</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_jabatan" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Penempatan</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_penempatan" class="col-sm-7 col-form-label"></label>
                    </div>

                    <div class="form-group row mb-1">
                        <label class="col-sm-4 col-form-label">Tanggal Aktif Kerja</label>
                        <label class="col-sm-1 col-form-label text-center">:</label>
                        <label id="lbl_tanggal_aktif_kerja" class="col-sm-7 col-form-label"></label>
                    </div>
                </div>
                <div class="modal-footer tiga">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-sm text-white"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->

    <script>
        $(document).ready(function() {});

        function lihat_detail(id) {
            $.ajax({
                url: '<?= site_url("administrator/pegawai/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#lbl_nama_lengkap').html(obj.data.nama_lengkap);
                        $('#lbl_nip').html(obj.data.nip);
                        $('#lbl_jeniskelamin').html(obj.data.jenis_kelamin);
                        $('#lbl_tempat_lahir').html(obj.data.tempat_lahir);
                        $('#lbl_status_perkawinan').html(obj.data.status_perkawinan);
                        $('#lbl_jumlah_anak').html(obj.data.jumlah_anak);
                        $('#lbl_agama').html(obj.data.agama);
                        $('#lbl_alamat').html(obj.data.alamat);
                        $('#lbl_no_telepon').html(obj.data.no_telepon);
                        $('#lbl_email').html(obj.data.email);
                        $('#lbl_jabatan').html(obj.data.jabatan);
                        $('#lbl_penempatan').html(obj.data.penempatan);
                        $('#lbl_tanggal_aktif_kerja').html(obj.data.tanggal_aktif);

                        $('#ModalPegawai').modal('show');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>