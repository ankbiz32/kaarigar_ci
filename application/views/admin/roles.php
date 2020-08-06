
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-at"></i>&nbsp;&nbsp;Registration roles</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Registration roles</li>
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
              <div class="card-header row">
                <h2 class="card-title col">List of roles:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new role</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Role name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->role?></td>
                        <td>
                          <a href="<?=base_url('Delete/Role/'.$d->role_id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Role"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->role_id?>" title="Edit Role"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->role_id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Role:</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" method="post" action="<?php echo base_url();?>Edit/Role/<?=$d->role_id?>">
                                        <div class="col">
                                            <div class="form-group col-md-6 col-sm-12">
                                                <label for="role" class="m-0">Role name:</label>
                                                <p class="text-sm text-muted m-0">(Max. 30 Characters)</p>
                                                <input type="text" class="form-control mt-2" minlength="1" maxlength="30" name="role" value="<?=$d->role?>" id="role" required>
                                            </div>
                                            </div>
                                        </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp; Update</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                      <!-- /edit modal -->

                    <?php }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


 <!-- Add modal -->
  <div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">+ Add Role:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url('Add/Role')?>">
              <div class="col">
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="role" class="m-0">Role name: *</label>
                      <p class="text-sm text-muted mb-1">(Max. 30 Characters)</p>
                      <input type="text" class="form-control m-0" name="role" maxlength="30" id="role" required>
                  </div>
                </div>
              </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">+ Add</button>
            </form>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<!-- /Add modal -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>


<script>

// Init Datatable
  $(function () {
    $('#bookdt').DataTable({
      "pageLength": 10,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      // "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });


</script>
