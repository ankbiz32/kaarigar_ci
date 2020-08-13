
  <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=isset($svc)?'<i class="fa fa-edit"></i> Edit':'+ Add'?> Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin/Services')?>">Services</a></li>
                        <li class="breadcrumb-item active"><?=isset($svc)?'Edit':'Add'?>  Service</li>
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
                                <input type="text" class="form-control" value="<?=isset($svc)?$svc->name:''?>" name="name" maxlength="50" placeholder="(Max. 50 characters)" required>
                            </div>
 
                            <div class="form-group mb-4  col-sm-6">
                                <label for="img" class="">Upload Image for Service: * <span class="text-sm text-muted mt-0 mb-2">( Max size : 1MB )</span></label>
                                <?=isset($svc)?'<p class="m-0 text-muted">( Choose only if you want to change the current image )</p>':''?>
                                
                                <div class="custom-file mb-3">
                                    <input type="file" accept=".jpg, .jpeg, .svg, .bmp, .png" class="custom-file-input" id="img" name="img"  <?=isset($svc)?'':' required'?>>
                                    <label class="custom-file-label" for="img">Choose file *</label>
                                </div>
                            </div>

                            <div class="form-group mb-4 col-sm-6">
                                <label for="icon" class="">Upload Icon: * <span class="text-sm text-muted mt-0 mb-2">( Max size : 200kb ) ( SVG recommended )</span></label>
                                <?=isset($svc)?'<p class="m-0 text-muted">( Choose only if you want to change the current Icon )</p>':''?>
                                <div class="custom-file mb-3">
                                    <input type="file" accept=".jpg, .jpeg, .svg, .bmp, .png" class="custom-file-input" id="icon" name="icon" <?=isset($svc)?'':' required'?>>
                                    <label class="custom-file-label" for="icon">Choose file *</label>
                                </div>
                            </div>

                            <div class="col-12 mb-4  form-group">
                                <label for="short_descr">Description: *</label>
                                <textarea name="descr" class="form-control" maxlength="600" placeholder="(Max. 600 characters)" id="descr" rows="4" required><?=isset($svc)?$svc->descr:NULL?></textarea>
                            </div>

                            <div class="col-sm-6 mb-4  form-group">
                                <label for="name">Minimum charges for this service:</label>
                                <p class="mt-0 text-muted">( Only for information purpose, no effect on final bill )</p>
                                <input type="number" value="<?=isset($svc)?$svc->min_charges:''?>" min="0" class="form-control" name="min_charges" placeholder="Example : 300 or leave blank for no min charges">
                            </div>

                            <div class="col-sm-6 mb-4  form-group">
                                <label for="name">Description for min charges: </label>
                                <p class="mt-0 text-muted">( Enter only if entering any min charge)</p>
                                <textarea class="form-control" value="<?=isset($svc)?$svc->min_charge_txt:''?>" name="min_charge_txt" placeholder="Enter what is included under that min charge"></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="loc_multi">Available in locations ; *</label>
                                    <div class="select2-info">
                                        <select class="select2" id="loc_multi" multiple="multiple" name="location_id[]" data-placeholder="Select locations where this service is available" data-dropdown-css-class="select2-info"  style="width: 100%;" required>
                                            <?php foreach($locations as $l){?>
                                                <option value="<?=$l->id?>"><?=$l->area.' '.$l->city.', '.$l->state.' ('.$l->pin_code.')'?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="input-group mt-2">
                                        <input type="checkbox" id="all_checkbox" class="ml-auto">&nbsp;
                                        <label for="all_checkbox" style="margin-top:-4px"> Select all</label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <button type="button" class="btn btn-secondary col-md-2 col-sm-6 col-xs-12 mr-3 my-2" onclick="window.history.back();"> <strong class="text-lg">&times;</strong>&nbsp;&nbsp;Cancel</button>
                            <button type="submit" class="btn btn-primary col-md-2 mr-3 col-sm-6 col-xs-12 my-2">
                            <?=isset($svc)?'Update':'+ Add'?>
                            </button>
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