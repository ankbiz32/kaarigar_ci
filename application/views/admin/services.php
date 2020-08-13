
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-cog"></i>&nbsp;&nbsp;Services</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Services</li>
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
                <h2 class="card-title col">List of Services:</h2>
                <a href="<?=base_url('Add/Services')?>" class="btn btn-primary ml-auto">+ Add new Service</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Service name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><img src="<?=base_url('assets/images/services-img/').$d->icon_src?>" alt="Icon" height="30"> &nbsp;<?=$d->name?></td>
                        <td><img src="<?=base_url('assets/images/extra-services-img/').$d->img_src?>" alt="Image" height="50" style="object-fit:cover;"></td>
                        <td class="">
                          <?php if($d->is_active==1){ ?>
                              <div class="badge badge-success mb-1">Active</div> <br>
                              <a href="<?=base_url('Edit/deactivateService/').$d->id?>" class="link text-xs">Deactivate</a>
                          <?php } else { ?>
                              <div class="badge badge-secondary mb-1">Inactive</div> <br>
                              <a href="<?=base_url('Edit/activateService/').$d->id?>" clas="link text-xs">Activate</a>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="<?=base_url('Delete/Service/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Service"><i class="fa fa-trash-alt"></i></a>
                          <a href="<?=base_url('Edit/Service/'.$d->id)?>" class="btn btn-primary mb-1" title="Edit Service"><i class="fa fa-edit"></i></a>
                          <a href="<?=base_url('Admin/subService/'.$d->id)?>" class="btn del-btn btn-warning mb-1" title="View Sub services"><i class="fa fa-eye"></i></a>
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
