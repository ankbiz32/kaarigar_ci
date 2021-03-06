<footer class="main-footer px-5">
    <div class="row">
      <p>
        <strong>Copyright &copy; 2020.</strong>
        All rights reserved.
      </p>
      <p class="ml-auto">Powered by: <a href="https://cluebix.com" class="text-bold" target=_blank>Cluebix Software</a></p>
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script>
  //  Sweet alert for normal response
  var base_url = '<?=base_url()?>';
    $(document).ready(function(){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000
        });

        <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
            $class = $this->session->flashdata('success') ? 'success' : 'error';
        ?>
            
            Toast.fire({
                icon: '<?=$class?>',
                title: '<?= $this->session->flashdata('success'); ?>
                        <?= $this->session->flashdata('failed'); ?>'
            });
        <?php 
            endif;
        ?>
  });


  //  Sweet alert for verification
  function confirmation2(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); 

      Swal.fire({
        title: 'Are you sure?',
        text: "Password will be set to be same as the user's mobile no.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#888888',
        confirmButtonText: 'Verify'
      }).then((result) => {
        if (result.value) {
          window.location = urlToRedirect;
        }
      })

  }

  //  Sweet alert for delete
  function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); 

      Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          window.location = urlToRedirect;
        }
      })

  }
   
$('.select2').select2();
  $("#all_checkbox").click(function(){
    if($("#all_checkbox").is(':checked') ){
          $("#loc_multi > option").prop("selected","selected");
          $("#loc_multi").trigger("change");
    }else{
          $("#loc_multi").val(null).trigger('change');
     }
});
<?php if(isset($svc)){?>
  $("#loc_multi").val(<?=json_encode($locs)?>).change();
<?php }?>

</script>


</body>
</html>
