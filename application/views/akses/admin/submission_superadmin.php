<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA ASSESMENT &nbsp; 
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
                <!-- <p1>Bobot Pertanyaan sudah mencapai angka : <?php echo $sum;?> </p1> -->
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>NO.</th> -->
                  <th>Nomor Urut</th>
                  <th>Kriteria</th>
                  <th>Intruksi Upload</th>
                  <th>Penjelasan</th>
                  <th>Informasi Upload</th>
                  <th>Respon</th>
                  <th>Bobot</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach ($asses as $row){
                   ?>
                <tr>
                  <!-- <td><?php echo $i++; ?></td>                   -->
                  <td><?php echo $row->nomor_urut; ?></td>
                  <td><?php echo $row->creteria; ?></td>
                  <td><?php echo $row->intruksi_upload; ?></td>
                  <td><?php echo $row->penjelasan; ?></td>
                  <td><?php echo $row->informasi_upload; ?></td>
                  <td><?php echo $row->respon; ?></td>
                  <td><?php echo $row->bobot; ?></td>
                               
                  <td>                    
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ubah<?php echo $row->id_ass; ?>">Ubah</button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?php echo $row->id_ass; ?>">Hapus</button>
                    
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
          <h4 class="modal-title">Tambah Assesment</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/addassesment">
             <table class="table">
                <tr>
                  <th>Nomor Urut</th>
                  <td>:</td>
                  <td><input type="text" name="nomor_urut" class="form-control"></td>
                </tr>
                <tr>
                  <th>Kriteria</th>
                  <td>:</td>
                  <td><input type="text" name="creteria" class="form-control"></td>
                </tr>
                <tr>
                  <th>Instruksi Upload</th>
                  <td>:</td>
                  <td><input type="text" name="intruksi_upload" class="form-control"></td>
                </tr>                
                <tr>
                  <th>Penjelasan</th>
                  <td>:</td>
                  <td><input type="text" name="penjelasan" class="form-control"></td>
                </tr>
                <tr>
                  <th>Informasi Upload</th>
                  <td>:</td>
                  <td><input type="text" name="informasi_upload" class="form-control"></td>
                </tr>
                <tr>
                  <th>Respon</th>
                  <td>:</td>
                  <td><input type="text" name="respon" class="form-control"></td>
                </tr>
                <tr>
                  <th>Bobot</th>
                  <td>:</td>
                  <td><input type="text" name="bobot" class="form-control"></td>
                </tr>
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
  foreach ($asses as $row){
?>

<!-- Modal -->
<div class="modal fade" id="ubah<?php echo $row->id_ass; ?>" role="dialog" aria-hidden="true"  tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Assessment</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/updateassesment">
              <input type="hidden" name="id_ass" value="<?php echo $row->id_ass; ?>">
             <table class="table">
             <tr>
                  <th>Nomor Urut</th>
                  <td>:</td>
                  <td><input type="text" name="nomor_urut" class="form-control" value="<?php echo $row->nomor_urut; ?>"></td>
                </tr>
                <tr>
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
                  <!-- <?php $a = 100;
                        $b = 50;
                        $sum = (int) $a + $b;

                        if($sum == 100){
                          echo "Nilai Bobot 100!";
                          }else{
                            echo "Nilai Bobot Harus 100, tolong diperbaiki!";
                          }
                  ?> -->
                </tr>
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

  <div class="modal fade" id="hapus<?php echo $row->id_ass; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-body">
       <p align="justify">Apa kamu yakin akan menghapus Assesment :  <?=$row->nomor_urut?></p>
       <p> Kriteria : <?=$row->creteria?> </p>
      </div>
      <div class="modal-footer">
      <form method="post" action="superadm/deleteassesment">
          <input type="hidden" name="id_ass" value="<?php echo $row->id_ass; ?>">
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
  