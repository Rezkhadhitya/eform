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
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="160%">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    // print_r($row->result());
                                    foreach ($rowa->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->username ?></td>
                                            <td class="align-middle"><?= $data->nama_lengkap ?></td>
                                            <td class="align-middle"><?= $data->email ?></td>
                                            <td class="align-middle"><?= $data->role  ?></td>
                                            <td class="text-center align-middle" width="160px">
                                                <form action="<?= site_url('user/delete') ?>" method="post">

                                                    <button type="button" class="btn btn-primary btn-sm" onclick="lihat_detail(<?= $data->user_id; ?>)" title="Detail data" data-toggle="modal" data-target="#ModalDetailData"><i class="fas fa-folder-open fa-sm text-white"></i></button>

                                                    <button type="button" class="btn btn-warning btn-sm" onclick="lihat_edit(<?= $data->user_id; ?>)" title="Edit data" data-toggle="modal" data-target="#ModalEditData"><i class="fas fa-edit fa-sm text-white"></i></button>

                                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
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
    </div>

    <div class="modal fade" id="ModalDetailData" tabindex="-1" role="dialog" aria-labelledby="ModalDetailDataTitle" aria-hidden="true">
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
                        <label for="Username" class="col-sm-4 col-form-label">Nama Lengkap</label>
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

    <div class="modal fade" id="ModalEditData" tabindex="-1" role="dialog" aria-labelledby="ModalEditDataTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-primary text-center" role="alert">
                    <i class="fas fa-user fa-sm"></i>
                    <strong>Edit Data User</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body tiga">

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Username</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <input type="text" class="col-sm-7 form-control placeholder_color tiga" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Password</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <input type="password" class="col-sm-7 form-control placeholder_color tiga" id="username" name="username" placeholder="Password" value="<?= set_value('username'); ?>">
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <input type="password" class="col-sm-7 form-control placeholder_color tiga" id="username" name="username" placeholder="Konfirmasi Password" value="<?= set_value('username'); ?>">
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <input type="text" class="col-sm-7 form-control placeholder_color tiga" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Email</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <input type="text" class="col-sm-7 form-control placeholder_color tiga" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Role</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group row mb-1">
                        <label for="Username" class="col-sm-4 col-form-label">Status</label>
                        <label for="Username" class="col-sm-1 col-form-label text-center">:</label>
                        <select name="status" class="col-sm-7 form-control placeholder_color tiga" id="status" name="status ">
                            <option value="0">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>

                </div>
                <div class="modal-footer tiga">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-sm text-white"></i> Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->

    <script>
        $(document).ready(function() {

        });

        function lihat_edit(id) {
            $.ajax({
                url: '<?= site_url("user/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#username').val(obj.data.username);
                        $('#nama_lengkap').val(obj.data.nama_lengkap);
                        $('#email').val(obj.data.email);
                        $('#level').val(obj.data.id_role);
                        $('#status').val(obj.data.is_active);

                        $('#ModalEditData').modal('show');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }

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

                        $('#ModalDetailData').modal('show');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>