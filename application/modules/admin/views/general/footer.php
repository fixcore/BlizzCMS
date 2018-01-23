        <footer class="footer text-center">
            <i class="fa fa-github"></i> Proudly powered by <a href="https://github.com/fixcore/BlizzCMS">BlizzCMS</a>
        </footer>
    </div>
    <!-- End Page Content -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>core/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url(); ?>core/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>core/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?= base_url(); ?>core/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?= base_url(); ?>core/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url(); ?>core/js/custom.min.js"></script>
    <script src="<?= base_url(); ?>core/js/dashboard1.js"></script>
    <script src="<?= base_url(); ?>core/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="<?= base_url(); ?>core/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?= base_url(); ?>core/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>core/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>core/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?= base_url(); ?>core/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>core/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>core/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>core/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
    <!--Style Switcher -->
    <script src="<?= base_url(); ?>core/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
