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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-file"></i> Data Rekap Barcoding</h5>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive tiga">
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTableInvoice" width="160%" cellspacing="0">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Dealer</th>
                                        <th scope="col">Tanggal Awal</th>
                                        <th scope="col">Tanggal Akhir</th>
                                        <th scope="col">STNK</th>
                                        <th scope="col">BPKB</th>
                                        <th scope="col">Cek Fisik</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Grand Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->nama_dealer ?></td>
                                            <td><?= $data->tanggal_awal ?></td>
                                            <td><?= $data->tanggal_akhir ?></td>
                                            <td class="text-right"><?= $data->bpkb ?></td>
                                            <td class="text-right"><?= $data->stnk ?></td>
                                            <td class="text-right"><?= $data->cek_fisik ?></td>
                                            <td class="text-right"><?= $data->total ?></td>
                                            <td class="text-right"><?= $data->grand_total ?></td>
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

    </div>
    <!-- End of Main Content -->