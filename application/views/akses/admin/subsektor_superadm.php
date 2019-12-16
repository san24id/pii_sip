<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA SUBSEKTOR &nbsp; 
        <!-- <a href="Dashboard/submissionpagePDF?<?php echo $_SERVER['QUERY_STRING']; ?>"><button class="btn btn-primary btn-sm">Export to PDF</button></a> -->
        <small></small>
      </h1>
    </section>

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
                  <th>NO.</th>
                  <th>Nomor Subsektor</th>
                  <th>Nama Subsektor</th>
                  
                  <!-- <th>Lokasi</th>
                  <th>Estimasi Nilai</th>
                  <th>Skor</th>
                  <th>Log Update</th>-->
                  <th>Action</th> 
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    // unset($ssektor[0]);
                    foreach ($ssektor as $row){
                   ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <!-- <td><?php echo $row->id_subsektor; ?></td> -->
                  <td><?php echo $row->id_sektor; ?></td>
                  <td><?php echo $row->nama_subsektor; ?></td>
                                  
                  <td>                    
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ubah<?php echo $row->id_subsektor; ?>">Ubah</button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?php echo $row->id_subsektor; ?>">Hapus</button>
                    
                      </td>
                </tr>
              <?php  } ?>
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
          <h4 class="modal-title">Tambah Subsektor</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/addssektor">
             <table class="table">
                <tr>
                  <th>Nomor Subsektor</th>
                  <td>:</td>
                  <td><input type="text" name="id_sektor" class="form-control"></td>
                
                </tr>     
                 <tr>
                  <th>Nama Sektor</th>
                  <td>:</td>
                  <td><input type="text" name="nama_subsektor" class="form-control"></td>
                
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
  foreach ($ssektor as $row){
?>

<!-- Modal -->
<div class="modal fade" id="ubah<?php echo $row->id_subsektor; ?>" role="dialog" aria-hidden="true"  tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Subsektor</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/updatessektor">
              <input type="hidden" name="id_subsektor" value="<?php echo $row->id_subsektor; ?>">
             <table class="table">
                <tr>
                  <th>Nomor Subsektor</th>
                  <td>:</td>
                  <td><input type="text" name="id_sektor" class="form-control" value="<?php echo $row->id_sektor; ?>"></td>
                </tr>
                <tr>
                  <th>Nama Subsektor</th>
                  <td>:</td>
                  <td><input type="text" name="nama_subsektor" class="form-control" value="<?php echo $row->nama_subsektor; ?>"></td>
                </tr>
                <!-- <tr>
                  <th>Kriteria</th>
                  <td>:</td>
                  <td><input type="text" name="creteria" class="form-control" value="<?php echo $row->creteria; ?>"></td>
                </tr>
                <tr>
                  <th>Instruksi Upload</th>
                  <td>:</td>
                  <td><input type="text" name="intruksi_upload" class="form-control" value="<?php echo $row->intruksi_upload; ?>"></td>
                </tr>                
                <tr>
                  <th>Penjelasan</th>
                  <td>:</td>
                  <td><input type="text" name="penjelasan" class="form-control" value="<?php echo $row->penjelasan; ?>"></td>
                </tr>
                <tr>
                  <th>Informasi Upload</th>
                  <td>:</td>
                  <td><input type="text" name="informasi_upload" class="form-control" value="<?php echo $row->informasi_upload; ?>"></td>
                </tr>
                <tr>
                  <th>Respon</th>
                  <td>:</td>
                  <td><input type="text" name="respon" class="form-control" value="<?php echo $row->respon; ?>"></td>
                </tr>
                <tr>
                  <th>Bobot</th>
                  <td>:</td>
                  <td><input type="text" name="bobot" class="form-control" value="<?php echo $row->bobot; ?>"></td>
                </tr> -->
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

  <div class="modal fade" id="hapus<?php echo $row->id_subsektor; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-body">
       <p align="justify">Apa kamu yakin akan menghapus Data Subsektor :  <?=$row->id_sektor?></p>
       <p> Nama Subsektor : <?=$row->nama_subsektor?> </p>
      </div>
      <div class="modal-footer">
      <form method="post" action="superadm/deletessektor">
          <input type="hidden" name="id_subsektor" value="<?php echo $row->id_subsektor; ?>">
          <button type="submit" class="btn btn-success">Yes</button>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>       

<!-- jQuery 2.2.3 -->
<script src="assets/superadm/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/superadm/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/superadm/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/superadm/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/superadm/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/superadm/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/superadm/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/superadm/dist/js/demo.js"></script>
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
</html>  