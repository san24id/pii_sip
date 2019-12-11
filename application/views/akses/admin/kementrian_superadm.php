<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA KEMENTRIAN VERIFY &nbsp; 
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
                  <th>ID Kementrian</th>
                  <th>Nama Kementrian</th>
                  
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
                    unset($mentri[0]);
                    foreach ($mentri as $row){
                      echo $row
                   ?>                   
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row->id_kementerian; ?></td>
                  <td><?php echo $row->nama_kementerian; ?></td>
                                  
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
          <h4 class="modal-title">Tambah Kementrian</h4>
        </div>
        <div class="modal-body">
          <h5>
            <form method="post" action="superadm/addkementrian">
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

  