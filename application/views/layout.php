<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WEB SEKOLAH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>media/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>media/css/font-awesome.min.css">
  <!-- Font Ion icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>media/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>media/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url() ?>media/css/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>W</b>B</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Web</b>Sekolah</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>media/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Sistiandy</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>media/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Sistiandy
                    <small>sistiandy.syahbana@gmail.com</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <?php $this->load->view('sidebar') ?>

    <div class="content-wrapper">

      <?php isset($main) ? $this->load->view($main) : null; ?>
      <div id="deleteModal"></div>
    </div>


    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.1
      </div>
      <strong>Copyright &copy; 2018 All rights
      reserved.
    </footer>

  </div>

 <!-- jQuery 3 -->
 <script src="<?php echo base_url() ?>media/js/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url() ?>media/js/bootstrap.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url() ?>media/js/adminlte.min.js"></script>
</body>
</html>
