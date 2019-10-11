<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-right">
            <span>Copyright &copy; e-Form <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
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

<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript" src="<?= base_url('assets/'); ?>>vendor/datatable-serverside/jquery-3.3.1.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatable-serverside/dataTables.min.js"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language: 'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language: 'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });

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

<script type="text/javascript">
    $(document).ready(function() {
        $('.tanggal').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true
        });
    });
</script>

</body>

</html>