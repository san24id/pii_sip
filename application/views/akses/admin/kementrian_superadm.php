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
                <div style="float: right;">
                  
                </div>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Nama Kementrian</th>
                  
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
                    foreach ($mentri as $row){
                   ?>
                <tr>
                  
                  <td><?php echo $row->id_kementerian; ?></td>
                  <td><?php echo $row->nama_kementerian; ?></td>
                                  
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

  