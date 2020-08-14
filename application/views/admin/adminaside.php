
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('Admin')?>" class="brand-link ml-1">
      <span class="brand-text text-lg d-flex  align-items-center"><img src="<?=base_url('assets/images/logo_adm.png')?>" alt="Logo" height="50px" class=""> <strong class="ml-3">Admin </strong>Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('Admin/adminProfile')?>" class="d-block"> <?php echo $this->session->user->fname .'&nbsp;' . $this->session->user->lname ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="PartnerReg" OR $this->uri->segment(2)=="" OR $this->uri->segment(2)=="Roles"){echo ' menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Registrations
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(2)==''){echo ' CustomActive';}?>">
                  <i class="fas fa-user nav-icon"></i>
                  <p>User Registrations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/PartnerReg')?>" class="nav-link <?php if($this->uri->segment(2)=="PartnerReg"){echo ' CustomActive';}?>">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Partner Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Roles')?>" class="nav-link <?php if($this->uri->segment(2)=="Roles"){echo ' CustomActive';}?>">
                  <i class="fas fa-at nav-icon"></i>
                  <p>Registration roles</p>
                </a>
              </li>
            </ul>
          </li> -->


          <li class="nav-item">
            <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(1)=="Admin" && $this->uri->segment(2)==""){echo ' CustomActive';}?>">
              <i class="fa fa-columns nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Bookings')?>" class="nav-link <?php if($this->uri->segment(2)=="Bookings"){echo ' CustomActive';}?>">
              <i class="far fa-bookmark nav-icon"></i>
              <p>Bookings</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Locations')?>" class="nav-link <?php if($this->uri->segment(2)=="Locations"){echo ' CustomActive';}?>">
              <i class="far fa-map-marker-alt nav-icon"></i>
              <p>Locations master</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/Subscriptions')?>" class="nav-link <?php if($this->uri->segment(2)=="Subscriptions"){echo ' CustomActive';}?>">
              <i class="far fa-rss nav-icon"></i>
              <p>Subscriptions</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?=base_url('Admin/Users')?>" class="nav-link <?php if($this->uri->segment(2)=="Users"){echo ' CustomActive';}?>">
              <i class="far fa-user nav-icon"></i>
              <p>Registered users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('Admin/Hero_sliders')?>" class="nav-link <?php if($this->uri->segment(2)=="Hero_sliders"){echo ' CustomActive';}?>">
              <i class="far fa-film nav-icon"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('Admin/Services')?>" class="nav-link <?php if($this->uri->segment(2)=="Services"){echo ' CustomActive';}?>">
              <i class="far fa-cog nav-icon"></i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('Admin/Feedbacks')?>" class="nav-link <?php if($this->uri->segment(2)=="Feedbacks"){echo ' CustomActive';}?>">
              <i class="far fa-quote-left nav-icon"></i>
              <p>Feedbacks</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/Gallery')?>" class="nav-link <?php if($this->uri->segment(2)=="Gallery"){echo ' CustomActive';}?>">
              <i class="fa fa-image nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="<?=base_url('Admin/editableImages')?>" class="nav-link <?php if($this->uri->segment(2)=="editableImages"){echo ' CustomActive';}?>">
              <i class="fa fa-square nav-icon"></i>
              <p>Editable images</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?=base_url('Admin/webProfile')?>" class="nav-link <?php if($this->uri->segment(2)=="webProfile"){echo ' CustomActive';}?>">
              <i class="fa fa-globe nav-icon"></i>
              <p>Web profile</p>
            </a>
          </li>


          <li class="nav-item mt-4" id="website-link">
            <a href="<?=base_url()?>" target=_blank class="nav-link">
              <i class="fas fa-external-link-alt nav-icon"></i>
              <p>Open Website</p>
            </a>
          </li>
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>