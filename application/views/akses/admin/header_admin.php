<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <base href="<?php echo base_url() ?>">
  <title>Aplikasi Scanning System</title>
  <link rel="icon" type="image/png" href="<?=base_url('assets/login/images/sip1.png');?>"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/dashboard/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/dashboard/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dashboard/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="assets/dashboard/plugins/iCheck/all.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="assets/dashboard/bower_components/select2/dist/css/select2.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S</b>IP</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
 
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/dashboard/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("display_name"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/dashboard/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                 <span class="hidden-xs"><?php echo $this->session->userdata("display_name"); ?></span>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   
                </div>
                <div class="pull-right">
                  <a href="login/logoutadm" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="login/logoutadm" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <?php 
            if($this->session->userdata("role") == 1){?>
               <li class="<?php echo $active1?>"><a href="superadm"><i class="glyphicon glyphicon-user"></i><span>Admin Staff</span></a></li>
               <li class="<?php echo $data_user?>"><a href="superadm/user"><i class="glyphicon glyphicon-user"></i><span>Status User</span></a></li>
               <li class="<?php echo $impasses?>"><a href="superadm/impassesment"><i class="glyphicon glyphicon-th-list"></i><span>IMP Assessment</span></a></li>
               <li class="<?php echo $impm1?>"><a href="superadm/impm1"><i class="glyphicon glyphicon-th-list"></i><span>IMP Deskripsi Proyek</span></a></li>
               <li class="<?php echo $assesment?>"><a href="superadm/assesment"><i class="glyphicon glyphicon-th-list"></i><span>Assesment</span></a></li>
               <li class="<?php echo $m1?>"><a href="superadm/m1"><i class="glyphicon glyphicon-th-list"></i><span>Deskripsi Proyek</span></a></li>
               <li class="<?php echo $kementrian?>"><a href="superadm/kementrian"><i class="glyphicon glyphicon-list-alt"></i><span>Kementrian</span></a></li>
               <li class="<?php echo $lpnk?>"><a href="superadm/lpnk"><i class="glyphicon glyphicon-list-alt"></i><span>LPNK</span></a></li>
               <li class="<?php echo $sektor?>"><a href="superadm/sektor"><i class="glyphicon glyphicon-info-sign"></i><span>Sektor</span></a></li>
               <li class="<?php echo $subsektor?>"><a href="superadm/subsektor"><i class="glyphicon glyphicon-info-sign"></i><span>Subsektor</span></a></li>
               <li class="<?php echo $prov?>"><a href="superadm/provinsi"><i class="glyphicon glyphicon-chevron-right"></i><span>Provinsi</span></a></li>
               <li class="<?php echo $kotakab?>"><a href="superadm/kotakabu"><i class="glyphicon glyphicon-chevron-right"></i><span>Kota Kabupaten</span></a></li>
        <?php }else{ ?>
          <li class=""><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
          <li class=""><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
          <li class="header">Other</li>
          <li class=""><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>