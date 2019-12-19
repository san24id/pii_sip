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
        <section class="content-header">
          <h1>
            DATA PROYEK
            <small></small>
          </h1>
        </section>
        <!-- Main content -->
        <?php foreach($profil as $rowp){ ?>
        <form method="post" action="Home/action_updateprofil/<?php echo $rowp->id_projek; ?>">
          <input type="hidden" name="next" value="draft" id="subaction">
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Profil Proyek</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                <div class="form-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_profil">Deskripsi Proyek</button>
                </div>
                <div class="form-group">
                  <label>Status :</label>
                 <?php 
                          if($rowp->status_profil == 1){
                              echo "<img src='assets/dashboard/images/legend/treatment.png'> Drafted";  
                          }else if($rowp->status_profil == 2){
                             echo "<img src='assets/dashboard/images/legend/submit.png'> Incompleted";
                          }else if($rowp->status_profil == 3){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>Completed";
                          }else if($rowp->status_profil == 4){
                             echo "<img src='assets/dashboard/images/legend/executed_2.png'>Pending Finish";
                          }else if($rowp->status_profil == 5){
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
                <label>3.1 Subsektor Infrastruktur:</label>&nbsp;<?php echo $rowp->nama_subsektor; ?>
              </div>
              <?php if($rowp->nama_lainnya != '' || $rowp->nama_lainnya != NULL ){  ?>
                <div class="form-group">
                  <label>3.2 Subsektor Lainnya:</label>&nbsp;<?php echo $rowp->nama_lainnya; ?>
                </div>
              <?php } ?>

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
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <div class="modal fade" id="disclamer" tabindex="-1" role="dialog" aria-labelledby="disclamer" aria-hidden="true">
          
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
        
                  <h5><p align="justify">Dengan ini seluruh pengisian Data Proyek dan Deskripsi Proyek sudah benar dan sesuai </p></h5>

                </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" id="draft2">Tidak</button>
                      <button type="submit" name="next" value="next" class="btn btn-success" id="next">Ya</button>
                    </div>
                </div>
              </div>
            </div>

        </form>
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->

                <!-- /.box-body -->
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                   TOTAL SKOR : <h1><?php echo $rowp->total_skor; ?></h1>
                   <br>
                       <?php if($rowp->status == 8){ 
                        foreach ($resadmin as $res) {?>
                        <form method="post" action="dashboard/updateresponap">
                     Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>">
                          <input type="hidden" name="status" value="<?php echo $rowp->status; ?>">
                          <input type="hidden"  name="user2" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" readonly><?php echo $res->respon1 ?></textarea><br>
                     Last Admin User &nbsp;: &nbsp;
                      <input type="text" value="<?php echo $res->user1 ?>" readonly> &nbsp;
                      <input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update1)); ?>" readonly><br><br>
                      <textarea class="form-control" cols="3" name="respon2" placeholder="YOUR RESPON" required><?php echo $res->respon2 ?></textarea><br>
                     Last Admin Approval &nbsp;: &nbsp;
                     <input type="text" value="<?php echo $res->user2 ?>" readonly> &nbsp;
                     <input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update2)); ?>" readonly><br><br>
                          <button type="submit" class="btn btn-primary" name="save" value="draft">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                        </form>
                       <?php }}else if($rowp->status == 9){ 
                        foreach ($resadmin as $res) { ?>
                        <form method="post" action="dashboard/updateresponap">
                     Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>">
                          <input type="hidden" name="status" value="<?php echo $rowp->status; ?>">
                          <input type="hidden"  name="user2" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" readonly><?php echo $res->respon1 ?></textarea><br>
                     Last Admin User &nbsp;: &nbsp;
                          <input type="text" value="<?php echo $res->user1 ?>" readonly> &nbsp;
                          <input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update1)); ?>" readonly><br><br>
                          <textarea class="form-control" cols="3" name="respon2" placeholder="YOUR RESPON" readonly><?php echo $res->respon2 ?></textarea><br>
                     Last Admin Approval &nbsp;: &nbsp;<input type="text" value="<?php echo $res->user2 ?>" readonly> &nbsp;
                          <input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update2)); ?>" readonly><br><br>
                        </form>
                      <?php }} ?>
                  </div>
                </div>
              </div>
            </div>
              <?php } ?>
                <div class="box-footer">
                   <a href="dashboard/submissionpage"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>
                   <a href="Dashboard/FormVerifikasiProyekPDF/<?php echo $rowp->id_projek; ?>" target="_blank"><button type="button" class="btn btn-primary btn-sm">Export Informasi Proyek</button></a>
                   <a href="Dashboard/FormVerifikasiProyekPDF2/<?php echo $rowp->id_projek; ?>" target="_blank"><button type="button" class="btn btn-success btn-sm">Export Laporan Tindak Lanjut</button></a>
                </div>
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


<div class="modal fade" id="anomor1" tabindex="-1" role="dialog" aria-labelledby="anomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <h5><p align="justify">Penanggung Jawab Proyek Kerjasama (PJPK) adalah Menteri, Kepala Lembaga, Kepala Daerah dan Direksi Badan Usaha Milik Negara/Direksi Badan Usaha Milik Daerah sepanjang diatur dalam peraturan perundangundangan sektor (sesuai dengan Peraturan Menteri PPN/Bappenas No. 4 tahun 2015 tentang Tata Cara Pelaksanaan Kerjasama Pemerintah dengan Badan Usaha (KPBU) dalam Penyediaan Infrastruktur)</p></h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="anomor3" tabindex="-1" role="dialog" aria-labelledby="anomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <h5><p align="justify">Mengacu kepada Peraturan Presiden No. 38 tahun 2015 tentang Kerjasama Pemerintah dengan Badan Usaha (KPBU) dalam Penyediaan Infrastruktur dan Peraturan Menteri PPN/Bappenas No. 4 tahun 2015 tentang Tata Cara Pelaksanaan KPBU dalam Penyediaan Infrastruktur, terdapat 19 jenis infrastruktur (ekonomi dan sosial) yang dapat dikerjasamakan.</p></h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="anomor7" tabindex="-1" role="dialog" aria-labelledby="anomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <h5><p align="justify">Pejabat berwenang yang dapat dihubungi terkait Proyek.</p></h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor0" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[0]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor1" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[1]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor2" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[2]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor3" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[3]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor4" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[4]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor5" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[5]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor6" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[6]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor7" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[7]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor8" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[8]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor9" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[9]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor10" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[10]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor11" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[11]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor12" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[12]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor13" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[13]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bnomor14" tabindex="-1" role="dialog" aria-labelledby="bnomor1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[14]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="alert_file" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-body">
       <p align="justify">Harap lengkapi file upload yang telah disediakan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalNext" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>" />
                      <input type="hidden" name="status" value="<?php echo $rowp->status; ?>" />
                      <div class="box-body">
                          <div id="printThis">
                          <h5>
                            <center><b><font size="+1" style="font-family: sans-serif;">Terima Kasih Telah Mengisi<br>"SISTEM INFORMASI PROYEK KPBU"</font></b></center>
                        <br>
                      
                        <p align="justify" style="font-family: sans-serif;">PT Penjaminan Infrastruktur Indonesia (Persero) akan mereview dan menindaklanjuti dokumen yang telah Saudara sampaikan. <br><br>
                              PT Penjaminan Infrastruktur Indonesia (Persero) akan menghubungi saudara jika pengecekan telah selesai.</p>

                          <br>
                            <center><b><font size="+1" style="font-family: sans-serif;">Rekomendasi Penilaian:</font></b></center>

                        <table class="table table-bordered table-striped" style="font-family: sans-serif;">
                          <tbody>
                            <?php 
                              $i = 1;
                              foreach ($getrespon as $res) {
                              ?>
                            <tr>
                              <td><?=$i++;?></td>
                              <td><?php echo $res->respon; ?></td>
                            </tr>
                            <?php }  ?>
                          </tbody>
                        </table>
                          <br>
                        <table width="100%">
                        <tbody>
                            <tr>
                              <td><center><a href="http://kpsrb.bappenas.go.id/ppptoolkit/tentang-kpbu/" target="blank"><img src="assets/dashboard/images/bappneas.png" width="70%" /></a></center></td>
                              <td><center><a href="http://www.iigf.co.id/id/" target="blank"><img src="assets/dashboard/images/pii.png" width="70%" /></a></center></td>
                            </tr>
                          </tbody>
                        </table>
                        <hr style=" border: 1px solid #000;">
                        <img src="assets/dashboard/images/FooterHyperlink.png" width="100%">

                          <center><b><font style="font-family: sans-serif;">Seketariat:</font></b></center>
                          <br>
                          <center><p style="font-family: sans-serif;">Capital Place Building, 7-8th Floor, Jl. Jenderal Gatot Subroto Kav.18 Jakarta Selatan, DKI Jakarta </p></center>
                      </h5>
                    </div>
                      </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="print">Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal_profil" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Deskripsi Proyek</h4>
      </div>
      <div class="modal-body">
      </section>
        <!-- Main content -->
        <h5>
          <section class="content">
            <?php
              $id_ass = array();
              $section = array(); 
              $nomor = array();
              $pertanyaan = array();
              $intruksi_upload= array();
              $penjelasan = array();
              $informasi_upload = array();
              $bobot = array();
              $respon = array();
              $s_upload = array();
              foreach ($assesment as $result=>$v):
                
                array_push($id_ass, $v->id_ass);
                array_push($section, $v->section);
                array_push($nomor, $v->nomor_urut);
                array_push($pertanyaan, $v->creteria);
                array_push($intruksi_upload , $v->intruksi_upload);
                array_push($penjelasan, $v->penjelasan);
                array_push($informasi_upload, $v->informasi_upload);
                array_push($bobot, $v->bobot);
                array_push($respon, $v->respon);
                array_push($s_upload, $v->s_upload);
              
              endforeach;

              $Y = array();
              $N = array();
              $skr = array();
              foreach ($skor as $key => $v):

                array_push($Y, $v->Y);
                array_push($N, $v->N);
                array_push($skr, $v->skor);
                  
              endforeach;

              $id_projek = array();
              $status = array();
              foreach($profil as $rowp=>$y):
                  array_push($id_projek, $y->id_projek);
                  array_push($status, $y->status);

               endforeach;
              
              ?>
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Deskripsi Proyek</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" id="form2">
                  <table class="table table-bordered table-striped">
                      <tbody>
                      <?php 
                      for($x = 0; $x<$cn_assesment; $x++){
                      if($id_ass[$x] != '' || $id_ass[$x] != NULL){ ?>
                        <tr>
                          <td><?php echo $nomor[$x]; ?></td>
                          <td><?php echo $pertanyaan[$x]; ?>
                            <br>
                                       <input disabled type="radio" name="p<?php echo $x; ?>"  value="Y" class="pi<?php echo $x; ?>" <?php echo $Y[$x]; ?>>&nbsp;&nbsp;Ya&nbsp;&nbsp;&nbsp;&nbsp;
                                       <input disabled type="radio" name="p<?php echo $x; ?>"  value="N" class="pi<?php echo $x; ?>" <?php echo $N[$x]; ?>>&nbsp;&nbsp;Tidak
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[$x]; ?>">
                                       <input type="hidden" name="section[]" value="<?php echo $section[$x]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[$x]; ?>">
                                       <input type="hidden" name="pertanyaan[]" value="<?php echo $pertanyaan[$x]; ?>">
                                       <input type="hidden" name="intruksi_upload[]" value="<?php echo $intruksi_upload[$x]; ?>">
                                       <input type="hidden" name="penjelasan[]" value="<?php echo $penjelasan[$x]; ?>">
                                       <input type="hidden" name="informasi_upload[]" value="<?php echo $informasi_upload[$x]; ?>">
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[$x]; ?>" class="y<?php echo $x; ?>">
                                       <input type="hidden" name="N[]" value="<?php echo $N[$x]; ?>" class="n<?php echo $x; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[$x]; ?>" class = 'bb<?php echo $x; ?>'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[$x]; ?>" class = 'rs<?php echo $x; ?>'>
                                       <input type="hidden" name="s_upload[]" value="<?php echo $s_upload[$x]; ?>">
                                       <div class="dp<?php echo $x; ?>" style="display: none;">
                                       <?php 
                                        $xy = 0;
                                        foreach ($noass as $row) {
                                         if($row->nomor_urut == $x+1){
                                           if($row->b == 'not'){
                                             if($status[0] > 2 && $s_upload[$x] == 1){ ?>
                                                <a href="<?php echo 'upload/'.$row->upload; ?>"><button type="button" class="btn btn-default btn-sm">Download File <?php echo $row->nomor_urut; ?></button></a>
                                          <?php } 
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";  
                                           }else if($row->b == 'label'){
                                              echo "<label>".$row->a."</label><br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                             if ($status[0] > 2 && $s_upload[$x] == 1) { ?>
                                                  <span class="attachment<?php echo $row->nomor_urut; ?>" style="display: none;"><?php echo $row->upload; ?></span>
                                              <?php
                                                $xy++;
                                                if($xy > 1){ 
                                                  $nn = "display:none";
                                                }else{
                                                  $nn = "display:block";
                                                }
                                               ?>
                                                <button type="button" id="dw<?php echo $row->nomor_urut; ?>" class="btn btn-default btn-sm" style="<?php echo $nn; ?>">Download File <?php echo $row->nomor_urut; ?></button>
                                                <script type="text/javascript">
                                                  document.getElementById('dw<?php echo $row->nomor_urut; ?>').addEventListener("click", function(){
                                                  var arr = [];
                                                    $('.attachment<?php echo $row->nomor_urut; ?>').each(function() {
                                                    arr.push($(this).html());
                                                    var $combine = 'name[]=' + arr.join('&name[]=');
                                                    window.location = "<?php echo site_url('dashboard/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_<?php echo $row->nomor_urut; ?>';
                                                  });

                                                  });
                                              </script>
                                          <?php 
                                          }
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a$x ac$x' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b$x' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                             }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a$x' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s$x' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                          if($status[0] > 2 && $s_upload[$x] == 1){ ?>
                                                <a href="<?php echo 'upload/'.$row->upload; ?>"><button type="button" class="btn btn-default btn-sm">Download File <?php echo $row->nomor_urut; ?></button></a>
                                                <div style="">

                                              </div>
                                          <?php } 
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control areax'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                            }
                                          }
                                         } ?>
                                        </div>
                            </td>
                              <td><?php echo $skr[$x]; ?></td>
                          </tr>
                          <?php }} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.row -->
          </section>
        </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
      

 <?php for($x = 0; $x<$cn_assesment; $x++){ ?>
   pi<?php echo $x; ?> = document.getElementsByClassName('pi<?php echo $x; ?>');
   y<?php echo $x; ?> = document.getElementsByClassName('y<?php echo $x; ?>');
   n<?php echo $x; ?> = document.getElementsByClassName('n<?php echo $x; ?>');
   dp<?php echo $x; ?> = document.getElementsByClassName('dp<?php echo $x; ?>');
   bb<?php echo $x; ?> = document.getElementsByClassName('bb<?php echo $x; ?>');
   rs<?php echo $x; ?> = document.getElementsByClassName('rs<?php echo $x; ?>');

   for(var i = 0; i< pi<?php echo $x; ?>.length; i++){

      if(y<?php echo $x; ?>[0].value == 'checked'){
        dp<?php echo $x; ?>[0].style.display = 'block';
      }else{
        dp<?php echo $x; ?>[0].style.display = 'none';
      }

        if (pi<?php echo $x; ?>[i].value == 'Y'){
            pi<?php echo $x; ?>[i].addEventListener("click", function(){
              for(var i = 0; i < pi<?php echo $x; ?>.length; i++){
                dp<?php echo $x; ?>[0].style.display = 'block';
                y<?php echo $x; ?>[0].value = 'checked';
                n<?php echo $x; ?>[0].value = 'nonchecked';
                bb<?php echo $x; ?>[0].value;
                rs<?php echo $x; ?>[0].value = '';
              }
            });
        }else if (pi<?php echo $x; ?>[i].value == 'N'){
            pi<?php echo $x; ?>[i].addEventListener("click", function(){
              for(var i = 0; i < pi<?php echo $x; ?>.length; i++){
                dp<?php echo $x; ?>[0].style.display = 'none';
                y<?php echo $x; ?>[0].value = 'nonchecked';
                n<?php echo $x; ?>[0].value = 'checked';
                bb<?php echo $x; ?>[0].value = 0;
                rs<?php echo $x; ?>[0].value;
              }
            });
        }
   }

   a<?php echo $x; ?> = document.getElementsByClassName('a<?php echo $x; ?>');
   b<?php echo $x; ?> = document.getElementsByClassName('b<?php echo $x; ?>');
   s<?php echo $x; ?> = document.getElementsByClassName('s<?php echo $x; ?>');

    for(var i = 0; i < b<?php echo $x; ?>.length; i++){

      if(a<?php echo $x; ?>[b<?php echo $x; ?>.length-1].value == 'Lainnya' || a<?php echo $x; ?>[b<?php echo $x; ?>.length-1].value == 'lainnya' || a<?php echo $x; ?>[b<?php echo $x; ?>.length-1].value == 'Other' || b<?php echo $x; ?>[a<?php echo $x; ?>.length-1].value == 'other'){
        if(a<?php echo $x; ?>[i].checked == true){
          a<?php echo $x; ?>[b<?php echo $x; ?>.length].style.display = 'block';
          a<?php echo $x; ?>[b<?php echo $x; ?>.length].required = true;
          b<?php echo $x; ?>[i].value = 'checked';
          s<?php echo $x; ?>[0].value = 'block';
        }else{
          a<?php echo $x; ?>[b<?php echo $x; ?>.length].style.display = 'none';
          b<?php echo $x; ?>[i].value = 'nonchecked';
          s<?php echo $x; ?>[0].value = 'none';
          a<?php echo $x; ?>[b<?php echo $x; ?>.length].required = false;
        }
        }else{
          if(a<?php echo $x; ?>[i].checked == true){
          b<?php echo $x; ?>[i].value = 'checked';
        }else{
          b<?php echo $x; ?>[i].value = 'nonchecked';
        }
      }

      a<?php echo $x; ?>[i].addEventListener("click", function(){
          for(var i = 0; i < b<?php echo $x; ?>.length; i++){  
          if (a<?php echo $x; ?>[i].checked == true){
                b<?php echo $x; ?>[i].value = 'checked';
                a<?php echo $x; ?>[b<?php echo $x; ?>.length].style.display = 'block';
                s<?php echo $x; ?>[0].value = 'block';
                a<?php echo $x; ?>[b<?php echo $x; ?>.length].required = true;
          }else{
              b<?php echo $x; ?>[i].value = 'nonchecked';
              a<?php echo $x; ?>[b<?php echo $x; ?>.length].style.display = 'none';
              s<?php echo $x; ?>[0].value = 'none';
              a<?php echo $x; ?>[b<?php echo $x; ?>.length].required = false;
          }
        }

        });
 
    }
<?php } ?>

$("#draft").on('click', function(){

$("[name=nama_pj]").attr('required',true);
$("[name=kt]").attr('required',true);
$("[name=sektor]").attr('required',true);
$("[name=subsektor]").attr('required',true);
$("[name=nama_proyek]").attr('required',false);
$("[name=lokasi]").attr('required',false);
$("[name=estimasi]").attr('required',false);
$("[name=nama]").attr('required',false);
$("[name=jabatan]").attr('required',false);
$("[name=telepon]").attr('required',false);

<?php for($x = 0; $x<$cn_assesment; $x++){ ?>
   $("[name=p<?php echo $x; ?>]").attr('required',false); 
   $(".dp<?php echo $x; ?> .areax").prop('required', false);
   $(".ac<?php echo $x; ?>").prop('required', false);
<?php } ?>

$('#disclamer').modal('hide');

// $("#form").submit();


});

$("#draft2").on('click', function(){

$("[name=nama_pj]").attr('required',true);
$("[name=kt]").attr('required',true);
$("[name=sektor]").attr('required',true);
$("[name=subsektor]").attr('required',true);
$("[name=nama_proyek]").attr('required',false);
$("[name=lokasi]").attr('required',false);
$("[name=estimasi]").attr('required',false);
$("[name=nama]").attr('required',false);
$("[name=jabatan]").attr('required',false);
$("[name=telepon]").attr('required',false);

<?php for($x = 0; $x<$cn_assesment; $x++){ ?>
   $("[name=p<?php echo $x; ?>]").attr('required',false); 
   $(".dp<?php echo $x; ?> .areax").prop('required', false);
   $(".ac<?php echo $x; ?>").prop('required', false);
<?php } ?>

 $('#disclamer').modal('hide');

// $("#form").submit();


});

$("#next").on('click', function(){

if ( ($("[name=nama_pj]").val() == '') || ($("[name=kt]").val() == '') || ($("[name=sektor]").val() == '') || ($("[name=subsektor]").val() == '') || ($("[name=nama_proyek]").val() == '') || ($("[name=lokasi]").val() == '') || ($("[name=estimasi]").val() == '') || ($("[name=nama]").val() == '') || ($("[name=jabatan]").val() == '') || ($("[name=telepon]").val() == '')){
alert("Profil Proyek harap dilengkapi semuanya");

$("[name=nama_pj]").attr('required',true);
$("[name=kt]").attr('required',true);
$("[name=sektor]").attr('required',true);
 $("[name=subsektor]").attr('required',true);
$("[name=nama_proyek]").attr('required',true);
$("[name=lokasi]").attr('required',true);
$("[name=estimasi]").attr('required',true);
$("[name=nama]").attr('required',true);
$("[name=jabatan]").attr('required',true);
$("[name=telepon]").attr('required',true);

 $('#disclamer').modal('hide');
}


if ( ($("[name=p0]:checked").length == 0) 
      <?php for($x = 1; $x<$cn_assesment; $x++){ ?>
        || ($("[name=p<?php echo $x; ?>]:checked").length == 0) 
      <?php } ?> 

){
        alert("Deskripsi Proyek harap dilengkapi semuanya");
      <?php for($x = 0; $x<$cn_assesment; $x++){ ?>
          $("[name=p<?php echo $x; ?>]").attr('required',true);
      <?php } ?> 
  $('#disclamer').modal('hide');
}
// if ( ($("[name=p1]:checked").length == 0) ){
//   var a = $(".dp1 #test").val();
//   alert(a);
//   return false;
// }

// if ( ($(".dp1 #test").val() == '') ){
//   alert("oo");
//   return false;
// }

// if ( ($(".dp2 #test1").val() == 'nonchecked') && ($(".dp2 #test2").val() == 'nonchecked') && ($(".dp2 #test3").val() == 'nonchecked') ){
//   alert("harus salah satu");
//   return false;
// }

<?php for($x = 0; $x<$cn_assesment; $x++){ ?>

  if( $(".y<?php echo $x; ?>").val() == 'checked'){
      $(".dp<?php echo $x; ?> .areax").prop('required', true);

          if($(".ac<?php echo $x; ?>:checked").length == 0){
            $(".ac<?php echo $x; ?>").prop('required', true);
          }else{
            $(".ac<?php echo $x; ?>").prop('required', false);
          }
  }else{
      $(".dp<?php echo $x; ?> .areax").prop('required', false);
      $(".ac<?php echo $x; ?>").prop('required', false);
  }

   $('#disclamer').modal('hide');

<?php } ?>

   // if( $(".y1").val() == 'checked'){
   //    $(".dp1 .areax").prop('required', true);
   // }else{
   //    $(".dp1 .areax").prop('required', false);
   // }

   // if( $(".y3").val() == 'checked'){
   //    $(".dp3 .areax").prop('required', true);
   // }else{
   //    $(".dp3 .areax").prop('required', false);
   // }

   // if( $(".y11").val() == 'checked'){
   //    $(".dp11 .areax").prop('required', true);
   // }else{
   //    $(".dp11 .areax").prop('required', false);
   // }


// if( $(".y2").val() == 'checked'){
//     if($(".ac2:checked").length == 0){
//         $(".ac2").prop('required', true);
//     }else{
//         $(".ac2").prop('required', false);
//     }
// }else{
//   $(".ac2").prop('required', false);
// }


if( ($("[name=nama_pj]").val() != '') || 
  ($("[name=kt]").val() != '') || 
  ($("[name=sektor]").val() != '') ||
  ($("[name=subsektor]").val() != '') ||  
  ($("[name=nama_proyek]").val() != '') || 
  ($("[name=lokasi]").val() != '') || 
  ($("[name=estimasi]").val() != '') || 
  ($("[name=nama]").val() != '') || 
  ($("[name=jabatan]").val() != '') || 
  ($("[name=telepon]").val() != '')
    <?php for($x = 0; $x<$cn_assesment; $x++){ ?>
        || ($("[name=p<?php echo $x; ?>]:checked").length > 0) 
    <?php } ?> 
){

$('#disclamer').modal('hide');

// $("#form").submit();

}

});

    </script>
  </body>
</html>