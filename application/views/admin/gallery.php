
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0 text-dark"><i class="far fa-image"></i>&nbsp;&nbsp;Gallery</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                  </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

      <div class="row mt-3 mb-4">
        <button class="btn btn-lg btn-primary col-md-12" data-toggle="modal" data-target="#add" title="Add Image">+&nbsp; Add Image</button>
    </div>

        <div class="row">
        <?php foreach ($data as $d){?>
          <div class="p-0 mr-4 mb-5 col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <img src="<?=base_url('assets/images/').$d->img_src?>" alt="Image" height="170" class="p-0 ml-0 col-md-12 mb-1" style="object-fit:cover;">
            <div class="p-0 m-0 col-md-12 text-align-center d-flex">
                <a href="<?=base_url('Delete/Gallery/'.$d->id)?>" onclick="confirmation(event)" class="btn btn-flat m-0 del-btn btn-danger col-md-6" title="Delete Image"><i class="fa fa-trash-alt"></i></a>
                <button class="btn btn-flat btn-primary m-0 col-md-6" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Image"><i class="fa fa-edit"></i> </button>
            </div>
          </div>

          <!-- edit modal -->
          <div class="modal fade" id="edit<?=$d->id?>">
              <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Image:</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form role="form" method="post" enctype= "multipart/form-data" action="<?php echo base_url();?>Edit/Gallery/<?=$d->id?>">
                         <div class="row">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" required>
                                    <label class="custom-file-label" for="customFile">Choose new image</label>
                                </div>
                            </div>
                            <p class="text-sm text-muted mt-3">(Max image size : 300kb)</p>
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
          <!-- /edit  modal -->

        <?php }?>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


<!-- add   modal -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">+&nbsp; Add Image:</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype= "multipart/form-data" action="<?= base_url();?>Add/Gallery">
                    <div class="row">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img" name="img" required>
                            <label class="custom-file-label" for="customFile">Choose new image</label>
                        </div>
                    </div>
                    <p class="text-sm text-muted mt-3">(Max image size : 300kb)</p>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">+&nbsp; Add</button>
                </form>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /add  modal -->

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        $('#editor').summernote();
    });
</script>

