
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FORM PROFIL PROYEK
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    
       <div class="row">
          <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">A. Profil Proyek</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label title="tes">1. Nomor ID :</label>
                  <input type="text" class="form-control" value="PP0001">
                </div>
                <div class="form-group">
                  <label title="tes">2. Nama Penanggung Jawab Proyek :</label>
                  <input type="text" class="form-control" value="Hermanto">
                </div>

<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('pp').checked) {
        document.getElementById('rjenis').style.display = 'block';
         document.getElementById('rprovinsi').style.display = 'none';
    }
    else if (document.getElementById('pd').checked) {
        document.getElementById('rprovinsi').style.display = 'block';
        document.getElementById('rjenis').style.display = 'none';
    }else{
        document.getElementById('rjenis').style.display = 'none';
        document.getElementById('rprovinsi').style.display = 'none';
    }

}


</script>

                <div class="form-group">
                   <label title="tes">3. Kategori Penanggung Jawab Proyek :</label>
                  <div class="radio">
                    <label>
                       <input type="radio" name="r3" value="option2" id="pp" onclick="yesnoCheck()" checked="checked">
                        Pemerintah Pusat
                    </label>
                  </div>
                  <div style="display: block;" id="rjenis">
                <div class="radio">
                <label></label>
                <select class="select2" id="jenis" disabled="disabled">
                  <option>Kementrian</option>
                  <option>Non Kementrian</option>
                </select>
              </div>
                <div class="radio">
                <label>Kementrian :</label>
                  <select class="select2" name="kementerian" id="kementerian" disabled="disabled">
                    <?php foreach($kementerian as $row) { ?>
                    <option value="<?=$row['id_kementerian']?>"><?=$row['nama_kementerian']?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
                  <div class="radio" style="display: none;">
                <label>Non Kementrian :</label>
                 <select class="select2" name="lpnk" id="lpnk">
                    <?php foreach($lpnk as $row) { ?>
                    <option value="<?=$row['id_lpnk']?>"><?=$row['nama_lpnk']?></option>
                    <?php } ?>
                  </select>
              </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="r3"  value="option2" id="pd" onclick="yesnoCheck();">
                      Pemerintah Daerah
                    </label>
                  </div>
                  <div style="display: none;" id="rprovinsi">
                  <div class="radio">
                <label>Provinsi :</label>
                  <select class="select2" name="provinsi" id="provinsi">
                    <?php foreach($provinsi as $row) { ?>
                    <option value="<?=$row['id_provinsi']?>"><?=$row['nama_provinsi']?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="radio">
                <label>Daerah :</label>
                <select class="select2" id="daerah">
                  <option></option>
                  <option>Kota</option>
                  <option selected="selected">Kabupaten</option>
                </select>
              </div>
              <div class="radio" style="display: none;">
                <label>Kota :</label>
                   <select class="select2" name="kota" id="kota">
                    <?php foreach($kota as $row) { ?>
                    <option value="<?=$row['id_kota']?>"><?=$row['nama_kota']?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="radio">
                <label>Kabupaten :</label>
                  <select class="select2" name="kabupaten" id="kabupaten">
                    <?php foreach($kabupaten as $row) { ?>
                    <option value="<?=$row['id_kabupaten']?>"><?=$row['nama_kabupaten']?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
                   <div class="radio">
                    <label>
                      <input type="radio" name="r3"  value="option2" onclick="yesnoCheck();">
                      BUMN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="r3"  value="option2" onclick="yesnoCheck();">
                      BUMD
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="r3" value="option2" onclick="yesnoCheck();">
                      Lainnya : <input type="text" name="">
                    </label>
                  </div>
                </div>

                <div class="form-group">
                <label>4. Sektor Infrastruktur:</label>
                <select class="form-control select2" disabled="disabled">
                  <option></option>
                  <option>Transportasi</option>
                  <option selected="selected">Jalan</option>
                  <option>Sumber Daya Air dan Irigasi</option>
                  <option>Air Minum</option>
                  <option>Sistem Pengelolaan Air Limbah Terpusat</option>
                  <option>Sistem Pengelolaan Air Limbah Setempat</option>
                  <option>Sistem Pengelolaan Persampahan</option>
                  <option>Telekomunikasi dan Informatika</option>
                  <option>Energi dan Ketenagalistrikan</option>
                  <option>Konservasi Energi</option>
                  <option>Ekonomi Fasilitas Perkotaan</option>
                  <option>Kawasan</option>
                  <option>Pariwisata</option>
                  <option>Fasilitas Pendidikan</option>
                </select>
              </div>

               <div class="form-group">
                  <label title="tes">5. Nama Proyek :</label>
                  <input type="text" class="form-control" value="Tol Layang Bekasi Cikarang">
                </div>

                 <div class="form-group">
                  <label title="tes">6. Lokasi Proyek :</label>
                  <input type="text" class="form-control" value="Cikarang">
                </div>

                 <div class="form-group">
                  <label title="tes">7. Estimasi Proyek :</label>
                  <input type="text" class="form-control" value="3000000000000">
                </div>
                
              </div>
              <!-- /.box-body -->
            </form>
              <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
      </div>

             <div class="row">
          <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">B. Deskripsi Proyek</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
              <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>Scanning System Criteria</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                   ?>
                <tr>
                  <td>1</td>
                  <td>Apakah sudah ada Proyek/Infrastruktur sejenis yang dikembangkan sebelumnya?<br><input type="radio" name="d1" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d1" id="optionsRadios2" class="minimal-red" value="option2">Tidak</td>
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Apakah Proyek dibutuhkan oleh Masyarakat?<br><input type="radio" name="d2" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d2" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                   Jika Ya, sebutkan 3 (tiga) alasannya 
                   <br>
                   <textarea cols="3" class="form-control"></textarea>
                </tr>
                <tr>
                  <td>3</td>
                  <td><font color="red">*Berkas tidak ditemukan mohon di periksa kembali</font><br>Apakah rencana Proyek sudah pernah disosialisasikan kepada Masyarakat?<br><input type="radio" name="d3" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d3" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                     Jika Ya, melalui media: pilih minimal satu 
                    <br>
                    <input type="checkbox" name="n1" id="optionsRadios2" class="minimal-red" value="option2">Media massa<br>
                    <input type="checkbox" name="n2" id="optionsRadios2" class="minimal-red" value="option2">Forum masyarakat/sosialisasi<br>
                    <input type="checkbox" name="n3" id="optionsRadios2" class="minimal-red" value="option2">Lainnya <input type="text" name=""><br>
                    Lampiran Berita Acara kegiatan, foto, dan dokumentasi lain yang tersedia<br>
                      <input type="file" name="">
                  </td>
                </tr>
                 <tr>
                  <td>4</td>
                  <td>Apakah Proyek sudah tercantum dalam Dokumen Perencanaan Pemerintah:
                    <br>
                    (i) &nbsp; &nbsp; RPJMN/D  &nbsp; <input type="radio" name="n4" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="n4" id="optionsRadios2" class="minimal-red" value="option2">Tidak <br>
                    (ii)  &nbsp;  &nbsp; RTRW  &nbsp; <input type="radio" name="n5" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="n5" id="optionsRadios2" class="minimal-red" value="option2">Tidak<br>
                    Dokumen RPJMN/D (halaman terkait proyek), RTRW, RDTR<br>
                  <input type="file" name="">
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Apakah Proyek masuk ke dalam daftar Proyek Strategis Nasional (PSN) atau Proyek Prioritas Nasional atau PPP Book?<br><input type="radio" name="d4" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d4" id="optionsRadios2" class="minimal-red" value="option2">Tidak<br></td>
                </tr>
              <tr>
                  <td>6</td>
                  <td>Apakah lahan untuk Proyek telah tersedia?<br><input type="radio" name="d5" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d5" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                    Jika Ya, bagaimana status kepemilikan lahan tersebut:
                    <br>
                    <input type="checkbox" name="n6" id="optionsRadios2" class="minimal-red" value="option2">Tanah Ulayat<br>
                    <input type="checkbox" name="n7" id="optionsRadios2" class="minimal-red" value="option2">Tanah Hutan Lindung<br>
                    <input type="checkbox" name="n8" id="optionsRadios2" class="minimal-red" value="option2">Tanah Masyarakat<br>
                    <input type="checkbox" name="n9" id="optionsRadios2" class="minimal-red" value="option2">Tanah Pemerintah<br>
                    <input type="checkbox" name="n10" id="optionsRadios2" class="minimal-red" value="option2">Lainnya <input type="text" name="">
                  </td>
                </tr>
                  <tr>
                  <td>7</td>
                  <td>Apakah Proyek sudah memiliki Dokumen/Kajian?<br><input type="radio" name="d6" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d6" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                   Jika Ya, Dokumen apa saja: pilih minimal satu
                    <br>
                    <input type="checkbox" name="n11" id="optionsRadios2" class="minimal-red" value="option2">Master Plan<br>
                    <input type="checkbox" name="n12" id="optionsRadios2" class="minimal-red" value="option2">DED<br>
                    <input type="checkbox" name="n13" id="optionsRadios2" class="minimal-red" value="option2">Kajian Kelayakan / Feasibility Study<br>
                    <input type="checkbox" name="n14" id="optionsRadios2" class="minimal-red" value="option2">Lainnya <input type="text" name=""><br>
                    Lampirkan Halaman Sampul dan Daftar Isi:<br>(i) Master Plan<br>(ii) DED<br>(iii) Kajian Kelayakan / Feasibility Study<br>(iv) Lainnya …
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Apakah anggaran untuk penyusunan Studi telah dialokasikan?<br><input type="radio" name="d7" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d7" id="optionsRadios2" class="minimal-red" value="option2">Tidak</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Apakah Proyek akan dikerjasamakan dengan Investor?<br><input type="radio" name="d8" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d8" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                   Jika Ya, alasan: pilih minimal satu
                    <br>
                    <input type="checkbox" name="n15" id="optionsRadios2" class="minimal-red" value="option2">Keterbatasan Anggaran untuk Proyek<br>
                    <input type="checkbox" name="n16" id="optionsRadios2" class="minimal-red" value="option2">Peningkatan Pelayanan<br>
                    <input type="checkbox" name="n17" id="optionsRadios2" class="minimal-red" value="option2">Peningkatan Kapasitas SDM melalui alih pengetahuan dan teknologi<br>
                    <input type="checkbox" name="n18" id="optionsRadios2" class="minimal-red" value="option2">Lainnya <input type="text" name="">
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Apakah Proyek berpotensi menghasilkan pendapatan bagi Pemerintah?<br><input type="radio" name="d9" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d9" id="optionsRadios2" class="minimal-red" value="option2">Tidak</td>
                </tr>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Apakah Saudara mengetahui skema pendanaan alternatif yang tersedia di Indonesia selain APBN/APBD atau Rupiah Murni?<br><input type="radio" name="d10" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d10" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                   Jika Ya, sebutkan
                   <br>
                   <textarea cols="3" class="form-control"></textarea>
                </tr>
                 <tr>
                  <td>12</td>
                  <td>Apakah Saudara mengetahui bahwa Proyek Kerjasama Pemerintah dengan Badan Usaha (KPBU) dapat memperoleh Dukungan Pemerintah?<br><input type="radio" name="d11" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d11" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                   Jika Ya, dukungan Saudara yang ada ketahui: pilih minimal satu
                    <br>
                    <input type="checkbox" name="n19" id="optionsRadios2" class="minimal-red" value="option2">Subsidi Konstruksi (VGF)<br>
                    <input type="checkbox" name="n20" id="optionsRadios2" class="minimal-red" value="option2">Penjaminan Pemerintah<br>
                    <input type="checkbox" name="n21" id="optionsRadios2" class="minimal-red" value="option2">Fasilitas Penyiapan Proyek<br>
                    <input type="checkbox" name="n22" id="optionsRadios2" class="minimal-red" value="option2">Lainnya <input type="text" name="">
                  </td>
                </tr>
                 <tr>
                  <td>13</td>
                  <td>Adanya dukungan politik terhadap proyek (Kepala Pemerintahan dan/atau DPRD).<br><input type="radio" name="d12" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d12" id="optionsRadios2" class="minimal-red" value="option2">Tidak
                    <br><br>
                  Jika Ya, jelaskan bentuk dukungan nya seperti apa:
                   <br>
                   <textarea cols="3" class="form-control"></textarea>
                </tr>
                  <tr>
                  <td>14</td>
                  <td>Apakah sudah ada tim yang ditunjuk untuk menyiapkan Proyek?<br><input type="radio" name="d13" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d13" id="optionsRadios2" class="minimal-red" value="option2">Tidak</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Apakah Tim yang ditunjuk sudah pernah mengikuti pelatihan/seminar/capacity building/workshop/bimbingan teknis untuk skema KPBU?<br><input type="radio" name="d14" id="optionsRadios2" class="minimal-red" value="option2">YA&nbsp; <input type="radio" name="d14" id="optionsRadios2" class="minimal-red" value="option2">Tidak</td>
                </tr>
              <?php  ?>
              </tbody>
              </table>
            </div>
            </div>

                </table>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#modal_view">Submit</button>
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

<div class="modal fade" id="modal_view" tabindex="-1" role="dialog"  data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b class="modal-title" style="font-size: 25px;">Success</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="box-body">
              Sukses 
              <a href="#">LINK1, 
              <a href="#">LINK2      
         </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">CLOSE</button>
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

<script src="assets/dashboard/plugins/iCheck/icheck.min.js"></script>

<!-- Select2 -->
<script src="assets/dashboard/bower_components/select2/dist/js/select2.full.min.js"></script>

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



</script>
</body>
</html>
