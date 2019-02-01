
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Rentalin</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
     </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('')?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('')?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('')?>assets/dist/js/app.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('')?>assets/plugins/select2/select2.full.min.js"></script>
<!-- Data Tables -->
<script type="text/javascript" src="<?php echo base_url('')?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('')?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('')?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('')?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('')?>assets/plugins/iCheck/icheck.min.js"></script>     
<!-- Mask Money      -->
<script src="<?php echo base_url('')?>assets/plugins/maskmoney/jquery.maskMoney.min.js"></script>

<script src="<?php echo base_url('')?>assets/js/bootstrap-datetimepicker.min.js"></script>



<script type="text/javascript">
    // $('#datetimepicker1').datetimepicker();
    $(document).ready(function () {
       var bindDatePicker = function() {
        $(".date").datetimepicker({
            format:'YYYY-MM-DD',
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
          }
        }).find('input:first').on("blur",function () {
          // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
          // update the format if it's yyyy-mm-dd
          var date = parseDate($(this).val());

          if (! isValidDate(date)) {
            //create date based on momentjs (we have that)
            date = moment().format('YYYY-MM-DD');
          }

          $(this).val(date);
        });
      }
       
       var isValidDate = function(value, format) {
        format = format || false;
        // lets parse the date to the best of our knowledge
        if (format) {
          value = parseDate(value);
        }

        var timestamp = Date.parse(value);

        return isNaN(timestamp) == false;
       }
       
       var parseDate = function(value) {
        var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
        if (m)
          value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

        return value;
       }
       
       bindDatePicker();
     });
    
    $(".selected").select2();
    
    $('#datepicker').datepicker({
      autoclose: true,
      dateFormat:'yyyy-mm-dd'
    });

    $('#dataTables').DataTable({
        "scrollX": true
    });
    $("#harga1").maskMoney({thousands:".",decimal:",",precision:0});
    
        //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
    
</script>

<script>

$(document).ready(function(){

$("#harga1").keyup(function() {
  var clone = $(this).val();
  var cloned = clone.replace(/[A-Za-z$. ,-]/g, "");
  $("#harga").val(cloned);
});


});
</script>

</body>
</html>