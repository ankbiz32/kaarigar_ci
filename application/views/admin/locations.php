
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-map-marker-alt"></i>&nbsp;&nbsp;Locations master</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Locations master</li>
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
                <h2 class="card-title col">List of locations:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new location</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Area</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Pin code</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->area?></td>
                        <td><?=$d->city?></td>
                        <td><?=$d->state?></td>
                        <td><?=$d->pin_code?></td>
                        <td>
                          <?php if($d->is_active==1){ ?>
                              <div class="badge badge-success mb-1">Active</div> <br>
                              <a href="<?=base_url('Edit/deactivateLoc/').$d->id?>" class="link text-xs">Deactivate</a>
                          <?php } else { ?>
                              <div class="badge badge-secondary mb-1">Inactive</div> <br>
                              <a href="<?=base_url('Edit/activateLoc/').$d->id?>" clas="link text-xs">Activate</a>
                          <?php } ?></td>
                        <td>
                          <a href="<?=base_url('Delete/Location/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Location"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Location"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Location:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Location/<?=$d->id?>">
                                      <div class="row">
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="area" class="m-0">Area: *</label>
                                              <input type="text" class="form-control mt-2" name="area" value="<?=$d->area?>" id="area" required>
                                          </div>
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="city" class="m-0">City: *</label>
                                              <input type="text" class="form-control mt-2" name="city" value="<?=$d->city?>" id="city" required>
                                          </div>
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="state" class="m-0">State: *</label>
                                              <input type="text" class="form-control mt-2" name="state" value="<?=$d->state?>" id="state" required>
                                          </div>
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="pin_code" class="m-0">Pin code: *</label>
                                              <input type="text" class="form-control mt-2" name="pin_code" value="<?=$d->pin_code?>" id="pin_code" required>
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
            <h4 class="modal-title">+ Add Location:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="post" action="<?=base_url();?>Add/Location">
                <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="area" class="m-0">Area: *</label>
                        <input type="text" class="form-control m-0" name="area"  id="area" required>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="city" class="m-0">City: *</label>
                        <input type="text" class="form-control m-0" name="city"  id="city" required>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="state" class="m-0">State: *</label>
                        <input type="text" class="form-control m-0" name="state"  id="area" required>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="pin_code" class="m-0">Pin code: *</label>
                        <input type="text" class="form-control m-0" name="pin_code"  id="pin_code" required>
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
