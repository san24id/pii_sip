
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PROYEK VERIFY
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
                 <table id="example1" border="1">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Status</th>
                  <th>Kode Proyek</th>
                  <th>Penanggung Jawab</th>
                  <th>Kategori</th>
                  <th>Sektor</th>
                  <th>Nama Proyek</th>
                  <th>Lokasi</th>
                  <th>Estimasi Nilai</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach ($profil as $row){
                   ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td>  
                  <?php 
                          if($row->status == 1){
                              echo "<img src='assets/dashboard/images/legend/treatment.png'>";  
                          }else if($row->status == 2){
                             echo "<img src='assets/dashboard/images/legend/submit.png'>";
                          }else if($row->status == 3){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>";
                          }else if($row->status == 4){
                             echo "<img src='assets/dashboard/images/legend/sendtoadminapp.png'>";
                          }else if($row->status == 5){
                             echo "<img src='assets/dashboard/images/legend/default.png'>";
                          }else if($row->status == 6 || $row->status == 7){
                             echo "<img src='assets/dashboard/images/legend/sendtoadminuser.png'>";
                          }else if($row->status == 8){
                             echo "<img src='assets/dashboard/images/legend/respontoadminuser.png'>";
                          }else if($row->status == 9 || $row->status == 10){
                             echo "<img src='assets/dashboard/images/legend/responformpp.png'>";
                          }    
                        ?>
                  </td>
                  <td><?php echo $row->nomor_projek; ?></td>
                  <td><?php echo $row->nama_pj; ?></td>
                  <td><?php echo $row->nama_kategori; ?></td>
                  <td><?php echo $row->nama_sektor; ?></td>
                  <td><?php echo $row->nama_projek; ?></td>
                  <td><?php echo $row->lokasi ?></td>
                  <td><?php echo $row->estimasi; ?></td>
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
