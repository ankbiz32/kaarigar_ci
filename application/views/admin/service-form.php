
  <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">+ Add Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin/Services')?>">Services</a></li>
                        <li class="breadcrumb-item active">Add Service</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <?= form_open($submissionPath, ['id'=>'main_form', 'enctype'=>'multipart/form-data']) ?>
        <div class="content mt-2">
            <div class="container-fluid">
                <section class="card px-4 py-3">
                        <div class="row mb-3">
                            <div class="col-sm-12 mb-4 form-group">
                                <label for="name">Service name: *</label>
                                <input type="text" class="form-control" name="name" maxlength="50" placeholder="(Max. 50 characters)" required>
                            </div>

                            <div class="form-group mb-4  col-sm-6">
                                <label for="img" class="">Upload Image for Service: * <span class="text-sm text-muted mt-0 mb-2">( Max size : 1MB )</span></label>
                                <!-- <p class="m-0 text-muted">( Choose only if you want to change the current image )</p> -->
                                <div class="custom-file mb-3">
                                    <input type="file" accept=".jpg, .jpeg, .svg, .bmp, .png" class="custom-file-input" id="img" name="img" required>
                                    <label class="custom-file-label" for="img">Choose file *</label>
                                </div>
                            </div>

                            <div class="form-group mb-4 col-sm-6">
                                <label for="icon" class="">Upload Icon: * <span class="text-sm text-muted mt-0 mb-2">( Max size : 200kb ) ( SVG recommended )</span></label>
                                <!-- <p class="m-0 text-muted">( Choose only if you want to change the current image )</p> -->
                                <div class="custom-file mb-3">
                                    <input type="file" accept=".jpg, .jpeg, .svg, .bmp, .png" class="custom-file-input" id="icon" name="icon" required>
                                    <label class="custom-file-label" for="icon">Choose file *</label>
                                </div>
                            </div>

                            <div class="col-12 mb-4  form-group">
                                <label for="short_descr">Description: *</label>
                                <textarea name="descr" class="form-control" maxlength="600" placeholder="(Max. 600 characters)" id="descr" rows="4" required></textarea>
                            </div>

                            <div class="col-sm-6 mb-4  form-group">
                                <label for="name">Minimum charges for this service:</label>
                                <p class="mt-0 text-muted">( Only for information purpose, no effect on final bill )</p>
                                <input type="number" class="form-control" name="min_charges" placeholder="Example : 300 or leave blank for no min charges">
                            </div>

                            <div class="col-sm-6 mb-4  form-group">
                                <label for="name">Description for min charges: </label>
                                <p class="mt-0 text-muted">( Enter only if entering any min charge)</p>
                                <textarea class="form-control" name="min_charge_txt" placeholder="Enter what is included under that min charge"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <button type="button" class="btn btn-secondary col-md-2 col-sm-6 col-xs-12 mr-3 my-2" onclick="window.history.back();"> <strong class="text-lg">&times;</strong>&nbsp;&nbsp;Cancel</button>
                            <button type="submit" class="btn btn-primary col-md-2 mr-3 col-sm-6 col-xs-12 my-2"> <strong class="text-lg">+</strong>&nbsp; Add</button>
                        </div>
                    <?php if(isset($errors)) :?>
                        <div class="col-sm-12 text-red"> <?= $errors ?></div>
                    <?php endif;?>
            
                </section>
            </div>
        </div>
        </form>
</div>

  <script type="text/javascript">

     // Name of the file appearing on selecting image
     $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

  </script>