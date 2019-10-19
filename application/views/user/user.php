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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-users"></i> Master User</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= site_url('user/tambah_user'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-user-plus fa-sm text-white"></i> Tambah Data</a>
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    // print_r($row->result());
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->username ?></td>
                                            <td class="align-middle"><?= $data->nama_lengkap ?></td>
                                            <td class="align-middle"><?= $data->email ?></td>
                                            <td class="align-middle"><?= $data->image ?></td>
                                            <td class="align-middle"><?= $data->role  ?></td>
                                            <td class="text-center align-middle" width="160px">
                                                <button type="button" class="btn btn-primary btn-sm" onclick="lihat_detail(<?= $data->user_id; ?>)" title="Detail data"><i class="fas fa-folder-open fa-sm text-white"></i></button>
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

    <div class="modal fade" id="modalnya" tabindex="-1" role="dialog" aria-labelledby="modalnyaTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-primary text-center" role="alert">
                    <i class="fas fa-user fa-sm"></i>
                    <strong>Data Detail User</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body tiga">

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Username</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <label for="Username" id="labelusername" class="col-sm-7 col-form-label">&nbsp;</label>
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Nama</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <label for="Username" id="labelnama" class="col-sm-7 col-form-label">&nbsp;</label>
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Email</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <label for="Username" id="labelemail" class="col-sm-7 col-form-label">&nbsp;</label>
                    </div>

                </div>
                <div class="modal-footer tiga">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
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
                url: '<?= site_url("user/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#labelusername').html(obj.data.username);
                        $('#labelnama').html(obj.data.nama_lengkap);
                        $('#labelemail').html(obj.data.email);


                        $('#modalnya').modal('show');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>