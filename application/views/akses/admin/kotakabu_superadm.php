<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA KOTA KABUPATEN VERIFY &nbsp; 
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
                <div style="float: right;">
                  
                </div>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No. Provinsi</th>
                  <th>Wilayah</th>
                  <th>Wilayah Provinsi</th>
               
                  
                  <!-- <th>Lokasi</th>
                  <th>Estimasi Nilai</th>
                  <th>Skor</th>
                  <th>Log Update</th>
                  <th>Action</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach ($kkotakabu as $row){
                   ?>
                <tr>
                  
                  <td><?php echo $row->id_provinsi; ?></td> 
                  <td><?php echo $row->id_kotakabu; ?></td>           
                  <td><?php echo $row->nama_daerah; ?></td>
                                  
                  <td>

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

  