
  <style type="text/css">
      @media print {
        body * {
          visibility: hidden;
        }
        #printThis * {
          visibility: visible;
        }
        #printThis {
          position: absolute;
          left: 0;
          top: 0;
        }
        .modal-footer * {
          visibility: hidden;
        }
      }
    </style>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

         <?php foreach($profil as $rowp){ ?>

          <?php } ?>

        <section class="content">
          <div class="alert alert-warning confirm-div">
            
          </div>
          <div class="row">
            <div class="col-xs-12">
              <form id="form2" action="Home/nextcomplete" method="post" enctype="multipart/form-data">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">C. Upload File</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>" />
                    <input type="hidden" name="kode_proyek" value="<?php echo $profil[0]->kode.$profil[0]->nomor_projek; ?>" />
                    <input type="hidden" name="status" value="3"/>
                    <div class="box-body">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th style="width: 5%">Criteria No</th>
                            <th>File</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            if ( $g3[0]->pilihan == "Y" )
                            {
                          ?>
                          <tr>
                            <td>3</td>
                            <td>
                              Lampiran Berita Acara kegiatan, foto, dan dokumentasi lain yang tersedia<br>
                              <input type="file" class="form-control" name="file3" <?php ($g3[0]->upload == '') ? 'required' : '' ?>>
                              <?php
                                if ( $g3[0]->upload != '' )
                                {
                              ?>
                              <input type="hidden" name="ada3" value="<?php echo $g3[0]->upload; ?>">
                              <a href="<?php echo base_url('assets/upload/'.$g3[0]->upload) ?>" target="_blank"><?php echo $g3[0]->upload; ?></a>
                            <?php } ?>
                            </td>
                          </tr>
                          <?php
                            }
                            if ( $g4[0]->pilihan == "Y" )
                            {
                          ?>
                          <tr>
                            <td>4</td>
                            <td>
                              Dokumen RPJMN/D (halaman terkait proyek), RTRW, RDTR<br>
                              <input type="file" class="form-control" name="file4" <?php ($g4[0]->upload == '') ? 'required' : '' ?> >   
                              <?php
                                if ( $g4[0]->upload != '' )
                                {
                              ?>
                              <input type="hidden" name="ada4" value="<?php echo $g4[0]->upload; ?>">
                              <a href="<?php echo base_url('assets/upload/'.$g4[0]->upload) ?>" target="_blank"><?php echo $g4[0]->upload; ?></a>
                            <?php } ?>
                            </td>
                          </tr>
                          <?php
                            }
                            if ( $g7[0]->pilihan == "Y" )
                            {
                          ?>
                          <tr>
                            <td>7</td>
                            <td>
                              Lampirkan Halaman Sampul dan Daftar Isi:<br>Master Plan, DED, Kajian Kelayakan/ Feasibility Study, Lainnya
                              <input type="file" class="form-control" name="file7" <?php ($g7[0]->upload == '') ? 'required' : '' ?>>
                              <?php
                                if ( $g7[0]->upload != '' )
                                {
                              ?>
                              <input type="hidden" name="ada7" value="<?php echo $g7[0]->upload; ?>">
                              <a href="<?php echo base_url('assets/upload/'.$g7[0]->upload) ?>" target="_blank"><?php echo $g7[0]->upload; ?></a>
                            <?php } ?>
                            </td>
                          </tr>
                          <?php
                            }

                            if ( $g3[0]->pilihan == "N" AND $g4[0]->pilihan == "N" AND $g7[0]->pilihan == "N" )
                            {
                          ?>
                          <tr>
                            <td colspan="2">Tidak ada file yang perlu diupload</td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="button" class="btn btn-primary" id="draft">Save Draft</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNext">Submit</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2019 
      </footer>
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
    <div class="modal fade" id="modalNext" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div id="printThis">
          <div class="modal-header" style="background: white">
            <div class="col-md-10">
              <h3 class="modal-title">
                <center>Rekomendasi Penilaian</center>
              </h3>
            </div>
            <div class="col-md-2">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-content">
            <form role="form" method="post" action="Home/statusprofil/<?php echo $rowp->id_projek; ?>">
            <div class="modal-body">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                      <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>" />
                      <input type="hidden" name="status" value="3" />
                      <div class="box-body">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Scanning System Criteria</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $i = 1;
                              foreach ($respon as $res) {
                              ?>
                            <tr>
                              <td>-</td>
                              <td><?php echo $res->respon; ?></td>
                            </tr>
                            <?php }  ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="print">Print</button>
            <button type="button" class="btn btn-success" id="complete">Complete</button>
            </div>
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
    <!-- <script src="assets/dashboard/dist/js/app.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dashboard/dist/js/demo.js"></script>
    <script src="assets/dashboard/plugins/iCheck/icheck.min.js"></script>
    <!-- Select2 -->
    <script src="assets/dashboard/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
      $('.select2').select2()
      
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
      
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass   : 'iradio_flat-green'
        })
      
      
      $('#kemen').hide();
      $('#lemba').hide();
      
      var jenis = $('#jenis').val();
      var daerah = $('#daerah').val();
      
      $('#jenis').change(function(){
        jenis = $('#jenis').val();
        
      if(jenis == 'Kementerian'){
          $('#kemen').show();
          $('#lemba').hide();
      }else if(jenis == 'Lembaga'){
          $('#kemen').hide();
          $('#lemba').show();
      }
      
      });
      
      if(jenis == 'Kementerian'){
          $('#kemen').show();
          $('#lemba').hide();
      }else if(jenis == 'Lembaga'){
          $('#kemen').hide();
          $('#lemba').show();
      }
      
      $('#rkota').hide();
      $('#rkabupaten').hide();
      
      $('#daerah').change(function(){
      daerah = $('#daerah').val();
      
      if(daerah == 'Kota' ){
         $('#rkota').show();
         $('#rkabupaten').hide();
      }
      else if(daerah == 'Kabupaten' ){
         $('#rkota').hide();
         $('#rkabupaten').show();
      }
      });
      
      if(daerah == 'Kota' ){
         $('#rkota').show();
         $('#rkabupaten').hide();
      
                 $.ajax({        
                  type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                  url: "<?php echo base_url("index.php/Home/listKota_edit"); ?>", // Isi dengan url/path file php yang dituju       
                  data: {
                          id_provinsi : $("#provinsi").val(),
                          n_kota : $("#n_kota").val()
                        }, // data yang akan dikirim ke file yang dituju        
                  dataType: "json",        
                  beforeSend: function(e) {          
                    if(e && e.overrideMimeType) {            
                      e.overrideMimeType("application/json;charset=UTF-8");          
                    }        
                  },        
                  success: function(response){ // Ketika proses pengiriman berhasil          
                    $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                     $("#kota").html(response.list_kota).show();       
                  },        
                  error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                  }      
                });
      }
      else if(daerah == 'Kabupaten' ){
         $('#rkota').hide();
         $('#rkabupaten').show();
      
         $.ajax({        
                  type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                  url: "<?php echo base_url("index.php/Home/listKabupaten_edit"); ?>", // Isi dengan url/path file php yang dituju       
                  data: {
                           id_provinsi : $("#provinsi").val(),
                           n_kabupaten : $("#n_kabupaten").val()
                         }, // data yang akan dikirim ke file yang dituju        
                  dataType: "json",        
                   beforeSend: function(e) {          
                       if(e && e.overrideMimeType) {            
                           e.overrideMimeType("application/json;charset=UTF-8");          
                       }        
                   },        
                    success: function(response){ // Ketika proses pengiriman berhasil          
                        $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                        $("#kabupaten").html(response.list_kabupaten).show();       
                        },        
                    error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                        }      
                }); 
      }
      
      function printElement(elem) {
          var domClone = elem.cloneNode(true);
          
          var $printSection = document.getElementById("printSection");
          
          if (!$printSection) {
              var $printSection = document.createElement("div");
              $printSection.id = "printSection";
              document.body.appendChild($printSection);
          }
          
          $printSection.innerHTML = "";
          $printSection.appendChild(domClone);
      }

      document.getElementById("print").onclick = function () {
        window.print();
      }


      $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)    // Kita sembunyikan dulu untuk loadingnya    
              $("#loading").hide(); 
              $("#loading2").hide();        
              $("#provinsi").change(function(){ // Ketika user mengganti atau memilih data provinsi      
                $("#kota").hide(); // Sembunyikan dulu combobox kota nya   
                $("#kabupaten").hide();   
                $("#loading").show(); // Tampilkan loadingnya          
                $.ajax({        
                  type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                  url: "<?php echo base_url("index.php/Home/listKota"); ?>", // Isi dengan url/path file php yang dituju       
                  data: {
                      id_provinsi : $("#provinsi").val()
                      }, // data yang akan dikirim ke file yang dituju        
                  dataType: "json",        
                  beforeSend: function(e) {          
                    if(e && e.overrideMimeType) {            
                      e.overrideMimeType("application/json;charset=UTF-8");          
                    }        
                  },        
                  success: function(response){ // Ketika proses pengiriman berhasil          
                    $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                     $("#kota").html(response.list_kota).show();       
                  },        
                  error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                  }      
                });
      
                        $.ajax({        
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                            url: "<?php echo base_url("index.php/Home/listKabupaten"); ?>", // Isi dengan url/path file php yang dituju       
                            data: {
                                    id_provinsi : $("#provinsi").val()
                                  }, // data yang akan dikirim ke file yang dituju        
                            dataType: "json",        
                            beforeSend: function(e) {          
                                if(e && e.overrideMimeType) {            
                                    e.overrideMimeType("application/json;charset=UTF-8");          
                                }        
                            },        
                            success: function(response){ // Ketika proses pengiriman berhasil          
                                $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                                 $("#kabupaten").html(response.list_kabupaten).show();       
                            },        
                            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                            }      
                        });       
              });  
            });  
      
      $("#draft").on('click', function(){
        $("#form2").validate();
        $("[name=status]").val('');
        $("#form2").submit();
      })

      $("#complete").on('click', function(){
        $("#form2").validate();
        $("[name=status]").val('3');
        $("#form2").submit();
      })

      // assumes you're using jQuery
      $(document).ready(function() {
        $('.confirm-div').hide();
        <?php if($this->session->flashdata('msg')){ ?>
        $('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
        <?php } ?>
      });
    </script>
  </body>
</html>