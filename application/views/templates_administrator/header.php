<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatable-serverside/jquery-3.3.1.js" charset="UTF-8"></script>

    <!-- Datatables-->
    <link href="<?= base_url('assets/'); ?>vendor/datatable-serverside/jquery.dataTables.min.css" rel="stylesheet" media="screen">

    <style type="text/css">
        .dua {
            font-size: 13px;
        }

        .tiga {
            font-size: 14px;
        }

        .empat {
            font-size: 17px;
        }

        .placeholder_color::-webkit-input-placeholder {
            color: #D4D5DB;
        }
    </style>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatable-serverside/dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                scrollX: false,
                "autoWidth": false,
                "searching": false
            });
        });

        $(document).ready(function() {
            $('#datatablesDealer').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                scrollX: false,
                "autoWidth": false,
            });
        });
    </script>

</head>