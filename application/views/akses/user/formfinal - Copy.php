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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div id="printThis">
    <section class="content-header">
      <h1>
        FORM LAPORAN RANGKUMAN PROYEK
        <small></small>
      </h1>

    </section>
    <!-- Main content -->
<?php foreach($profil as $rowp){ ?>
<form method="post" action="Home/nextinclomplete2/<?php echo $rowp->id_projek; ?>">
    <section class="content">
    
       <div class="row">
          <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body">
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label>Status :</label>
                 <?php 
                          if($rowp->status == 1){
                              echo "<img src='assets/dashboard/images/legend/treatment.png'> Drafted";  
                          }else if($rowp->status == 2){
                             echo "<img src='assets/dashboard/images/legend/submit.png'> Incompleted";
                          }else if($rowp->status == 3){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>Completed";
                          }else if($rowp->status == 4){
                             echo "<img src='assets/dashboard/images/legend/executed_2.png'>Pending Finish";
                          }else if($rowp->status == 5){
                             echo "<img src='assets/dashboard/images/legend/executed.png'>Finish";
                          }  
                  ?> 
                </div>
                <div class="form-group">
                  <label>1. Penanggung Jawab Proyek Kerjasama : </label>&nbsp;<?php echo $rowp->nama_pj; ?>
                  <input type="hidden" name="id_projek" class="form-control" value="<?php echo $rowp->id_projek; ?>">
                  <input type="hidden" name="nama_pj" class="form-control" placeholder="Dirut Pertamina, Dirut PLN, Mentri BUMN" value="<?php echo $rowp->nama_pj; ?>">
                </div>

                <div class="form-group">
                   <label>2. Kategori Penanggung Jawab Proyek Kerjasama : </label> &nbsp;
                   <?php 

                        if($rowp->kode == 'PP'){
                            echo $rowp->nama_kategori.', '.$rowp->jenis.', '.$rowp->nama_kementerian.$rowp->nama_lpnk;
                        }else if($rowp->kode == 'PD'){
                            echo $rowp->nama_kategori.', '.$rowp->nama_provinsi.', '.$rowp->nama_daerah;
                        }else if($rowp->kode == 'BN'){
                           echo $rowp->nama_kategori.', '.$rowp->bumn_text;
                        }else if($rowp->kode == 'BD'){
                           echo $rowp->nama_kategori.', '.$rowp->bumd_text;
                        } else{
                            echo $rowp->nama_kategori.', '.$rowp->lainnya_text;
                        }

                   ?>
                </div>

                <div class="form-group">
                <label>3. Sektor Infrastruktur:</label>&nbsp;<?php echo $rowp->nama_sektor; ?>
              </div>

               <div class="form-group">
                  <label>4. Nama Proyek :</label> &nbsp;<?php echo $rowp->nama_projek; ?>
                </div>

                 <div class="form-group">
                  <label title="tes">5. Lokasi Proyek :</label>&nbsp;<?php echo $rowp->lokasi; ?>
                </div>

                 <div class="form-group">
                  <label title="tes">6. Estimasi Nilai Proyek (dalam Rupiah) :</label>&nbsp;<?php echo $rowp->estimasi; ?>
                </div>

                <hr>
                <div class="form-group">
                      <div class="row">
                        <div class="col-md-12"> 
                         <label>7. Informasi PIC Proyek : </label>
                        </div>
                        <div class="col-md-4"> 
                          <label>-</label>
                           Nama : <?php echo $rowp->nama; ?>
                        </div>
                        <div class="col-md-4"> 
                          <label>-</label>
                          Jabatan : <?php echo $rowp->jabatan; ?>
                        </div>
                        <div class="col-md-4"> 
                         <label>-</label>
                           Telepon : <?php echo $rowp->telepon; ?>
                        </div>
                      </div>
                    </div>

<hr>
                <?php } ?>
                  <?php 
                    foreach ($g1 as $r1) {}
                    foreach ($g2 as $r2) {}
                    foreach ($g3 as $r3) {}
                    foreach ($g4 as $r4) {}
                    foreach ($g5 as $r5) {}
                    foreach ($g6 as $r6) {}
                    foreach ($g7 as $r7) {}
                    foreach ($g8 as $r8) {}
                    foreach ($g9 as $r9) {}
                    foreach ($g10 as $r10) {}
                    foreach ($g11 as $r11) {}
                    foreach ($g12 as $r12) {}
                    foreach ($g13 as $r13) {}
                    foreach ($g14 as $r14) {}
                    foreach ($g15 as $r15) {}
                   ?>

                  <div class="form-group">
                  <label> Skor :</label>
                  <h2><?php echo $r1->skor + $r2->skor + $r3->skor + $r4->skor + $r5->skor + $r6->skor + $r7->skor + $r8->skor + $r9->skor + $r10->skor + $r11->skor + $r12->skor+ $r13->skor + $r14->skor + $r15->skor; ?></h2>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
      </div>
          <!-- /.box -->
        </form>


<?php if($rowp->status < 5){ ?>
        <form role="form" method="post"  action="Dashboard/statusprofiladm/<?php echo $rowp->id_projek; ?>">
                <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>" />
                <input type="hidden" name="status" value="5" />
                <input type="hidden" name="tskor" value="<?php echo $r1->skor + $r2->skor + $r3->skor + $r4->skor + $r5->skor + $r6->skor + $r7->skor + $r8->skor + $r9->skor + $r10->skor + $r11->skor + $r12->skor+ $r13->skor + $r14->skor + $r15->skor; ?>">
                <input type="hidden" name="id_adm" value="<?php echo $this->session->userdata("id_adm"); ?>" />

           <div class="box-footer">
            <?php foreach($profiladm as $rowr){ ?>
                Rekomendasi By &nbsp;: &nbsp; <?php 
                $staff = $rowr->display_name;
                echo  $staff; ?>
                <textarea class="form-control" cols="3" name="rekomendasi" placeholder="YOUR RESPON" readonly="readonly"><?php echo $rowr->rekomendasi; ?></textarea>
            <?php } ?><br >
              <textarea class="form-control" cols="3" name="rekomendasi_sadm" placeholder="YOUR RESPON" required="required"></textarea><br>
              </div>
          </form>
<?php }else{?>
              <div class="box-footer">
               <?php foreach($profiladm as $rowr){ ?>
                Rekomendasi By &nbsp;: &nbsp; <?php 
                $staff = $rowr->display_name;
                echo  $staff; ?>
                <textarea class="form-control" cols="3" name="rekomendasi" placeholder="YOUR RESPON" readonly="readonly"><?php echo $rowr->rekomendasi; ?></textarea>
            <?php } ?>
              <br>
                 <?php foreach($profiladm2 as $rowr2){ ?>
                Rekomendasi By &nbsp;: &nbsp; <?php echo $rowr2->display_name; ?>
                <textarea class="form-control" cols="3" name="rekomendasi_sadm" placeholder="YOUR RESPON" required="required" readonly="readonly"><?php echo $rowr->rekomendasi_sadm; ?></textarea><br>
                <a href="Home"><button type="button" class="btn btn-warning">Kembali</button></a>
                 <button type="button" class="btn btn-primary" id="print">Print</button>
              </div>

<?php }} ?>

      <!-- /.row -->
    </section>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2019 </footer>

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

<script src="assets/dashboard/plugins/iCheck/icheck.min.js"></script>

<!-- Select2 -->
<script src="assets/dashboard/bower_components/select2/dist/js/select2.full.min.js"></script>

<script>

     

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

</script>
</body>
</html>
