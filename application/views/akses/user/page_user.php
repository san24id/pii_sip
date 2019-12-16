
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengajuan Projek
        <small> <a href="Home/form_add"><button type="button" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i>&nbsp;New Data Entry</button></a></small>
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
                <div style="float: right;">
                  <select id="filter_status" class="form-control">
                    <option value="0">All</option>
                    <?php 
                      foreach ($statusinf as $key => $value)
                      {
                    ?>
                    <option value="<?php echo $value->id; ?>" 
                      <?php echo ($_GET['filter_status'] == $value->id) ? 'selected' : ''; ?>
                      ><?php echo $value->status_user; ?></option>
                    <?php
                      }
                    ?>
                  </select>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Status</th>
                  <th>Penanggung Jawab</th>
                  <th>Kategori</th>
                  <th>Sektor</th>
                  <th>Nama Proyek</th>
                  <th>Lokasi</th>
                  <th>Estimasi Nilai</th>
                  <th>Log Update</th>
                  <th>Action</th>
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
                          }else if($row->status >= 3){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>";
                          }
                        ?> 
                  </td>
                  <td><?php echo $row->nama_pj; ?></td>
                  <td><?php echo $row->nama_kategori; ?></td>
                  <td><?php echo $row->nama_sektor; ?></td>
                  <td><?php echo $row->nama_projek; ?></td>
                  <td><?php echo $row->lokasi ?></td>
                  <td><?php echo $row->estimasi; ?></td>
                  <td><?php echo $row->log_update; ?></td>
                  <td>
                    <?php if($row->status == 1){ ?>
                            <a href="Home/form_edit/<?php echo $row->id_projek; ?>"><button class="btn btn-primary btn-sm">Edit</button></a>
                    <?php }else if($row->status == 2){ ?>
                            <a href="Home/nextinclomplete2/<?php echo $row->id_projek; ?>"><button class="btn btn-primary btn-sm">Edit</button></a>
                    <?php }else { ?>
                            <a href="Home/formfinished/<?php echo $row->id_projek; ?>"><button class="btn btn-primary btn-sm">View</button></a>
                    <?php } ?>
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

      <div class="row">
        <div class="col-xs-12 col-md-4">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            
                 <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10%">NO.</th>
                  <th style="width: 10%">Status</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td><img src="assets/dashboard/images/legend/treatment.png"></td>
                  <td>Draft</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img src="assets/dashboard/images/legend/submit.png"></td>
                  <td>Incomplete</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><img src="assets/dashboard/images/legend/verified.png"></td>
                  <td>Complete</td>
                </tr>
              </tbody>
              </table>
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
 

</div>
<!-- ./wrapper -->

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


    function view_daily($id)
    {


        $.ajax({
         type : 'post',
         url : 'Report/getreport/'+$id,
        success: function(data)
        {
            $('.fetched-data').html(data);//menampilkan data ke dalam modal
            $('#modal_view').modal('show'); // show bootstrap modal when complete loaded

        }
      });
    }

    function delete_daily($id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('dashboard/remove_daily')?>/"+ $id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting');
            }
        });

      }
    }

    $('#filter_status').on('change', function(){
      if ( $(this).val() == 0 ) {
        window.location = "<?php echo site_url('home')?>";
      }else{
        window.location = "<?php echo site_url('home')?>?filter_status="+$(this).val();
      }
    });

</script>
</body>
</html>
