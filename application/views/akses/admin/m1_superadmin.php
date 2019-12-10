<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA M1 VERIFY &nbsp; 
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
                  <th>ID ASS</th>
                  <th>Nomor Urut</th>
                  <th>Urut</th>
                  <th>A</th>
                  <th>B</th>
                  <!-- <th>SU</th> -->
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
                    foreach ($m1s as $row){
                   ?>
                <tr>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->idass; ?></td>
                  <td><?php echo $row->nomor_urut; ?></td>
                  <td><?php echo $row->urut; ?></td>
                  <td><?php echo $row->a; ?></td>
                  <td><?php echo $row->b; ?></td>
                  <!-- <td><?php echo $row->su ?></td> -->
                 
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

  