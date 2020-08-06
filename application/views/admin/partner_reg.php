
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i clas="fa fa-user"></i>&nbsp;Partner Registrations</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Admin">Partners</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Your enquiries:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Reg. Date</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Message</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Enquiries-->
                    <?php foreach($pr as $f){?>
                      <tr>
                        <td><?=date("d-m-Y",strtotime("$f->date"))?></td>
                        <td><?=$f->pname?></td>
                        <td><?=$f->phone?></td>
                        <td><?=$f->name?></td>
                        <td><?=$f->state_name?></td>
                        <td><?=$f->remarks?></td>
                        <td>
                          <a href="<?=base_url('Delete/Partner_reg/'.$f->reg_id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger my-1" title="Delete Registration"><i class="fa fa-trash-alt"></i></a>
                          <button data-id='<?=$f->reg_id?>' title="Registration details" class="btn btn-warning text-bold regDet"><i class="fa fa-info"></i></button>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        
        <!-- Reg details modal -->
          <div class="modal fade" id="details">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registration details:</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <!-- /Reg details modal -->

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "order": [[ 5, "asc" ]]
    });
  });

  $(function () {
    $('.regDet').click(function(){
      var id=$(this).data('id');
      $.ajax({
          url: '<?=base_url('Admin/pRegDetails')?>',
          type:'post',
          data: {id: id},
          beforeSend : function(){
              $('.modal-body').html('<i class="fa fa-spinner fa-spin"></i>');
              $('#details').modal('show');
          },
          success: function(response){
              $('.modal-body').html(response);
          },
          error: function(response){
              $('.modal-body').html('Error');
          }
      });
    });
  });
</script>
