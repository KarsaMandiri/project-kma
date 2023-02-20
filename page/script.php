<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- jquery 3.6.3 -->
<script src="assets/js/jquery.min.js"></script>

<!-- Select Data -->
<script src="assets/js/select-data.js"></script>

<!-- Selectize JS -->
<script src="assets/selectize-js/dist/js/selectize.min.js"></script>

<script type="text/javascript">
	$('.selectize-js').selectize();
</script>
<!-- ================================================================= -->

<!-- date picker with flatpick -->
<script type="text/javascript">
    flatpickr("#date", {
        dateFormat: "d/m/Y",
    });
</script>
<!-- end date picker -->

<!-- DataTable -->
<script>
    $(function () {
    $("#table1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#table1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
});

    $(document).ready(function() {
    var table = $('#table2').DataTable({
        "lengthChange": false,
        "ordering": false,
        "autoWidth": false
    });
} );

</script>
<!-- End DataTable -->

<!-- Alert -->
<script src="assets/js/alert.js"></script>

<!-- DataTables Bootstrap 5 -->
<script src="assets/DataTables/js/jquery-3.5.1.js"></script>
<script src="assets/DataTables/js/jquery.dataTables.min.js"></script>
<script src="assets/DataTables/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/DataTables/js/dataTables.buttons.min.js"></script>
<script src="assets/DataTables/js/buttons.bootstrap5.min.js"></script>
<script src="assets/DataTables/js/buttons.html5.min.js"></script>
<script src="assets/DataTables/js/buttons.print.min.js"></script>
<script src="assets/DataTables/js/buttons.colVis.min.js"></script>
<script src="assets/DataTables/jszip/jszip.min.js"></script>
<script src="assets/DataTables/pdfmake/pdfmake.js"></script>
<script src="assets/DataTables/pdfmake/vfs_fonts.js"></script>