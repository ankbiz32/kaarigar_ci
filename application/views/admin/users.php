
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-user"></i>&nbsp;&nbsp;Registered users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">registered users</li>
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
                <h2 class="card-title col">List of users:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Info</th>
                      <th>Registered on</th>
                      <th>Verification</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td class=""><?=$d->fname?></td>
                        <td class="">Phone: <strong><?=$d->mobile_no?></strong> <br>Email: <strong><?=$d->email?></td></strong>
                        <td class=""><?=date('d-M-Y',strtotime($d->created))?></td>
                        <td class="">
                          <?php if($d->is_verified==1){ ?>
                              <div class="text-success mb-1">Verified</div> <br>
                          <?php } else { ?>
                              <div class="badge badge-danger mb-1">Not verified</div> <br>
                              <a href="<?=base_url('Edit/verifyUser/').$d->id.'/'.$d->mobile_no?>" onclick="confirmation2(event)" clas="link text-xs">Verify now</a>
                          <?php } ?>
                        </td>
                        <td class="">
                          <?php if($d->status==1){ ?>
                              <div class="badge badge-success mb-1">Active</div> <br>
                              <a href="<?=base_url('Edit/deactivateUser/').$d->id?>" class="link text-xs">Deactivate</a>
                          <?php } else { ?>
                              <div class="badge badge-secondary mb-1">Inactive</div> <br>
                              <a href="<?=base_url('Edit/activateUser/').$d->id?>" clas="link text-xs">Activate</a>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="<?=base_url('Delete/User/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete User"><i class="fa fa-trash-alt"></i></a>
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
