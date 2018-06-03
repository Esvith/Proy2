
   <hr/>
    <footer>
<center>
        <h6> &copy; Desarrollos PHP 2014 Derechos Reservados </h6>
    
   </center>
    </footer>
      	
   

<script src="<?php echo base_url();?>/assets/template/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/jquery-print/jquery.print.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/jquery-ui/jquery-ui.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>/assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>/assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables Export -->
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>/assets/template/datatables-export/js/buttons.print.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/template/dist/js/demo.js"></script>


<script >

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );



</script>
</body>
</html>