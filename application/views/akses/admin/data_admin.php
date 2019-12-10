
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA ADMIN STAFF
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah</button>
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach ($admstaff as $row){
                   ?>
                <tr>
                <td><?php echo $i++; ?></td>
                  <td><?php echo $row->display_name; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php if($row->role == 1){
                              echo "Super Admin";
                            }else if($row->role == 2){
                              echo "Admin";
                            }else if($row->role == 3){
                              echo "Admin Approval PB";
                            }else if($row->role == 4){
                              echo "Admin Approval GC";
                            }else if($row->role == 5){
                              echo "Admin User PB";
                            }else if($row->role == 6){
                                echo "Admin User GC";   
                            } ?></td>
                  <td>
                    <?php if($row->role == 1){ ?>
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ubah<?php echo $row->id_adm; ?>">Ubah</button>
                    <?php }else{ ?>
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ubah<?php echo $row->id_adm; ?>">Ubah</button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?php echo $row->id_adm; ?>">Hapus</button>
                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2019 </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <!--<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       
       
        <!-- /.control-sidebar-menu -->

     
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Modal -->
  <div class="modal fade" id="tambah" role="dialog" aria-hidden="true"  tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Admin Staff</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/addstaff">
             <table class="table">
                <tr>
                  <th>Nama</th>
                  <td>:</td>
                  <td><input type="text" name="display_name" class="form-control"></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>:</td>
                  <td><input type="text" name="email" class="form-control"></td>
                </tr>
                <tr>
                  <th>Username</th>
                  <td>:</td>
                  <td><input type="text" name="username" class="form-control"></td>
                </tr>
                <tr>
                  <th>Role</th>
                  <td>:</td>
                  <td>
                    <select name="role" class="form-control">
                         <option value="1">Super Admin</option>
                         <option value="2">Admin</option>
                         <option value="3">Admin Approval PB</option>
                         <option value="4">Admin Approval GC</option>
                         <option value="5">Admin User PB</option>
                         <option value="6">Admin User GC</option>                      
                    </select>
                      <input type="hidden" name="password" class="form form-control" value="admin">
                  </td>
                </tr>
             </table>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>

<?php 
  foreach ($admstaff as $row){
?>

<!-- Modal -->
  <div class="modal fade" id="ubah<?php echo $row->id_adm; ?>" role="dialog" aria-hidden="true"  tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Admin Staff</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/updatestaff">
              <input type="hidden" name="id_adm" value="<?php echo $row->id_adm; ?>">
             <table class="table">
                <tr>
                  <th>Nama</th>
                  <td>:</td>
                  <td><input type="text" name="display_name" class="form-control" value="<?php echo $row->display_name; ?>"></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>:</td>
                  <td><input type="text" name="email" class="form-control" value="<?php echo $row->email; ?>"></td>
                </tr>
                <tr>
                  <th>Username</th>
                  <td>:</td>
                  <td><input type="text" name="username" class="form-control" value="<?php echo $row->username; ?>"></td>
                </tr>
                <?php if($row->role != 1){ ?>
                <tr>
                  <th>Role</th>
                  <td>:</td>
                  <td>
                  <select name="role" class="form-control">
                    
                    <?php if($row->role == 2){ ?>                         
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option>
                    <?php }else if($row->role == 3){ ?>
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option> 
                    <?php }else if($row->role == 4){ ?>
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option>                       
                    <?php }else if($row->role == 5){ ?>
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option> 
                    <?php }else if($row->role == 6){ ?>
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option>                       
                    <?php }else{ ?>
                       <option value="2">Admin</option>
                       <option value="3">Admin Approval PB</option>
                       <option value="4">Admin Approval GC</option>
                       <option value="5">Admin User PB</option>
                       <option value="6">Admin User GC</option>  
                    <?php } ?>
                  </select>
                      <input type="hidden" name="password" class="form form-control" value="admin">
                  </td>
                </tr>
              <?php } ?>
             </table>
          </h5>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>

<div class="modal fade" id="hapus<?php echo $row->id_adm; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-body">
       <p align="justify">Apa kamu yakin akan menghapus dengan Nama :  <?=$row->display_name?> Username : <?=$row->username?> </p>
      </div>
      <div class="modal-footer">
      <form method="post" action="superadm/deletestaff">
          <input type="hidden" name="id_adm" value="<?php echo $row->id_adm; ?>">
          <button type="submit" class="btn btn-success">Yes</button>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- jQuery 2.2.3 -->
<script src="assets/dashboard/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/dashboard/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/dashboard/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/dashboard/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dashboard/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dashboard/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>