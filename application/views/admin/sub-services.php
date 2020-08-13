
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-cog"></i>&nbsp;&nbsp;Sub Services <small>(<?=$svc->name?>)</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/Services')?>">Services</a></li>
                  <li class="breadcrumb-item active"><?=$svc->name?></li>
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
                <h2 class="card-title col">List of Sub Services:</h2>
                <a href="<?=base_url('Add/subService/').$svc->id?>" class="btn btn-primary ml-auto">+ Add new sub service</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Sub service name</th>
                      <th>Min charge</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->text?></td>
                        <td><?=$d->min_charges==NULL?'<span class="text-muted text-xs"><em>NULL</em></span>':'₹'.$d->min_charges.'/-'?></td>
                        <td class="">
                          <?php if($d->is_active==1){ ?>
                              <div class="badge badge-success mb-1">Active</div> <br>
                              <a href="<?=base_url('Edit/deactivateSubService/').$d->id.'/'.$svc->id?>" class="link text-xs">Deactivate</a>
                          <?php } else { ?>
                              <div class="badge badge-secondary mb-1">Inactive</div> <br>
                              <a href="<?=base_url('Edit/activateSubService/').$d->id.'/'.$svc->id?>" clas="link text-xs">Activate</a>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="<?=base_url('Delete/subService/'.$svc->id.'/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Sub Service"><i class="fa fa-trash-alt"></i></a>
                        <a href="<?=base_url('Edit/subService/').$svc->id.'/'.$d->id?>" title="Edit Sub Service" class="btn btn-primary mb-1"><i class="fa fa-edit"></i></a>
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

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


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


// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
