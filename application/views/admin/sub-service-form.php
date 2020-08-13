
  <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=isset($subsvc)?'<i class="fa fa-edit"></i> Edit':'+ Add'?> sub Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin/Services')?>">Services</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('Admin/subService/').$svc->id?>"><?=$svc->name?></a></li>
                        <li class="breadcrumb-item active"><?=isset($subsvc)?'Edit':'Add'?> Sub Service</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <?= form_open($submissionPath, ['id'=>'main_form']) ?>
        <div class="content mt-2">
            <div class="container-fluid">
                <section class="card px-4 py-3">
                        <div class="row mb-3">
                            <div class="col-sm-12 mb-4 form-group">
                                <label for="name">Sub service name: *</label>
                                <input type="text" class="form-control" value="<?=isset($subsvc)?$subsvc->text:''?>" name="text" maxlength="50" placeholder="(Max. 50 characters)" required>
                            </div>

                            <div class="col-sm-6 mb-4  form-group">
                                <label for="name">Minimum charges:</label>
                                <p class="mt-0 text-muted">( WIll be added to bill)</p>
                                <input type="number" min="0" class="form-control" value="<?=isset($subsvc)?$subsvc->min_charges:''?>" name="min_charges" placeholder="Example : 300 or leave blank for no min charges">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <button type="button" class="btn btn-secondary col-md-2 col-sm-6 col-xs-12 mr-3 my-2" onclick="window.history.back();"> <strong class="text-lg">&times;</strong>&nbsp;&nbsp;Cancel</button>
                            <button type="submit" class="btn btn-primary col-md-2 mr-3 col-sm-6 col-xs-12 my-2">
                            <?=isset($subsvc)?'Update':'+ Add'?>
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