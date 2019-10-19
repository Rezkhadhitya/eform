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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-users"></i> Master Cuti</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('cuti/tambah_cuti'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-user-plus fa-sm text-white"></i> Tambah Data</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive tiga">
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="160%" cellspacing="0">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">No. Cuti</th>
                                        <th scope="col">Jenis Cuti</th>
                                        <th scope="col">Alasan Cuti</th>
                                        <th scope="col">Tanggal Pelaksanaan</th>
                                        <th scope="col">Lama Cuti</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->nomor ?></td>
                                            <td class="align-middle"><?= $data->alasan_ijin ?></td>
                                            <td class="align-middle"><?= $data->tanggal_awal ?></td>
                                            <td class="align-middle"><?= $data->tanggal_akhir ?></td>
                                            <td class="align-middle"><?= $data->jumlah_hari ?></td>
                                            <!-- <td><?= $data->status ?></td> -->
                                            <td class="text-center align-middle" width="160px">
                                                <button type="button" class="btn btn-success btn-sm">Disetujui</button>
                                                <!-- <button type="button" class="btn btn-danger btn-sm">Ditolak</button>
                                                <button type="button" class="btn btn-warning btn-sm">Pending</button> -->
                                            </td>
                                            <td class="text-center align-middle" width="160px">
                                                <button type="button" onclick="lihat_detail('<?= $data->nomor; ?>')" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong" title="Detail data"><i class="fas fa-folder-open fa-sm text-white"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm" title="Edit data"><i class="fas fa-edit fa-sm text-white"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" title="Hapus data"><i class="fas fa-trash-alt fa-sm text-white"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>

                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalCuti" tabindex="-1" role="dialog" aria-labelledby="ModalCutiTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="alert alert-primary text-center" role="alert">
                                        <i class="fas fa-user-injured fa-sm"></i>
                                        <strong>Detail Cuti Pegawai</strong>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body tiga">
                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Pengajuan atas nama</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_nik" class="col-sm-7 col-form-label"></label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Tanggal Pengajuan</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_tanggal_pengajuan" class="col-sm-7 col-form-label"></label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Jenis Cuti</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_jenis_cuti" class="col-sm-7 col-form-label"></label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Alasan Cuti</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_alasan_cuti" class="col-sm-7 col-form-label"></label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Periode Cuti</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_periode_cuti_awal" class="mr-n3 col-sm-3 col-form-label"></label>
                                            <label class="col-sm-1 col-form-label">sd</label>
                                            <label id="lbl_periode_cuti_akhir" class="col-sm-3 col-form-label"></label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Lama Cuti</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <label id="lbl_lama_cuti" class="col-sm-1 col-form-label mr-n3"></label>
                                            <label class="col-sm-2 col-form-label"> Hari</label>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label class="col-sm-4 col-form-label">Status</label>
                                            <label class="col-sm-1 col-form-label text-center">:</label>
                                            <strong><label id="lbl_status" class="col-sm-12 col-form-label"></label></strong>
                                        </div>
                                    </div>
                                    <div class="modal-footer tiga">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                url: '<?= site_url("cuti/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#lbl_nik').html(obj.data.nik);
                        $('#lbl_tanggal_pengajuan').html(obj.data.tanggal_pengajuan);
                        $('#lbl_jenis_cuti').html(obj.data.jenis_alasan);
                        $('#lbl_alasan_cuti').html(obj.data.alasan_ijin);
                        $('#lbl_periode_cuti_awal').html(obj.data.tanggal_awal);
                        $('#lbl_periode_cuti_akhir').html(obj.data.tanggal_akhir);
                        $('#lbl_lama_cuti').html(obj.data.jumlah_hari);
                        $('#lbl_status').html(obj.data.status);

                        $('#ModalCuti').modal('show');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>