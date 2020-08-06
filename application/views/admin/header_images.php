
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-square"></i>&nbsp;&nbsp;All eidtable Images</h1>
                <p class="mt-2 mb-0">(Max size : 500kb)</p>
                <p class="mt-2 mb-0">(Click on the <em class="text-bold">i</em> button to see the current images)</p>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">editable Images</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-12 mb-4"><h5>(All Header images)</h5></div>
        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/about_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">About Us</span> <a href="<?=base_url('assets/images/about_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/products_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Products</span> <a href="<?=base_url('assets/images/products_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/services_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">Services</span> <a href="<?=base_url('assets/images/services_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/projects_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">Projects</span> <a href="<?=base_url('assets/images/projects_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/media_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Media</span> <a href="<?=base_url('assets/images/media_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/policies_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Privacy Policy</span> <a href="<?=base_url('assets/images/policies_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/events_header')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Events</span> <a href="<?=base_url('assets/images/events_header.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

      </div>

    <div class="row mt-3">
        <div class="col-12 mt-2 mb-4"><h5>(Content images)</h5></div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/about')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">A little about Us</span> <a href="<?=base_url('assets/images/about.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/success2')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Highlighter Bg</span> <a href="<?=base_url('assets/images/success2.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/success')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Success stories</span> <a href="<?=base_url('assets/images/success.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/counters_bg')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Counters Bg</span> <a href="<?=base_url('assets/images/counters_bg.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<script>
// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
