<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>media/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Sistiandy</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      
      <li class="<?php echo ($this->uri->segment(1) == 'dashboard' OR $this->uri->segment(1) == NULL) ? 'active' : NULL; ?> ">
        <a href="<?php echo site_url() ?>">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="<?php echo ($this->uri->segment(1) == 'student') ? 'active' : NULL; ?>">
        <a href="<?php echo site_url('student') ?>">
          <i class="fa fa-group"></i>
          <span>Siswa</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>