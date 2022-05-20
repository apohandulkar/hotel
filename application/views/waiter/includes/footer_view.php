   <script>
 $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
		paging: true,
		 "searching": true,
        buttons: [
             'print', 'copy', 'csv', 'pdf',
        ]
    } );
} );	

 $(document).ready(function() {
    $('#example11').DataTable( {
        dom: 'Bfrtip',
		paging: false,
		 "searching": true,
        buttons: [
             'csv', 
        ]
    } );
} );			
   </script>
   <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.   from KOT. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<!-- plugins:js -->
  <script src="<?php echo site_url();?>theme/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo site_url();?>theme/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo site_url();?>theme/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo site_url();?>theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo site_url();?>theme/js/dataTables.select.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script> 

	<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script> 
	<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script> 
       <link href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> 
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo site_url();?>theme/js/off-canvas.js"></script>
  <script src="<?php echo site_url();?>theme/js/hoverable-collapse.js"></script>
  <script src="<?php echo site_url();?>theme/js/template.js"></script>
  <script src="<?php echo site_url();?>theme/js/settings.js"></script>
  <script src="<?php echo site_url();?>theme/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo site_url();?>theme/js/dashboard.js"></script>
  <script src="<?php echo site_url();?>theme/js/Chart.roundedBarCharts.js"></script>
