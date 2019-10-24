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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-landmark"></i> Master Departemen</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('departemen/tambah'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
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
                                        <th scope="col">Departemen</th>
                                        <th scope="col">Nama Pejabat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($rows->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->departemen ?></td>
                                            <td class="align-middle"><?= $data->nama_pejabat ?></td>
                                            <td class="text-center align-middle" width="160px">
                                                <form action="<?= site_url('departemen/delete') ?>" method="post">

                                                    <button type="button" onclick="lihat_detail('<?= $data->id; ?>')" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalDepartemen" title="Ubah Data"><i class="fas fa-edit fa-sm text-white"></i></button>

                                                    <input type="hidden" name="departemen_name" value="<?= $data->departemen ?>">
                                                    <button onclick="return confirm('Anda yakin data akan dihapus?')" class="btn btn-danger btn-sm" title="Hapus data" name="Delete">
                                                        <i class="fas fa-trash-alt fa-sm text-white"></i></button>
                                                </form>
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

        <div class="modal fade" id="ModalDepartemen" tabindex="-1" role="dialog" aria-labelledby="ModalDepartemenTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="alert alert-primary text-center" role="alert">
                        <i class="fas fa-landmark fa-sm"></i>
                        <strong>Edit Departemen</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body tiga">

                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Departemen</label>
                                <label class="col-sm-1 col-form-label text-center">:</label>
                                <input type="text" class="col-sm-7 form-control placeholder_color tiga" id="nama_departemen" name="nama_departemen" placeholder="Nama Departemen" value="<?= set_value('nama_departemen'); ?>">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Pejabat</label>
                                <label class="col-sm-1 col-form-label text-center">:</label>
                                <input type="text" class="col-sm-7 form-control placeholder_color tiga" id="nama_pejabat" name="nama_pejabat" placeholder="Nama Pejabat" value="<?= set_value('nama_pejabat'); ?>">
                            </div>

                            <div class="modal-footer tiga">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-sm text-white"></i> Simpan Perubahan</button>
                            </div>
                        </form>
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
                url: '<?= site_url("departemen/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#nama_departemen').val(obj.data.departemen);
                        $('#nama_pejabat').val(obj.data.nama_pejabat);

                        window.swal('Error', obj.message, 'error');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>