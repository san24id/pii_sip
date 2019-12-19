
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA USER
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
                <div style="float: right;">
                  <select id="filter_status" class="form-control">
                    <option value="All">All</option>
                    <option value="0" <?php echo ($_GET['filter_status'] == '0') ? 'selected' : ''; ?>>Belum Konfirmasi</option>
                    <option value="1" <?php echo ($_GET['filter_status'] == '1') ? 'selected' : ''; ?>>Konfirmasi</option>
                  </select>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Status User</th>
                  <th>Nomor User</th>
                  <th>NIK</th>
                  <th>Kartu NIK</th>
                  <th>Nama</th>
                  <th>Instansi</th>
                  <th>Jabatan</th>
                  <th>Telepon</th>
                  <th>Username</th>
                  <th>Status</th>
                  <!-- <th>Estimasi Nilai</th>
                  <th>Skor</th>
                  <th>Log Update</th> -->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach ($user as $row){
                   ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td>  
                        <?php 
                          if($row->status == 0){
                              echo "<img src='assets/dashboard/images/legend/treatment.png'>";  
                          }else if($row->status == 1){
                             echo "<img src='assets/dashboard/images/legend/submit.png'>";
                          }

                          if($row->status_1 == 1){
                             echo "<img src='assets/dashboard/images/legend/kri_default.png'>";
                          }
                        ?> 
                  </td>
                  <td><?php echo $row->nomor_user; ?></td>
                  <td><?php echo $row->nik; ?></td>
                  <td><img src="foto/<?php echo $row->foto; ?>" width="100" /></td>                  
                  <td><?php echo $row->nama_user; ?></td>
                  <td><?php echo $row->instansi; ?></td>
                  <td><?php echo $row->jabatan; ?></td>
                  <td><?php echo $row->telepon ?></td>
                  <td><?php echo $row->username ?></td>
                  <td><?php echo $row->status ?></td>
                  <td>
                    <table>
                      <!-- <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ubah<?php echo $row->id_user; ?>">Ubah</button>     -->
                      <td><a href="dashboard/viewuser/<?php echo $row->id_user; ?>"><button class="btn btn-primary btn-sm">View</button></a></td>
                      <td>
                        <?php
                          if ( $row->status_1 == 0 )
                          {
                        ?>
                          <button type="button" class="btn btn-danger btn-sm" onclick="showmodal('<?php echo $row->id_user ?>', '<?php echo $row->nomor_user ?>', '<?php echo $row->nama_user ?>', '1')">Block</button>
                        <?php
                          }else{
                        ?>
                          <button type="button" class="btn btn-danger btn-sm" onclick="showmodal('<?php echo $row->id_user ?>', '<?php echo $row->nomor_user ?>', '<?php echo $row->nama_user ?>', '0')">Un-Block</button>
                        <?php
                          }
                        ?>
                      </td>
                    </table>
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
        <div class="col-xs-6">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
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
                  <td>Belum Konfirmasi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img src="assets/dashboard/images/legend/submit.png"></td>
                  <td>Konfirmasi</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><img src="assets/dashboard/images/legend/kri_default.png"></td>
                  <td>Block</td>
                </tr>
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
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal_block" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-body">
       <p align="justify">Apa kamu yakin akan <span id="modal-title"></span> <span id="modal-nomor_user"></span> dengan nama <span id="modal-nama_user"></span></p>
      </div>
      <div class="modal-footer">
      <form method="post" action="dashboard/blokuser">
          <input type="hidden" name="id" id="modal-id">
          <input type="hidden" name="status_block" id="modal-status_block">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-success">Yes</button>
      </form>
      </div>
    </div>
  </div>
</div>

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
      if ( $(this).val() == 'All' ) {
        window.location = "<?php echo site_url('dashboard/datauser')?>";
      }else{
        window.location = "<?php echo site_url('dashboard/datauser')?>?filter_status="+$(this).val();
      }
    });

    function showmodal(id, nouser, namauser, status)
    {
      $("#modal-id").val(id);
      $("#modal-nomor_user").html(nouser);
      $("#modal-nama_user").html(namauser);
      $("#modal-status_block").val(status);

      if ( status == 0 ) {
        $("#modal-title").html('Un-Block');
      }else{
        $("#modal-title").html('Block');
      }

      $("#modal_block").modal('show');
    }
</script>
</body>
</html>
