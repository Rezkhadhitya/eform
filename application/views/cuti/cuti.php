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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-users   "></i> Data Cuti Pegawai</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/cuti/tambah_cuti'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-file fa-sm text-white"></i> Tambah Data</a>
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
                                        <th scope="col">Alasan Cuti</th>
                                        <th scope="col">Tanggal Awal</th>
                                        <th scope="col">Tanggal Akhir</th>
                                        <th scope="col">Lama Cuti</th>
                                        <th scope="col">Status</th>
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
                                                <button type="button" class="btn btn-danger btn-sm">Ditolak</button>
                                                <button type="button" class="btn btn-warning btn-sm">Pending</button>
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

    </div>
    <!-- End of Main Content -->