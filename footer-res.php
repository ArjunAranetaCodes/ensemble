
<!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <!-- Datatables -->
  <script src="assets/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="assets/datatables.net-scroller/js/datatables.scroller.min.js"></script>
  <script src="assets/jszip/dist/jszip.min.js"></script>
  <script src="assets/pdfmake/build/pdfmake.min.js"></script>
  <script src="assets/pdfmake/build/vfs_fonts.js"></script>

  <!-- Datatables -->
  <script>
    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      TableManageButtons.init();
    });
  </script>
  <!-- /Datatables -->
