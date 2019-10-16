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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-file"></i> Master Barang</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/barang/tambah_barang'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive tiga">
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="160%" cellspacing="0">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Permintaan</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Supplier</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->kode_barang ?></td>
                                            <td><?= $data->barang ?></td>
                                            <td class="text-right"><?= $data->harga ?></td>
                                            <td><?= $data->supplier ?></td>
                                            <td class="text-center" width="160px">
                                                <a href="" class="btn btn-primary btn-sm dua"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="" class="btn btn-danger btn-sm dua"><i class="fas fa-trash-alt"></i> Delete</a>
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
    <!-- End of Main Content -->