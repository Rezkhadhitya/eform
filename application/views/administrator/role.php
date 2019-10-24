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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-user-tie"></i> Master Role</h5>
                        </div>
                        <div class="text-right">
                            <!-- Button trigger modal -->
                            <a href="<?= site_url('admin/tambah_role'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Role</a>
                            </button>
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
                                        <th scope="col">Nama Role</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($ri->result() as $key => $data) { ?>
                                        <tr>
                                            <td class="align-middle"><?= $no++ ?></td>
                                            <td class="align-middle"><?= $data->role ?></td>
                                            <td class="align-middle"><?= $data->id ?></td>
                                            <td class="text-center align-middle" width="160px">
                                                <form action="<?= site_url('admin/delete') ?>" method="post">

                                                    <button type="button" class="btn btn-warning btn-sm" title="Edit data"><i class="fas fa-edit fa-sm text-white" data-toggle="modal" data-target="#ModalRole" onclick="lihat_detail('<?= $data->id; ?>')"></i></button>

                                                    <input type="hidden" name="roles" value="<?= $data->id ?>">
                                                    <button onclick="return confirm('Data yang akan dihapus akan berpengaruh pada user yang bersangkutan, yakin akan dilanjutkan?')" class="btn btn-danger btn-sm" title="Hapus data"><i class="fas fa-trash-alt fa-sm text-white"> </i></button>

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

        <div class="modal fade" id="ModalRole" tabindex="-1" role="dialog" aria-labelledby="ModalRoleTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="alert alert-primary text-center" role="alert">
                        <i class="fas fa-user-tie fa-sm"></i>
                        <strong>Edit Data Role</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" method="post">
                        <div class="modal-body tiga">
                            <div class="form-group row">
                                <label for="Email" class="col-sm-4 col-form-label">Role</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control placeholder_color tiga" id="nama_role" placeholder="Nama Role" name="nama_role" value="<?= set_value('nama_role'); ?>">
                                    <?= form_error('nama_role', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer tiga">
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
                url: '<?= site_url("admin/get_detail") ?>',
                data: {
                    id: id
                },
                type: 'post',
                dataType: 'json',
                success: function(obj) {
                    if (obj.error == false) {
                        $('#nama_role').val(obj.data.role);

                        window.swal('Error', obj.message, 'error');
                    } else {
                        window.swal('Error', obj.message, 'error');
                    }
                }
            });
        }
    </script>