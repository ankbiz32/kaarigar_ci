
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-columns"></i>&nbsp;Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Admin">Dashboard</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

      
      <div class="row my-3">

          
          <div class="col-12 col-sm-6 col-md-3" onclick="redirectTo('Admin/Bookings')" style="cursor:pointer; transition:0.1s ease" onMouseOver="this.style.transform='scale(1.02)'" onMouseOut="this.style.transform='scale(1)'">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Bookings received</span>
                <span class="info-box-number text-lg"><?=$book_count?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-12 col-sm-6 col-md-3" onclick="redirectTo('Admin/Users')" style="cursor:pointer; transition:0.1s ease" onMouseOver="this.style.transform='scale(1.02)'" onMouseOut="this.style.transform='scale(1)'">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered Users</span>
                <span class="info-box-number text-lg"><?=$usr_count?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-question"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Enquiries recieved</span>
                <span class="info-box-number text-lg">
                  <?=$enq_count?>
                  <!-- <small>%</small> -->
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3" onclick="redirectTo('Admin/Services')" style="cursor:pointer; transition:0.1s ease" onMouseOver="this.style.transform='scale(1.02)'" onMouseOut="this.style.transform='scale(1)'">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Services listed</span>
                <span class="info-box-number text-lg"><?=$svc_count?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->



          <!-- /.col -->
        </div>

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Your enquiries:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Enq. No</th>
                      <th>Enq. Date</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>E-mail</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Enquiries-->
                    <?php foreach($enq as $f){?>
                      <tr>
                        <td><?=$f->id?></td>
                        <td><?=date("d-m-Y",strtotime("$f->date"))?></td>
                        <td><?=$f->name?></td>
                        <td><?=$f->email?></td>
                        <td><?=$f->phone?></td>
                        <td><?=$f->message?></td>
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
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script> -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "order": [[ 5, "asc" ]]
    });
  });

  // page redirection
  function redirectTo(sUrl) {
            window.location = sUrl
        }
</script>
