<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <base href="<?php echo base_url() ?>">
  <title>Aplikasi Scanning System</title>
  
  <link rel="icon" type="image/png" href="<?=base_url('assets/login/images/sip2.png');?>"/>
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
<style type="text/css">
/*
.cbx {
  position: relative;
  display: block;
  float: left;
  width: 18px;
  height: 18px;
  border-radius: 4px;
  background-color: #606062;
  background-image: linear-gradient(#474749, #606062);
  box-shadow: inset 0 1px 1px rgba(255,255,255,0.15), inset 0 -1px 1px rgba(0,0,0,0.15);
  transition: all 0.15s ease;
}
.cbx svg {
  position: absolute;
  top: 3px;
  left: 3px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #fff;
  stroke-width: 2;
  stroke-dasharray: 17;
  stroke-dashoffset: 17;
  transform: translate3d(0, 0, 0);
}
.rdo {
  position: relative;
  display: block;
  float: left;
  width: 18px;
  height: 18px;
  border-radius: 10px;
  background-color: #606062;
  background-image: linear-gradient(#474749, #606062);
  box-shadow: inset 0 1px 1px rgba(255,255,255,0.15), inset 0 -1px 1px rgba(0,0,0,0.15);
  transition: all 0.15s ease;
}
.rdo:after {
  content: "";
  position: absolute;
  display: block;
  top: 6px;
  left: 6px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #fff;
  opacity: 0;
  transform: scale(0);
}
.cbx + span,
.rdo + span {
  float: left;
  margin-left: 6px;
}
.forms {
  margin: auto;
  user-select: none;
}
.forms label {
  display: inline-block;
  margin: 10px;
  cursor: pointer;
}
.forms input[type="checkbox"],
.forms input[type="radio"] {
  position: absolute;
  opacity: 0;
}
.forms input[type="radio"]:checked + .rdo {
  background-color: #606062;
  background-image: linear-gradient(#255cd2, #1d52c1);
}
.forms input[type="radio"]:checked + .rdo:after {
  opacity: 1;
  transform: scale(1);
  transition: all 0.15s ease;
}
.forms input[type="checkbox"]:checked + .cbx {
  background-color: #606062;
  background-image: linear-gradient(#255cd2, #1d52c1);
}
.forms input[type="checkbox"]:checked + .cbx svg {
  stroke-dashoffset: 0;
  transition: all 0.15s ease;
}
*/
</style>
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="Dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IP</span>
      <!-- logo for regular state and mobile devices -->
      <span><img width="60px" height="35px;" src="<?=base_url('assets/dashboard/images/sip2.png');?>" /></span>
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
                  <a href="http://application.iigf.co.id/portal" class="btn btn-default btn-flat">Kembali ke portal</a>
                  <!-- <a href="login/loginadm" class="btn btn-default btn-flat">Logout</a> -->
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <?php 
         $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as 
         act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND 
         a.status = 5";

         $count_kembali = $this->db->query($sql)->num_rows();

         $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as 
         act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND 
         a.status = 4";

         $count_apl = $this->db->query($sql)->num_rows();

         $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as 
         act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND 
         a.status = 6";
 
          $count_dataproyek = $this->db->query($sql)->num_rows(); 

        //  $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as 
        //  act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND 
        //  a.status = 7";
  
        //  $count_dataproyekuser = $this->db->query($sql)->num_rows();         
          
         $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as 
         act_code FROM t_projekprofil a, t_kategori b, t_sektor c, t_adminuser d WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.id_projek=d.id_projek AND 
         a.status = '7' AND d.username = '".$this->session->userdata('username')."'";
  
         $count_dataproyekuser = $this->db->query($sql)->num_rows();

      ?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      </form>    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <?php 
            // if($this->session->userdata("role") == 1){?>
               <li class=""><a href="superadm"><i class="glyphicon glyphicon-user"></i><span>Admin Staff</span></a></li>
               <li class=""><a href="superadm/user"><i class="glyphicon glyphicon-user"></i><span>Status User</span></a></li>
               <li class=""><a href="superadm/assesment"><i class="glyphicon glyphicon-th-list"></i><span>Assesment</span></a></li>
               <li class=""><a href="superadm/m1"><i class="glyphicon glyphicon-user"></i><span>M1</span></a></li>
               <li class=""><a href="superadm/kementrian"><i class="glyphicon glyphicon-list-alt"></i><span>Kementrian</span></a></li>
               <li class=""><a href="superadm/lpnk"><i class="glyphicon glyphicon-list-alt"></i><span>LPNK</span></a></li>
               <li class=""><a href="superadm/sektor"><i class="glyphicon glyphicon-sector"></i><span>Sektor</span></a></li>
               <li class=""><a href="superadm/subsektor"><i class="glyphicon glyphicon-info-sign"></i><span>Subsektor</span></a></li>
               <li class=""><a href="superadm/provinsi"><i class="glyphicon glyphicon-chevron-right"></i><span>Provinsi</span></a></li>
               <li class=""><a href="superadm/kotakabu"><i class="glyphicon glyphicon-chevron-right"></i><span>Kota Kabupaten</span></a></li> -->
        <?php if($this->session->userdata("role") == 2){ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="header">Data Proyek</li>
               <li class="<?php echo $active3?>"><a href="dashboard/submitprofilstatushigh/high/?ss=high"><i class="glyphicon glyphicon-folder-open"></i><span>High</span></a></li>
               <li class="<?php echo $active4?>"><a href="dashboard/submitprofilstatusmedium/medium/?ss=medium"><i class="glyphicon glyphicon-folder-open"></i><span>Medium</span></a></li>
               <li class="<?php echo $active5?>"><a href="dashboard/submitprofilstatuslow/low/?ss=low"><i class="glyphicon glyphicon-folder-open"></i><span>Low</span></a></li>
               <li class="<?php echo $active6?>"><a href="dashboard/submitprofilstatuskembali/kembali/?ss=kembali"><i class="glyphicon glyphicon-folder-open"></i><span>Kembali</span><small class="label pull-right bg-red"><?php echo $count_kembali; ?></small></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>

        <?php }else if($this->session->userdata("role") == 3){ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="<?php echo $dataproyek?>"><a href="dashboard/submitprofilstatus/dataproyek?ss=dataproyek"><i class="glyphicon glyphicon-folder-open"></i><span>Data Proyek</span><small class="label pull-right bg-red"><?php echo $count_apl; ?></small></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>

        <?php }else if($this->session->userdata("role") == 4){ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="<?php echo $dataproyek?>"><a href="dashboard/submitprofilstatus/dataproyek?ss=dataproyek"><i class="glyphicon glyphicon-folder-open"></i><span>Data Proyek</span><small class="label pull-right bg-red"><?php echo $count_apl; ?></small></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>

        <?php }else if($this->session->userdata("role") == 5){ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="<?php echo $dataproyek?>"><a href="dashboard/submitprofilstatus/dataproyek?ss=dataproyek"><i class="glyphicon glyphicon-folder-open"></i><span>Data Proyek</span><small class="label pull-right bg-red"><?php echo $count_dataproyekuser; ?></small></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>

        <?php }else if($this->session->userdata("role") == 6){ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="<?php echo $dataproyek?>"><a href="dashboard/submitprofilstatus/dataproyek?ss=dataproyek"><i class="glyphicon glyphicon-folder-open"></i><span>Data Proyek</span><small class="label pull-right bg-red"><?php echo $count_dataproyek; ?></small></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>
               
        <?php }else{ ?>
               <li class="<?php echo $active1?>"><a href="dashboard"><i class="glyphicon glyphicon-blackboard"></i><span>Dashboard</span></a></li>
               <li class="<?php echo $active2?>"><a href="dashboard/submissionpage"><i class="glyphicon glyphicon-hdd"></i><span>Master Data</span></a></li>
               <li class="header">Other</li>
               <li class="<?php echo $active7?>"><a href="dashboard/datauser"><i class="glyphicon glyphicon-user"></i><span>User</a></span></li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>