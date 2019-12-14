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
            DATA PROYEK/ INSTRUKSI 2
            <small></small>
          </h1>
        </section>
        <!-- Main content -->
        <?php foreach($profil as $rowp){ ?>
        <form id="formvalidate" method="post"  action="Home/Insertfile/<?php echo $rowp->id_projek; ?>" enctype="multipart/form-data">
          <input type="hidden" name="next" value="draft" id="subaction">
          <section class="content">
            <div class="row" style="display: none;">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Profil Proyek</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    <div class="form-group">
                      <label>1. Penanggung Jawab Proyek Kerjasama : <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#anomor1" ></i></label>
                      <input type="hidden" name="id_projek" class="form-control" value="<?php echo $rowp->id_projek; ?>" readonly>
                      <input type="text" name="nama_pj" class="form-control" placeholder="Contoh: Menteri Perhubungan, Gubernur Jawa Barat, Direktur Utama PLN" value="<?php echo $rowp->nama_pj; ?>" readonly>
                    </div>
                    <script type="text/javascript">
                      function yesnoCheck() {
                          if (document.getElementById('pp').checked) {
                              document.getElementById('rjenis').style.display = 'block';
                               document.getElementById('rprovinsi').style.display = 'none';
                              document.getElementById('rbn').style.display = 'none';
                              document.getElementById('rbd').style.display = 'none';
                              document.getElementById('rln').style.display = 'none';
                              // Required
                              $("#jenis").attr('required', true);
                              $("#kementerian").attr('required', true);

                              $("#provinsi").attr('required', false);
                              $("#kotabu").attr('required', false);

                              $("#rbn").attr('required', false);
                              $("#rbd").attr('required', false);
                              $("#rln").attr('required', false);
                          }
                          else if (document.getElementById('pd').checked) {
                              document.getElementById('rjenis').style.display = 'none';
                              document.getElementById('rprovinsi').style.display = 'block';
                              document.getElementById('rbn').style.display = 'none';
                              document.getElementById('rbd').style.display = 'none';
                              document.getElementById('rln').style.display = 'none';
                              // Required
                              $("#jenis").attr('required', false);
                              $("#kementerian").attr('required', false);

                              $("#provinsi").attr('required', true);
                              $("#kotabu").attr('required', true);

                              $("#rbn").attr('required', false);
                              $("#rbd").attr('required', false);
                              $("#rln").attr('required', false);
                          }
                          else if (document.getElementById('bn').checked) {
                              document.getElementById('rjenis').style.display = 'none';
                              document.getElementById('rprovinsi').style.display = 'none';
                              document.getElementById('rbn').style.display = 'block';
                              document.getElementById('rbd').style.display = 'none';
                              document.getElementById('rln').style.display = 'none';
                              // Required
                              $("#jenis").attr('required', false);
                              $("#kementerian").attr('required', false);

                              $("#provinsi").attr('required', false);
                              $("#kotabu").attr('required', false);

                              $("#rbn").attr('required', true);
                              $("#rbd").attr('required', false);
                              $("#rln").attr('required', false);
                          }
                          else if (document.getElementById('bd').checked) {
                              document.getElementById('rprovinsi').style.display = 'none';
                              document.getElementById('rjenis').style.display = 'none';
                              document.getElementById('rbn').style.display = 'none';
                              document.getElementById('rbd').style.display = 'block';
                              document.getElementById('rln').style.display = 'none';
                              // Required
                              $("#jenis").attr('required', false);
                              $("#kementerian").attr('required', false);

                              $("#provinsi").attr('required', false);
                              $("#kotabu").attr('required', false);

                              $("#rbn").attr('required', false);
                              $("#rbd").attr('required', true);
                              $("#rln").attr('required', false);
                          }
                          else if (document.getElementById('ln').checked) {
                              document.getElementById('rprovinsi').style.display = 'none';
                              document.getElementById('rjenis').style.display = 'none';
                              document.getElementById('rbn').style.display = 'none';
                              document.getElementById('rbd').style.display = 'none';
                              document.getElementById('rln').style.display = 'block';
                              // Required
                              $("#jenis").attr('required', false);
                              $("#kementerian").attr('required', false);

                              $("#provinsi").attr('required', false);
                              $("#kotabu").attr('required', false);

                              $("#rbn").attr('required', false);
                              $("#rbd").attr('required', false);
                              $("#rln").attr('required', true);
                          }else{
                              document.getElementById('rjenis').style.display = 'none';
                              document.getElementById('rprovinsi').style.display = 'none';
                              document.getElementById('bn').style.display = 'none';
                              document.getElementById('bd').style.display = 'none';
                              document.getElementById('ln').style.display = 'none';
                              // Required
                              $("#jenis").attr('required', false);
                              $("#kementerian").attr('required', false);

                              $("#provinsi").attr('required', false);
                              $("#kotabu").attr('required', false);

                              $("#rbn").attr('required', false);
                              $("#rbd").attr('required', false);
                              $("#rln").attr('required', false);
                          }
                      
                      }

                    </script>
                      <?php 
                        if($rowp->kategori == 1){
                          $ck1 = 'checked';
                          $ck2 = '';
                          $ck3 = '';
                          $ck4 = '';
                          $ck5 = '';
                          $st1 = 'display: block;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 2){
                          $ck1 = '';
                          $ck2 = 'checked';
                          $ck3 = '';
                          $ck4 = '';
                          $ck5 = '';
                          $st1 = 'display: none;';
                          $st2 = 'display: block;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 3){
                          $ck1 = '';
                          $ck2 = '';
                          $ck3 = 'checked';
                          $ck4 = '';
                          $ck5 = '';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: block;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 4){
                          $ck1 = '';
                          $ck2 = '';
                          $ck3 = '';
                          $ck4 = 'checked';
                          $ck5 = '';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: block;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 5){
                          $ck1 = '';
                          $ck2 = '';
                          $ck3 = '';
                          $ck4 = '';
                          $ck5 = 'checked';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: block;';
                        }else{
                          $ck1 = '';
                          $ck2 = '';
                          $ck3 = '';
                          $ck4 = '';
                          $ck5 = '';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }
                        
                        ?>
                      <div class="form-group">
                        <label>2. Kategori Penanggung Jawab Proyek Kerjasama :</label>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt" value="1" id="pp" <?php echo $ck1; ?> onclick="yesnoCheck()" disabled>
                          Pemerintah Pusat
                          </label>
                        </div>
                        <div style="<?php echo $st1; ?>" id="rjenis">
                          <div class="radio">
                            <label></label>
                            <select class="select2 form-control" name="jenis" id="jenis" style="width: 150px;" disabled>
                              <?php if($rowp->jenis == 'Kementerian'){ ?>
                              <option value="Kementerian" selected="selected">Kementerian</option>
                              <option value="Lembaga">Lembaga</option>
                              <?php }else{ ?>
                              <option value="Kementerian">Kementerian</option>
                              <option value="Lembaga" selected="selected">Lembaga</option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="radio" id="kemen">
                            <label>Kementrian :</label>
                            <select class="select2 form-control" name="kementerian" id="kementerian" style="width: 100%;" disabled>
                              <option value="">--Pilih--</option>
                              <?php foreach($kementerian as $row) { 
                                if($row['id_kementerian'] == $rowp->n_kementerian){
                                ?>
                              <option value="<?=$row['id_kementerian']?>" selected><?=$row['nama_kementerian']?></option>
                              <?php }else{ ?>
                              <option value="<?=$row['id_kementerian']?>"><?=$row['nama_kementerian']?></option>
                              <?php }} ?>
                            </select>
                          </div>
                          <div class="radio" id="lemba">
                            <label>Lembaga :</label>
                            <select class="select2 form-control" name="lembaga" id="lpnk" style="width: 100%;" disabled>
                              <option value="">--Pilih--</option>
                              <?php foreach($lpnk as $row) { 
                                if($row['id_lpnk'] == $rowp->n_lembaga){
                                ?>
                              <option value="<?=$row['id_lpnk']?>" selected><?=$row['nama_lpnk']?></option>
                              <?php }else{ ?>
                              <option value="<?=$row['id_lpnk']?>"><?=$row['nama_lpnk']?></option>
                              <?php }} ?>
                            </select>
                          </div>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt"  value="2" id="pd" <?php echo $ck2; ?> onclick="yesnoCheck();" disabled>
                          Pemerintah Daerah
                          </label>
                        </div>
                        <div style="<?php echo $st2; ?>" id="rprovinsi">
                          <div class="radio">
                            <label>Provinsi :</label>
                            <select class="select2 form-control" style="width: 100%;" name="provinsi" id="provinsi" disabled>
                              <option value="">--Pilih--</option>
                              <?php foreach($provinsi as $row) { 
                                if($row['id_provinsi'] == $rowp->n_provinsi){
                                ?>
                              <option value="<?=$row['id_provinsi']?>" selected><?=$row['nama_provinsi']?></option>
                              <?php }else{ ?>
                              <option value="<?=$row['id_provinsi']?>"><?=$row['nama_provinsi']?></option>
                              <?php }} ?>
                            </select>
                          </div>
                          <div class="radio" id="rkotabu">
                            <label>Kota/ Kabupaten :</label>
                            <input type="hidden" name="n_kotakabu" id="n_kotakabu" value="<?php echo $rowp->n_kotakabu ?>">
                            <select class="select2 form-control" name="kotabu" id="kotabu"  style="width: 100%;" disabled>
                              <option value="">--Pilih--</option>
                            </select>
                          </div>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt" value="3" id="bn" <?php echo $ck3; ?> onclick="yesnoCheck();" disabled>
                          BUMN <input type="text" value="<?php echo $rowp->bumn_text; ?>" style="<?php echo $st3; ?>" class="form-control" name="bumn" id="rbn">
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt"  value="4" id="bd" <?php echo $ck4; ?> onclick="yesnoCheck();" disabled>
                          BUMD <input type="text"  value="<?php echo $rowp->bumd_text; ?>" style="<?php echo $st4; ?>"  class="form-control" name="bumd" id="rbd">
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt" value="5" id="ln" <?php echo $ck5; ?> onclick="yesnoCheck();" disabled>
                          Lainnya <input style="<?php echo $st5; ?>" type="text"  value="<?php echo $rowp->lainnya_text; ?>" class="form-control" name="lainnya" id="rln">
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>3. Sektor Infrastruktur&nbsp;:&nbsp; </label><i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#anomor3"></i>
                        <select class="form-control select2" name="sektor" id="sektor" style="width: 100%" disabled>
                           <option value="">--Pilih--</option>
                          <?php foreach($sektor as $row) { 
                            if($row['id_sektor'] == $rowp->sektor){
                            ?>
                          <option value="<?=$row['id_sektor']?>" selected><?=$row['nama_sektor']?></option>
                          <?php }
                            else{
                            ?>
                          <option value="<?=$row['id_sektor']?>"><?=$row['nama_sektor']?></option>
                          <?php 
                            }} 
                            ?>
                        </select>
                      </div>
                      <div class="form-group" id="gsubsektor">
                      <label>3.1. Sub Sektor Infrastruktur&nbsp;:&nbsp; </label>
                      <input type="hidden" name="id_subsektor" id="id_subsektor" value="<?php echo $rowp->subsektor; ?>">
                      <input type="hidden" name="subsub" id="subsub" value="<?php echo $rowp->nama_subsektor; ?>">
                      <select class="form-control select2" name="subsektor"  id="subsektor" style="width: 100%" disabled>
                            <option value="">--Pilih--</option>
                      </select>
                    </div>

                    <div class="form-group" id="gsubsektorln">
                       <input type="text" class="form-control" placeholder="Lainnya" name="subsektorln" id="subsektorln" value="<?php echo $rowp->nama_lainnya; ?>" readonly>
                    </div>
                      <div class="form-group">
                        <label>4. Nama Proyek :</label>
                        <input type="text" class="form-control" name="nama_proyek" value="<?php echo $rowp->nama_projek; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>5. Lokasi Proyek :</label>
                        <input type="text" class="form-control" name="lokasi" value="<?php echo $rowp->lokasi; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>6. Estimasi Nilai Proyek (dalam Rupiah) :</label>
                        <input type="text" class="form-control" name="estimasi" value="<?php echo $rowp->estimasi; ?>" id = "rupiah" readonly>
                      </div>
                      <hr>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4"> 
                           <label>7. Informasi PIC Proyek : <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#anomor7"></i></label>
                          <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $rowp->nama; ?>" readonly>
                        </div>
                        <div class="col-md-4"> 
                           <label><font color="#FFF">-</font></label>
                          <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?php echo $rowp->jabatan;  ?>" readonly>
                        </div>
                        <div class="col-md-4"> 
                          <label><font color="#FFF">-</font></label>
                          <input type="text" class="form-control" name="telepon" onkeypress="return wajibAngka(event)" placeholder="telepon" value="<?php echo $rowp->telepon; ?>" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box-body -->
              </div>
            </div>

       <?php } ?>
              <script type="text/javascript">
                    function wajibAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                   }
            </script>
            <?php
              $id_ass = array(); 
              $nomor = array();
              $pertanyaan = array();
              $penjelasan = array();
              $respon = array();
              $bobot = array();
              foreach ($assesment as $result=>$v):
                
                array_push($id_ass, $v->id_ass);
                array_push($nomor, $v->nomor_urut);
                array_push($pertanyaan, $v->intruksi_upload);
                array_push($penjelasan, $v->informasi_upload);
                array_push($respon, $v->respon);
                array_push($bobot, $v->bobot);
              endforeach;

             //profil projek
              $id_projek = array();
              $status = array();
              foreach($profil as $rowp=>$x):
                  array_push($id_projek, $x->id_projek);
                  array_push($status, $x->status);

               endforeach;
              //skor

              $idass = array(); 
              $Y = array();
              $N = array();
              $pilihan = array();
              $upload = array();
              $upload1 = array();
              $upload2 = array();
              $upload3 = array();
              $upload4 = array();
              $upload5 = array();
              $upload6 = array();
              foreach ($skor as $key => $v):
                array_push($idass, $v->idass);
                array_push($Y, $v->Y);
                array_push($N, $v->N);
                array_push($pilihan, $v->pilihan);
                array_push($upload, $v->upload);
                array_push($upload1, $v->upload1);
                array_push($upload2, $v->upload2);
                array_push($upload3, $v->upload3);
                array_push($upload4, $v->upload4);
                array_push($upload5, $v->upload5);
                array_push($upload6, $v->upload6); 
              endforeach;
              
              ?>
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                 <div class="box-header with-border">
                    <h3 class="box-title">Mohon Saudara melampirkan bukti atau dokumen pendukung yang relevan dengan pertanyaan yang telah dijawab sebelumnya.</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" id="form2">

                  <table>
                      <tr>
                          <th>Instruksi</th>                        
                      </tr>
                      <tr>
                        <td>
                           <p>* File upload maksimal < 1 MB</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                           <P>* Ekstensi untuk pengiriman yang disediakan .jpg, .jpeg, .png, .gif, .rar, .zip, .doc, .docx, .xls, .xlsx, .pdf, .ppt, .pptx</P>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>* Jika lebih dari satu file dalam satu nomor lakukan kompresi file dengan zip atau rar</p>
                        </td>
                      </tr>
                    </table>
                    <br>
                    <a href="Home/formview/<?php echo $id_projek[0] ?>">Lihat Profil Proyek</a>
                    <br><br>
                    <table class="table table-bordered table-striped">
                      <th>No</th>
                      <th>Intruksi Upload Dokumen</th>
                      <th>Attachment</th>
                      <tbody>
                      <?php if($id_ass[0] != '' || $id_ass[0] != NULL){ ?>
                        <tr>
                          <td>1</td>
                          <td><?php echo $penjelasan[0]; ?>&nbsp;<?php if($penjelasan[0] == NULL || $penjelasan[0] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor0"></i><?php } ?>
                            <br>
                                       <input type="hidden" name="p0"  value="Y" class="pi0" <?php echo $Y[2]; ?>>
                                       <input type="hidden" name="p0"  value="N" class="pi0" <?php echo $N[2]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[2]; ?>" class="y0">
                                       <input type="hidden" name="N[]" value="<?php echo $N[2]; ?>" class="n0">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[0]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[0]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[0]; ?>" class = 'bb0'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[0]; ?>" class = 'rs0'>
                                       <div class="dp0" style="display: none;">
                                       <?php foreach ($noassu0 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a0' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b0' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control  a0' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s0' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                         <td>

                          <?php if ($pilihan[2] == 'Y'){ 
                              if($status[0] < 3){
                            ?>

                            <input type="file" name="up1" class="btn-sm" id="0t0" onchange="document.getElementsByClassName('f1')[0].value = ''; $('#next').attr('disabled',true);"> 
                            <input type="file" name="up2" class="btn-sm" id="0t1" onchange="document.getElementsByClassName('f1')[1].value = ''; $('#next').attr('disabled',true);"> 
                            <input type="file" name="up3" class="btn-sm" id="0t2" onchange="document.getElementsByClassName('f1')[2].value = ''; $('#next').attr('disabled',true);">

                            <input type="hidden" name="k1" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no1a" />
                            <input type="hidden" name="k2" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no1b" />
                            <input type="hidden" name="k3" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no1c" />
                          <?php }}else{
                             $upload[2] = "zonk";
                             $upload1[2] = "zonk";
                             $upload2[2] = "zonk";
                          }?>
                           
                            <input type="hidden" name="g1" value="<?php echo $upload[2]; ?>">
                            <input type="hidden" name="g2" value="<?php echo $upload1[2]; ?>">
                            <input type="hidden" name="g3" value="<?php echo $upload2[2]; ?>">

                            <input type="hidden" name="f1" class="f1 0f0" value="<?php echo $upload[2]; ?>">
                            <input type="hidden" name="f2" class="f1 0f1" value="<?php echo $upload1[2]; ?>">
                            <input type="hidden" name="f3" class="f1 0f2" value="<?php echo $upload2[2]; ?>">

                            <?php 
                              $upload[2] == '' ? $h = 'hidden' : $h = '';
                              $upload1[2] == '' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[2] == '' ? $h2 = 'hidden' : $h2 = '';

                              $upload[2] == 'zonk' ? $h = 'hidden' : $h = '';
                              $upload1[2] == 'zonk' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[2] == 'zonk' ? $h2 = 'hidden' : $h2 = '';
                            ?>
                            
                            <?php if ($pilihan[2] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[2]; ?>"> <?php echo $upload[2]; ?></a></span> 
                                <span <?=$h1?> ><a href="<?php echo 'upload/'.$upload1[2]; ?>"> <?php echo $upload1[2]; ?></a></span>
                                <span <?=$h2?> ><a href="<?php echo 'upload/'.$upload2[2]; ?>"> <?php echo $upload2[2]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment1"><?php echo $upload[2]; ?></span> 
                                  <span class="attachment1"><?php echo $upload1[2]; ?></span>
                                  <span class="attachment1"><?php echo $upload2[2]; ?></span></div>
                                <button type="button" class="btn btn-default btn-sm" onclick="zip1()">Download FIle No.1</button>
                              <?php }} ?>
                          </td>
                        </tr>
                        <?php } ?>
                        <?php if($id_ass[1] != '' || $id_ass[1] != NULL){ ?>
                        <tr>
                          <td>2</td>
                          <td><?php echo $pertanyaan[1]; ?>&nbsp;<?php if($penjelasan[1] == NULL || $penjelasan[1] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor1"></i><?php } ?>
                                <br>
                                       <input type="hidden" name="p1"  value="Y" class="pi1" <?php echo $Y[4]; ?>>
                                       <input type="hidden" name="p1"  value="N" class="pi1" <?php echo $N[4]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[4]; ?>" class="y1">
                                       <input type="hidden" name="N[]" value="<?php echo $N[4]; ?>" class="n1">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[1]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[1]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[1]; ?>" class = 'bb1'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[1]; ?>" class = 'rs1'>
                                       <div class="dp1" style="display: none;">
                                       <?php foreach ($noassu1 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a1' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b1' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a1' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s1' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                          <?php if ($pilihan[4] == 'Y'){ 
                             if($status[0] < 3){?>
                            <input type="file" name="up4" class="btn-sm" id="1t0" onchange="document.getElementsByClassName('f1')[3].value = ''; $('#next').attr('disabled',true);"> 
                            <input type="file" name="up5" class="btn-sm" id="1t1" onchange="document.getElementsByClassName('f1')[4].value = ''; $('#next').attr('disabled',true);"> 
                            <input type="file" name="up6" class="btn-sm" id="1t2" onchange="document.getElementsByClassName('f1')[5].value = ''; $('#next').attr('disabled',true);">
                          <?php }}else{
                            $upload[4] = "zonk";
                            $upload1[4] = "zonk";
                            $upload2[4] = "zonk";
                           }?>
                            <input type="hidden" name="k4" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no2a" />
                            <input type="hidden" name="k5" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no2b" />
                            <input type="hidden" name="k6" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no2c" />

                            <input type="hidden" name="g4" value="<?php echo $upload[4]; ?>">
                            <input type="hidden" name="g5" value="<?php echo $upload1[4]; ?>">
                            <input type="hidden" name="g6" value="<?php echo $upload2[4]; ?>">

                            <input type="hidden" name="f4" class="f1 1f0" value="<?php echo $upload[4]; ?>">
                            <input type="hidden" name="f5" class="f1 1f1" value="<?php echo $upload1[4]; ?>">
                            <input type="hidden" name="f6" class="f1 1f2" value="<?php echo $upload2[4]; ?>"> 

                            <?php 
                              $upload[4] == '' ? $h = 'hidden' : $h = '';
                              $upload1[4] == '' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[4] == '' ? $h2 = 'hidden' : $h2 = '';

                              $upload[4] == 'zonk' ? $h = 'hidden' : $h = '';
                              $upload1[4] == 'zonk' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[4] == 'zonk' ? $h2 = 'hidden' : $h2 = '';
                            ?>
                             
                             <?php if ($pilihan[4] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[4]; ?>"><?php echo $upload[4]; ?></a></span> 
                                <span <?=$h1?> ><a href="<?php echo 'upload/'.$upload1[4]; ?>"><?php echo $upload1[4]; ?></a></span>
                                <span <?=$h2?> ><a href="<?php echo 'upload/'.$upload2[4]; ?>"><?php echo $upload2[4]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment2"><?php echo $upload[4]; ?></span>
                                  <span class="attachment2"><?php echo $upload1[4]; ?></span>
                                  <span class="attachment2"><?php echo $upload2[4]; ?></span></div>
                                <button type="button" class="btn btn-default btn-sm" onclick="zip2()">Download FIle No.2</button>
                              <?php }} ?>

                          </td>
                        </tr>
                        <?php } ?>
                        <?php if($id_ass[2] != '' || $id_ass[2] != NULL){ ?>
                        <tr>
                          <td>3</td>
                          <td><?php echo $pertanyaan[2]; ?>&nbsp;<?php if($penjelasan[2] == NULL || $penjelasan[2] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor2"></i><?php } ?>
                          <br>
                                       <input type="hidden" name="p2"  value="Y" class="pi2" <?php echo $Y[5]; ?>>
                                       <input type="hidden" name="p2"  value="N" class="pi2" <?php echo $N[5]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[5]; ?>" class="y2">
                                       <input type="hidden" name="N[]" value="<?php echo $N[5]; ?>" class="n2">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[2]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[2]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[2]; ?>" class = 'bb2'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[2]; ?>" class = 'rs2'>
                                       <div class="dp2" style="display: none;">
                                           <?php foreach ($noassu2 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a2' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b2' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a2' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s2' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                            <?php if ($pilihan[5] == 'Y'){ 
                               if($status[0] < 3){?>                          
                              <input type="file" name="up7" class="btn-sm" id="2t0" onchange="document.getElementsByClassName('f1')[6].value = ''; $('#next').attr('disabled',true);">
                            <?php }}else{
                              $upload[5] = "zonk";
                            }?>
                            <input type="hidden" name="k7" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no3a" />
                            <input type="hidden" name="g7" value="<?php echo $upload[5]; ?>">
                            <input type="hidden" name="f7" class="f1 2f0" value="<?php echo $upload[5]; ?>">

                           <?php 
                              $upload[5] == '' ? $h = 'hidden' : $h = '';
                              $upload[5] == 'zonk' ? $h = 'hidden' : $h = '';
                            ?>

                             <?php if ($pilihan[5] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[5]; ?>"> <?php echo $upload[5]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment3"><?php echo $upload[5]; ?></span>
                                </div>
                                  <button type="button" class="btn btn-default btn-sm" onclick="zip3()">Download FIle No.3</button>
                              <?php }} ?>
                          </td>
                       </tr>
                       <?php } ?>
                        <?php if($id_ass[3] != '' || $id_ass[3] != NULL){ ?>
                       <tr>
                          <td>4</td>
                          <td><?php echo $pertanyaan[3]; ?>&nbsp;<?php if($penjelasan[3] == NULL || $penjelasan[3] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor3"></i><?php } ?>
                            <br>
                                       <input type="hidden" name="p3"  value="Y" class="pi3" <?php echo $Y[6]; ?>>
                                       <input type="hidden" name="p3"  value="N" class="pi3" <?php echo $N[6]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[6]; ?>" class="y3">
                                       <input type="hidden" name="N[]" value="<?php echo $N[6]; ?>" class="n3">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[3]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[3]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[3]; ?>" class = 'bb3'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[3]; ?>" class = 'rs3'>
                                       <div class="dp3" style="display: none;" >
                                       <?php foreach ($noassu3 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a3' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b3' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a3' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s3' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                    </div>
                          </td>
                          <td>
                            <?php if ($pilihan[6] == 'Y'){ 
                               if($status[0] < 3){?>
                            <input type="file" name="up8" class="btn-sm" id="3t0" onchange="document.getElementsByClassName('f1')[7].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up9" class="btn-sm" id="3t1" onchange="document.getElementsByClassName('f1')[8].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up10" class="btn-sm" id="3t2" onchange="document.getElementsByClassName('f1')[9].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up11" class="btn-sm" id="3t3" onchange="document.getElementsByClassName('f1')[10].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up12" class="btn-sm" id="3t4" onchange="document.getElementsByClassName('f1')[11].value = ''; $('#next').attr('disabled',true);">
                            <?php }}else{
                              $upload[6] = "zonk";
                              $upload1[6] = "zonk";
                              $upload2[6] = "zonk";
                              $upload3[6] = "zonk";
                              $upload4[6] = "zonk";
                            } ?>

                            <input type="hidden" name="k8" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no4a" />
                            <input type="hidden" name="k9" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no4b" />
                            <input type="hidden" name="k10" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_n4c" />
                            <input type="hidden" name="k11" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_n4d" />
                            <input type="hidden" name="k12" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_n4e" /> 

                            <input type="hidden" name="g8" value="<?php echo $upload[6]; ?>">
                            <input type="hidden" name="g9" value="<?php echo $upload1[6]; ?>">
                            <input type="hidden" name="g10" value="<?php echo $upload2[6]; ?>">
                            <input type="hidden" name="g11" value="<?php echo $upload3[6]; ?>">
                            <input type="hidden" name="g12" value="<?php echo $upload4[6]; ?>">

                            <input type="hidden" name="f8" class="f1 3f0" value="<?php echo $upload[6]; ?>">
                            <input type="hidden" name="f9" class="f1 3f1" value="<?php echo $upload1[6]; ?>">
                            <input type="hidden" name="f10" class="f1 3f2" value="<?php echo $upload2[6]; ?>">
                            <input type="hidden" name="f11" class="f1 3f3" value="<?php echo $upload3[6]; ?>">
                            <input type="hidden" name="f12" class="f1 3f4" value="<?php echo $upload4[6]; ?>">

                            <?php 
                              $upload[6] == '' ? $h = 'hidden' : $h = '';
                              $upload1[6] == '' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[6] == '' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[6] == '' ? $h3 = 'hidden' : $h3 = '';
                              $upload4[6] == '' ? $h4 = 'hidden' : $h4 = '';

                              $upload[6] == 'zonk' ? $h = 'hidden' : $h = '';
                              $upload1[6] == 'zonk' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[6] == 'zonk' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[6] == 'zonk' ? $h3 = 'hidden' : $h3 = '';
                              $upload4[6] == 'zonk' ? $h4 = 'hidden' : $h4 = '';
                            ?>
                        
                             <?php if ($pilihan[6] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                    <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[6]; ?>"> <?php echo $upload[6]; ?></a></span>
                                    <span <?=$h1?> ><a href="<?php echo 'upload/'.$upload1[6]; ?>"> <?php echo $upload1[6]; ?></a></span>
                                    <span <?=$h2?> ><a href="<?php echo 'upload/'.$upload2[6]; ?>"> <?php echo $upload2[6]; ?></a></span>
                                    <span <?=$h3?> ><a href="<?php echo 'upload/'.$upload3[6]; ?>"> <?php echo $upload3[6]; ?></a></span>
                                    <span <?=$h4?> ><a href="<?php echo 'upload/'.$upload4[6]; ?>"> <?php echo $upload4[6]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                    <div style="display: none;"> 
                                      <span class="attachment4"><?php echo $upload[6]; ?></span>
                                      <span class="attachment4"><?php echo $upload1[6]; ?></span>
                                      <span class="attachment4"><?php echo $upload2[6]; ?></span>
                                      <span class="attachment4"><?php echo $upload3[6]; ?></span>
                                      <span class="attachment4"><?php echo $upload4[6]; ?></span></div>
                                <button type="button" class="btn btn-default btn-sm" onclick="zip4()">Download FIle No.4</button>
                              <?php }} ?>     
                          </td>
                        </tr>
                        <?php } ?>
                        <?php if($id_ass[4] != '' || $id_ass[4] != NULL){ ?>
                        <tr>
                          <td>5</td>
                          <td><?php echo $pertanyaan[4]; ?>&nbsp;<?php if($penjelasan[4] == NULL || $penjelasan[4] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor4"></i><?php } ?>
                                <br>
                                       <input type="hidden" name="p4"  value="Y" class="pi4" <?php echo $Y[7]; ?>>
                                       <input type="hidden" name="p4"  value="N" class="pi4" <?php echo $N[7]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[7]; ?>" class="y4">
                                       <input type="hidden" name="N[]" value="<?php echo $N[7]; ?>" class="n4">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[4]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[4]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[4]; ?>" class = 'bb4'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[4]; ?>" class = 'rs4'>
                                       <div class="dp4" style="display: none;">
                                       <?php foreach ($noassu4 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
        
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a4' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b4' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a4' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s4' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                            <?php if ($pilihan[7] == 'Y'){ 
                               if($status[0] < 3){?>
                            <input type="file" name="up13" class="btn-sm" id="4t0" onchange="document.getElementsByClassName('f1')[12].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up14" class="btn-sm" id="4t1" onchange="document.getElementsByClassName('f1')[13].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up15" class="btn-sm" id="4t2" onchange="document.getElementsByClassName('f1')[14].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up16" class="btn-sm" id="4t3" onchange="document.getElementsByClassName('f1')[15].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up17" class="btn-sm" id="4t4" onchange="document.getElementsByClassName('f1')[16].value = ''; $('#next').attr('disabled',true);">
                          <?php }}else{
                             $upload[7] = "zonk";
                             $upload1[7] = "zonk";
                             $upload2[7] = "zonk";
                             $upload3[7] = "zonk";
                             $upload4[7] = "zonk";
                          } ?>

                            <input type="hidden" name="k13" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5a" />
                            <input type="hidden" name="k14" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5b" />
                            <input type="hidden" name="k15" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5c" />
                            <input type="hidden" name="k16" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5d" />
                            <input type="hidden" name="k17" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5e" />

                            <input type="hidden" name="g13" value="<?php echo $upload[7]; ?>">
                            <input type="hidden" name="g14" value="<?php echo $upload1[7]; ?>">
                            <input type="hidden" name="g15" value="<?php echo $upload2[7]; ?>">
                            <input type="hidden" name="g16" value="<?php echo $upload3[7]; ?>">
                            <input type="hidden" name="g17" value="<?php echo $upload4[7]; ?>">

                            <input type="hidden" name="f13" class="f1 4f0" value="<?php echo $upload[7]; ?>">
                            <input type="hidden" name="f14" class="f1 4f1" value="<?php echo $upload1[7]; ?>">
                            <input type="hidden" name="f15" class="f1 4f2" value="<?php echo $upload2[7]; ?>">
                            <input type="hidden" name="f16" class="f1 4f3" value="<?php echo $upload3[7]; ?>">
                            <input type="hidden" name="f17" class="f1 4f4" value="<?php echo $upload4[7]; ?>">
                            <?php 
                              $upload[7] == '' ? $h = 'hidden' : $h = '';
                              $upload1[7] == '' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[7] == '' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[7] == '' ? $h3 = 'hidden' : $h3 = '';
                              $upload4[7] == '' ? $h4 = 'hidden' : $h4 = '';

                              $upload[7] == 'zonk' ? $h = 'hidden' : $h = '';
                              $upload1[7] == 'zonk' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[7] == 'zonk' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[7] == 'zonk' ? $h3 = 'hidden' : $h3 = '';
                              $upload4[7] == 'zonk' ? $h4 = 'hidden' : $h4 = '';
                            ?>
                             
                            <?php if ($pilihan[7] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                    <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[7]; ?>"> <?php echo $upload[7]; ?></a></span>
                                    <span <?=$h1?> ><a href="<?php echo 'upload/'.$upload1[7]; ?>"> <?php echo $upload1[7]; ?></a></span>
                                    <span <?=$h2?> ><a href="<?php echo 'upload/'.$upload2[7]; ?>"> <?php echo $upload2[7]; ?></a></span>
                                    <span <?=$h3?> ><a href="<?php echo 'upload/'.$upload3[7]; ?>"> <?php echo $upload3[7]; ?></a></span>
                                    <span <?=$h4?> ><a href="<?php echo 'upload/'.$upload4[7]; ?>"> <?php echo $upload4[7]; ?></a></span> 
                             <?php }else if($status[0] > 2){ ?>
                                    <div style="display: none;">
                                      <span class="attachment5"><?php echo $upload[7]; ?></span>
                                      <span class="attachment5"><?php echo $upload1[7]; ?></span>
                                      <span class="attachment5"><?php echo $upload2[7]; ?></span>
                                      <span class="attachment5"><?php echo $upload3[7]; ?></span>
                                      <span class="attachment5"><?php echo $upload4[7]; ?></span>
                                    </div>
                                <button type="button" class="btn btn-default btn-sm" onclick="zip5()">Download FIle No.5</button>
                              <?php }} ?>      
                          </td>
                        </tr>
                        <?php } ?>
                        <?php if($id_ass[5] != '' || $id_ass[5] != NULL){ ?>
                        <tr>
                          <td>6</td>
                          <td><?php echo $pertanyaan[5]; ?>&nbsp;<?php if($penjelasan[5] == NULL || $penjelasan[5] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor5"></i><?php } ?>
                          <br>
                                       <input type="hidden" name="p5"  value="Y" class="pi5" <?php echo $Y[8]; ?>>
                                       <input type="hidden" name="p5"  value="N" class="pi5" <?php echo $N[8]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[8]; ?>" class="y5">
                                       <input type="hidden" name="N[]" value="<?php echo $N[8]; ?>" class="n5">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[5]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[5]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[5]; ?>" class = 'bb5'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[5]; ?>" class = 'rs5'>
                                       <div class="dp5" style="display: none;">
                                           <?php foreach ($noassu5 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){

                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a5' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b5' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a5' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s5' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                          <?php if ($pilihan[8] == 'Y'){ 
                             if($status[0] < 3){?>                            
                            <input type="file" name="up18" class="btn-sm" id="5t0" onchange="document.getElementsByClassName('f1')[17].value = ''; $('#next').attr('disabled',true); ">
                          <?php }}else{
                             $upload[8] = "zonk";
                          } ?>

                            <input type="hidden" name="k18" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no6a" />
                            <input type="hidden" name="g18" value="<?php echo $upload[8]; ?>">
                            <input type="hidden" name="f18" class="f1 5f0" value="<?php echo $upload[8]; ?>">
                            <?php 
                              $upload[8] == '' ? $h = 'hidden' : $h = '';

                              $upload[8] == 'zonk' ? $h = 'hidden' : $h = '';
                            ?>
                             <?php if ($pilihan[8] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[8]; ?>"> <?php echo $upload[8]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment6"> <?php echo $upload[8]; ?></span></div>
                                 <a href="<?php echo 'upload/'.$upload[8]; ?>"><button type="button" class="btn btn-default btn-sm">Download FIle No.6</button></a>
                             <?php }} ?>
                          </td>
                       </tr>
                       <?php } ?>
                        <?php if($id_ass[6] != '' || $id_ass[6] != NULL){ ?>
                       <tr>
                          <td>7</td>
                          <td><?php echo $pertanyaan[6]; ?>&nbsp;<?php if($penjelasan[6] == NULL || $penjelasan[6] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor6"></i><?php } ?>
                          <br>
                                       <input type="hidden" name="p6"  value="Y" class="pi6" <?php echo $Y[12]; ?>>
                                       <input type="hidden" name="p6"  value="N" class="pi6" <?php echo $N[12]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[12]; ?>" class="y6">
                                       <input type="hidden" name="N[]" value="<?php echo $N[12]; ?>" class="n6">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[6]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[6]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[6]; ?>" class = 'bb6'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[6]; ?>" class = 'rs6'>
                                       <div class="dp6" style="display: none;">
                                           <?php foreach ($noassu6 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a6' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b6' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a6' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s6' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                            <?php if ($pilihan[12] == 'Y'){  
                              if($status[0] < 3){?>
                            <input type="file" name="up19" class="btn-sm" id="6t0" onchange="document.getElementsByClassName('f1')[18].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up20" class="btn-sm" id="6t1" onchange="document.getElementsByClassName('f1')[19].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up21" class="btn-sm" id="6t2" onchange="document.getElementsByClassName('f1')[20].value = ''; $('#next').attr('disabled',true);">
                            <input type="file" name="up22" class="btn-sm" id="6t3" onchange="document.getElementsByClassName('f1')[21].value = ''; $('#next').attr('disabled',true);">
                           <?php }}else{
                              $upload[12] = "zonk";
                              $upload1[12] = "zonk";
                              $upload2[12] = "zonk";
                              $upload3[12] = "zonk";
                           } ?>

                            <input type="hidden" name="k19" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no7a" />
                            <input type="hidden" name="k20" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no7b" />
                            <input type="hidden" name="k21" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no7c" />
                            <input type="hidden" name="k22" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no7d" />

                            <input type="hidden" name="g19" value="<?php echo $upload[12]; ?>">
                            <input type="hidden" name="g20" value="<?php echo $upload1[12]; ?>">
                            <input type="hidden" name="g21" value="<?php echo $upload2[12]; ?>">
                            <input type="hidden" name="g22" value="<?php echo $upload3[12]; ?>">

                            <input type="hidden" name="f19" class="f1 6f0" value="<?php echo $upload[12]; ?>">
                            <input type="hidden" name="f20" class="f1 6f1" value="<?php echo $upload1[12]; ?>">
                            <input type="hidden" name="f21" class="f1 6f2" value="<?php echo $upload2[12]; ?>">
                            <input type="hidden" name="f22" class="f1 6f3" value="<?php echo $upload3[12]; ?>">

                            <?php 
                              $upload[12] == '' ? $h = 'hidden' : $h = '';
                              $upload1[12] == '' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[12] == '' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[12] == '' ? $h3 = 'hidden' : $h3 = '';

                              $upload[12] == 'zonk' ? $h = 'hidden' : $h = '';
                              $upload1[12] == 'zonk' ? $h1 = 'hidden' : $h1 = '';
                              $upload2[12] == 'zonk' ? $h2 = 'hidden' : $h2 = '';
                              $upload3[12] == 'zonk' ? $h3 = 'hidden' : $h3 = '';
                            ?>
                             
                           <?php if ($pilihan[12] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                    <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[12]; ?>"> <?php echo $upload[12]; ?></a></span>
                                    <span <?=$h1?> ><a href="<?php echo 'upload/'.$upload1[12]; ?>"> <?php echo $upload1[12]; ?></a></span>
                                    <span <?=$h2?> ><a href="<?php echo 'upload/'.$upload2[12]; ?>"> <?php echo $upload2[12]; ?></a></span>
                                    <span <?=$h3?> ><a href="<?php echo 'upload/'.$upload3[12]; ?>"> <?php echo $upload3[12]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                    <div style="display: none;">
                                      <span class="attachment7"><?php echo $upload[12]; ?></span>
                                      <span class="attachment7"><?php echo $upload1[12]; ?></span>
                                      <span class="attachment7"><?php echo $upload2[12]; ?></span>
                                      <span class="attachment7"><?php echo $upload3[12]; ?></span>
                                    </div>
                                <button type="button" class="btn btn-default btn-sm" onclick="zip7()">Download FIle No.7</button>
                              <?php }} ?>  
                          </td>
                       </tr>
                       <?php } ?>
                        <?php if($id_ass[7] != '' || $id_ass[7] != NULL){ ?>
                       <tr>
                          <td>8</td>
                          <td><?php echo $pertanyaan[7]; ?>&nbsp;<?php if($penjelasan[7] == NULL || $penjelasan[7] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor7"></i><?php } ?>
                          <br>
                                       <input type="hidden" name="p7"  value="Y" class="pi7" <?php echo $Y[13]; ?>>
                                       <input type="hidden" name="p7"  value="N" class="pi7" <?php echo $N[13]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[13]; ?>" class="y7">
                                       <input type="hidden" name="N[]" value="<?php echo $N[13]; ?>" class="n7">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[7]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[7]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[7]; ?>" class = 'bb7'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[7]; ?>" class = 'rs7'>
                                       <div class="dp7" style="display: none;">
                                           <?php foreach ($noassu7 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input readonly type='".$row->b."' value='".$row->a."' ".$row->c." class='a7' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b7' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input disabled name='box4[]' type='text' value='".$row->a."' class='form-control a7' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s7' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea disabled  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                            <?php if ($pilihan[13] == 'Y'){ 
                               if($status[0] < 3){?>
                            <input type="file" name="up23" id="7t0" class="btn-sm" onchange="document.getElementsByClassName('f1')[22].value = ''; $('#next').attr('disabled',true);">
                            <?php }}else{
                              $upload[13] = "zonk";
                            } ?>
                            <input type="hidden" name="k23" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no8a" />

                            <input type="hidden" name="g23" value="<?php echo $upload[13]; ?>">
                            <input type="hidden" name="f23" class="f1 7f0" value="<?php echo $upload[13]; ?>">

                            <?php 
                              $upload[13] == '' ? $h = 'hidden' : $h = '';
                              $upload[13] == 'zonk' ? $h = 'hidden' : $h = '';
                            ?>
                             <?php if ($pilihan[13] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[13]; ?>"> <?php echo $upload[13]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment8"> <?php echo $upload[13]; ?></span></div>
                                  <a href="<?php echo 'upload/'.$upload[13]; ?>"><button type="button" class="btn btn-default btn-sm">Download FIle No.8</button></a>
                             <?php }} ?>
                          </td>
                       </tr>
                       <?php } ?>
                        <?php if($id_ass[8] != '' || $id_ass[8] != NULL){ ?>
                       <tr>
                          <td>9</td>
                          <td><?php echo $pertanyaan[8]; ?>&nbsp;<?php if($penjelasan[8] == NULL || $penjelasan[8] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor8"></i><?php } ?>
                          <br>
                                       <input type="hidden" name="p8"  value="Y" class="pi8" <?php echo $Y[14]; ?>>
                                       <input type="hidden" name="p8"  value="N" class="pi8" <?php echo $N[14]; ?>>
                                       <input type="hidden" name="Y[]" value="<?php echo $Y[14]; ?>" class="y8">
                                       <input type="hidden" name="N[]" value="<?php echo $Y[14]; ?>" class="n8">
                                       <input type="hidden" name="id_ass[]" value="<?php echo $id_ass[8]; ?>">
                                       <input type="hidden" name="nomor[]" value="<?php echo $nomor[8]; ?>"> 
                                       <input type="hidden" name="bobot[]" value="<?php echo $bobot[8]; ?>" class = 'bb8'> 
                                       <input type="hidden" name="respon[]" value="<?php echo $respon[8]; ?>" class = 'rs8'>
                                       <div class="dp8" style="display: none;">
                                           <?php foreach ($noassu8 as $row) {
                                           if($row->b == 'not'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='not' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else if($row->b == 'label'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='label' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                           }else  if($row->b == 'checkbox'){
                                              echo "<input disabled type='".$row->b."' value='".$row->a."' ".$row->c." class='a8' $row->status>&nbsp;".$row->a."<br>";
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input name='box4[]' type='hidden' value='".$row->a."' />";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='nonchecked' class='b8' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'text'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<input readonly name='box4[]' type='text' value='".$row->a."' class='form-control a8' placeholder='Lainnya'/>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='none' class='s8' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                          }else if($row->b == 'textarea'){
                                              echo "<input name='box1[]' type='hidden' value='".$row->id."' />";
                                              echo "<input name='box2[]' type='hidden' value='".$row->idass."' />";
                                              echo "<input name='box3[]' type='hidden' value='".$row->nomor_urut."' />";
                                              echo "<textarea readonly  name='box4[]' cols='3' class='form-control'>".$row->a."</textarea>";
                                              echo "<input name='box5[]' type='hidden' value='".$row->b."' />";
                                              echo "<input name='box6[]' type='hidden' value='textarea' />";
                                              echo "<input name='box7[]' type='hidden' value='".$row->urut."' />";
                                              
                                          }
                                        ?>
                                        <?php  } ?>
                                      </div>
                          </td>
                          <td>
                            <?php if ($pilihan[14] == 'Y'){ 
                               if($status[0] < 3){?>
                            <input type="file" name="up24" id="8t0" class="btn-sm" onchange="document.getElementsByClassName('f1')[23].value = ''; $('#next').attr('disabled',true);">
                           <?php }}else{
                            $upload[14] = "zonk";
                           } ?>
                            <input type="hidden" name="k24" value="<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no9a" />
                            <input type="hidden" name="g24" value="<?php echo $upload[14]; ?>">
                            <input type="hidden" name="f24" class="f1 8f0" value="<?php echo $upload[14]; ?>">

                            <?php 
                              $upload[14] == '' ? $h = 'hidden' : $h = '';
                              $upload[14] == 'zonk' ? $h = 'hidden' : $h = '';
                            ?>
                           <?php if ($pilihan[14] == 'Y'){ 
                              if($status[0] < 3){ ?>
                                <span <?=$h?> ><a href="<?php echo 'upload/'.$upload[14]; ?>"> <?php echo $upload[14]; ?></a></span>
                             <?php }else if($status[0] > 2){ ?>
                                <div style="display: none;">
                                  <span class="attachment9"> <?php echo $upload[14]; ?></span></div>
                                 <a href="<?php echo 'upload/'.$upload[14]; ?>"><button type="button" class="btn btn-default btn-sm">Download FIle No.9</button></a>
                             <?php }} ?>
                          </td>
                       </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <?php if($status[0] > 2){ ?>
                   <button type="button" data-toggle="modal" data-target="#modalNext" class="btn btn-primary">Rekomendasi</button>
                <?php }else{ ?>
                  <a href="Home/form_edit/<?php echo $id_projek[0] ?>"><input class="btn btn-warning btn-sm" type="button" value="Back" /></a>
                  <button type="upload" class="btn btn-primary btn-sm" name="upload" value="upload"><i class="glyphicon glyphicon-upload"></i>&nbsp;Upload File</button>
                  <a href="Home"><input class="btn btn-primary btn-sm" type="button" value="Save Draft" /></a>
                  <!-- <button type="submit" class="btn btn-primary btn-sm" id="draft" value="submit">Save Draft</button> -->
                  <button type="button" data-toggle="modal" data-target="#disclamer" class="btn btn-success btn-sm" id="next">Submit</button>
                  <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.row -->
          </section>
          <div class="modal fade" id="disclamer" tabindex="-1" role="dialog" aria-labelledby="disclamer" aria-hidden="true">
          
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
        
                  <h5><p align="justify">Dengan ini seluruh pengisian data upload sudah benar dan sesuai </p></h5>

                </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" >Tidak</button>
                      <button type="submit" name="next" value="submit" class="btn btn-success" >Ya</button>
                    </div>
                </div>
              </div>
            </div>
        </form>
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

                          <center><b><font style="font-family: sans-serif;">Sekretariat:</font></b></center>
                          <br>
                          <center><p style="font-family: sans-serif;">Capital Place Building, 7-8th Floor, Jl. Jenderal Gatot Subroto Kav.18 Jakarta Selatan, DKI Jakarta </p></center>
                          <center><p style="font-family: sans-serif;">Email : xxx@iigf.co.id </p></center>      
                      </h5>
                    </div>
                      </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="print">Print</button>
            <a href="Home"><button type="button" class="btn btn-success" id="complete">Complete</button></a>
            </div>
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
      
      
            $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)    // Kita sembunyikan dulu untuk loadingnya 
      
                      $.ajax({        
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                            url: "<?php echo base_url("index.php/Home/kotakabu_edit"); ?>", // Isi dengan url/path file php yang dituju       
                            data: {
                                    id_provinsi : $("#provinsi").val(),
                                    n_kotakabu : $("#n_kotakabu").val()
                                  }, // data yang akan dikirim ke file yang dituju        
                            dataType: "json",        
                            beforeSend: function(e) {          
                                if(e && e.overrideMimeType) {            
                                    e.overrideMimeType("application/json;charset=UTF-8");          
                                }        
                            },        
                            success: function(response){ // Ketika proses pengiriman berhasil          
                                $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                                 $("#kotabu").html(response.list_kotakabu).show();       
                            },        
                            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                            }      
                        });

                        $.ajax({        
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                            url: "<?php echo base_url("index.php/Home/listSubsektor_edit"); ?>", // Isi dengan url/path file php yang dituju       
                            data: {
                                    id_sektor : $("#sektor").val(),
                                    id_subsektor : $("#id_subsektor").val()
                                  }, // data yang akan dikirim ke file yang dituju        
                            dataType: "json",        
                            beforeSend: function(e) {          
                                if(e && e.overrideMimeType) {            
                                    e.overrideMimeType("application/json;charset=UTF-8");          
                                }        
                            },        
                            success: function(response){ // Ketika proses pengiriman berhasil          
                                $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                                $("#subsektor").html(response.list_subsektor).show();      
                            },        
                            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                            }      
                        }); 
      
              $("#loading").hide();       
              $("#provinsi").change(function(){ // Ketika user mengganti atau memilih data provinsi      
                $("#loading").show(); // Tampilkan loadingnya          
                      $.ajax({        
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                            url: "<?php echo base_url("index.php/Home/listKotabu"); ?>", // Isi dengan url/path file php yang dituju       
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
                                 $("#kotabu").html(response.list_kotakabu).show();       
                            },        
                            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                            }      
                        }); 
      
              });

              $("#sektor").change(function(){ // Ketika user mengganti atau memilih data provinsi         
              $("#loading").show(); // Tampilkan loadingnya 

                document.getElementById('gsubsektor').style.display = 'block';
      
                      $.ajax({        
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
                            url: "<?php echo base_url("index.php/Home/listSubsektor"); ?>", // Isi dengan url/path file php yang dituju       
                            data: {
                                    id_sektor : $("#sektor").val()
                                  }, // data yang akan dikirim ke file yang dituju        
                            dataType: "json",        
                            beforeSend: function(e) {          
                                if(e && e.overrideMimeType) {            
                                    e.overrideMimeType("application/json;charset=UTF-8");          
                                }        
                            },        
                            success: function(response){ // Ketika proses pengiriman berhasil          
                                $("#loading").hide(); // Sembunyikan loadingnya          // set isi dari combobox kota          // lalu munculkan kembali combobox kotanya         
                                $("#subsektor").html(response.list_subsektor).show();      
                            },        
                            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
                            }      
                        });
                 });

                              
                  var subs =  document.getElementById('subsub').value;

                  // console.log(subs);

                  if(subs == 'Lainnya' || subs == 'lainnya'){
                    document.getElementById('gsubsektorln').style.display = 'block';
                  }else{
                    document.getElementById('gsubsektorln').style.display = 'none';
                  }

             $("#subsektor").change(function(){ // Ketika user mengganti atau memilih data provinsi         

                  var sub =  $(this).find(':selected').data('sub');

                  $("#subsub").val(sub);

                  if(sub == 'Lainnya' || sub == 'lainnya'){
                    document.getElementById('gsubsektorln').style.display = 'block';
                  }else{
                    document.getElementById('gsubsektorln').style.display = 'none';
                  }
              });    


            }); 
      
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e){
          // tambahkan 'Rp.' pada saat form di ketik
          // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
          rupiah.value = formatRupiah(this.value, 'Rp ');
        });
      
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
          split       = number_string.split(','),
          sisa        = split[0].length % 3,
          rupiah        = split[0].substr(0, sisa),
          ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
      
          // tambahkan titik jika yang di input sudah menjadi angka ribuan
          if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }
      
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        } 

   pi0 = document.getElementsByClassName('pi0');
   y0 = document.getElementsByClassName('y0');
   n0 = document.getElementsByClassName('n0');
   dp0 = document.getElementsByClassName('dp0');
   bb0 = document.getElementsByClassName('bb0');
   rs0 = document.getElementsByClassName('rs0');

   pi1 = document.getElementsByClassName('pi1');
   y1 = document.getElementsByClassName('y1');
   n1 = document.getElementsByClassName('n1');
   dp1 = document.getElementsByClassName('dp1');
   bb1 = document.getElementsByClassName('bb1');
   rs1 = document.getElementsByClassName('rs1');

   pi2 = document.getElementsByClassName('pi2');
   y2 = document.getElementsByClassName('y2');
   n2 = document.getElementsByClassName('n2');
   dp2 = document.getElementsByClassName('dp2');
   bb2 = document.getElementsByClassName('bb2');
   rs2 = document.getElementsByClassName('rs2');

   pi3 = document.getElementsByClassName('pi3');
   y3 = document.getElementsByClassName('y3');
   n3 = document.getElementsByClassName('n3');
   dp3 = document.getElementsByClassName('dp3');
   bb3 = document.getElementsByClassName('bb3');
   rs3 = document.getElementsByClassName('rs3');

   pi4 = document.getElementsByClassName('pi4');
   y4 = document.getElementsByClassName('y4');
   n4 = document.getElementsByClassName('n4');
   dp4 = document.getElementsByClassName('dp4');
   bb4 = document.getElementsByClassName('bb4');
   rs4 = document.getElementsByClassName('rs4');

   pi5 = document.getElementsByClassName('pi5');
   y5 = document.getElementsByClassName('y5');
   n5 = document.getElementsByClassName('n5');
   dp5 = document.getElementsByClassName('dp5');
   bb5 = document.getElementsByClassName('bb5');
   rs5 = document.getElementsByClassName('rs5');

   pi6 = document.getElementsByClassName('pi6');
   y6 = document.getElementsByClassName('y6');
   n6 = document.getElementsByClassName('n6');
   dp6 = document.getElementsByClassName('dp6');
   bb6 = document.getElementsByClassName('bb6');
   rs6 = document.getElementsByClassName('rs6');

   pi7 = document.getElementsByClassName('pi7');
   y7 = document.getElementsByClassName('y7');
   n7 = document.getElementsByClassName('n7');
   dp7 = document.getElementsByClassName('dp7');
   bb7 = document.getElementsByClassName('bb7');
   rs7 = document.getElementsByClassName('rs7');

   pi8 = document.getElementsByClassName('pi8');
   y8 = document.getElementsByClassName('y8');
   n8 = document.getElementsByClassName('n8');
   dp8 = document.getElementsByClassName('dp8');
   bb8 = document.getElementsByClassName('bb8');
   rs8 = document.getElementsByClassName('rs8');

   pi9 = document.getElementsByClassName('pi9');
   y9 = document.getElementsByClassName('y9');
   n9 = document.getElementsByClassName('n9');
   dp9 = document.getElementsByClassName('dp9');
   bb9 = document.getElementsByClassName('bb9');
   rs9 = document.getElementsByClassName('rs9');

   pi10 = document.getElementsByClassName('pi10');
   y10 = document.getElementsByClassName('y10');
   n10 = document.getElementsByClassName('n10');
   dp10 = document.getElementsByClassName('dp10');
   bb10 = document.getElementsByClassName('bb10');
   rs10 = document.getElementsByClassName('rs10');
   
   pi11 = document.getElementsByClassName('pi11');
   y11 = document.getElementsByClassName('y11');
   n11 = document.getElementsByClassName('n11');
   dp11 = document.getElementsByClassName('dp11');
   bb11 = document.getElementsByClassName('bb11');
   rs11 = document.getElementsByClassName('rs11');

   pi12 = document.getElementsByClassName('pi12');
   y12 = document.getElementsByClassName('y12');
   n12 = document.getElementsByClassName('n12');
   dp12 = document.getElementsByClassName('dp12');
   bb12 = document.getElementsByClassName('bb12');
   rs12 = document.getElementsByClassName('rs12');

   pi13 = document.getElementsByClassName('pi13');
   y13 = document.getElementsByClassName('y13');
   n13 = document.getElementsByClassName('n13');
   dp13 = document.getElementsByClassName('dp13');
   bb13 = document.getElementsByClassName('bb13');
   rs13 = document.getElementsByClassName('rs13');

   pi14 = document.getElementsByClassName('pi14');
   y14 = document.getElementsByClassName('y14');
   n14 = document.getElementsByClassName('n14');
   dp14 = document.getElementsByClassName('dp14');
   bb14 = document.getElementsByClassName('bb14');
   rs14 = document.getElementsByClassName('rs14');
   
   pi15 = document.getElementsByClassName('pi15');
   y15 = document.getElementsByClassName('y15');
   n15 = document.getElementsByClassName('n15');
   dp15 = document.getElementsByClassName('dp15');
   bb15 = document.getElementsByClassName('bb15');
   rs15 = document.getElementsByClassName('rs15');


   for(var i = 0; i< pi0.length; i++){

      if(y0[0].value == 'checked'){
        dp0[0].style.display = 'block';
      }else{
        dp0[0].style.display = 'none';
      }

        if (pi0[i].value == 'Y'){
            pi0[i].addEventListener("click", function(){
              for(var i = 0; i < pi0.length; i++){
                dp0[0].style.display = 'block';
                y0[0].value = 'checked';
                n0[0].value = 'nonchecked';
                bb0[0].value;
                rs0[0].value = '';
              }
            });
        }else if (pi0[i].value == 'N'){
            pi0[i].addEventListener("click", function(){
              for(var i = 0; i < pi0.length; i++){
                dp0[0].style.display = 'none';
                y0[0].value = 'nonchecked';
                n0[0].value = 'checked';
                bb0[0].value = 0;
                rs0[0].value;
              }
            });
        }
   }

   for(var i = 0; i< pi1.length; i++){

      if(y1[0].value == 'checked'){
        dp1[0].style.display = 'block';
      }else{
        dp1[0].style.display = 'none';
      }

      if (pi1[i].value == 'Y'){      
        pi1[i].addEventListener("click", function(){
            for(var i = 0; i < pi1.length; i++){
               dp1[0].style.display = 'block';
               y1[0].value = 'checked';
               n1[0].value = 'nonchecked';
               bb1[0].value;
               rs1[0].value = '';
            }
          });
      }else if (pi1[i].value == 'N'){
          pi1[i].addEventListener("click", function(){
            for(var i = 0; i < pi1.length; i++){
               dp1[0].style.display = 'none';
               y1[0].value = 'nonchecked';
               n1[0].value = 'checked';
               bb1[0].value = 0;
               rs1[0].value;
            }
          });
      }
   }

  for(var i = 0; i< pi2.length; i++){

      if(y2[0].value == 'checked'){
        dp2[0].style.display = 'block';
      }else{
        dp2[0].style.display = 'none';
      }

      if (pi2[i].value == 'Y'){
        pi2[i].addEventListener("click", function(){
            for(var i = 0; i < pi2.length; i++){
               dp2[0].style.display = 'block';
               y2[0].value = 'checked';
               n2[0].value = 'nonchecked';
               bb2[0].value;
               rs2[0].value = '';
            }
          });
      }else if (pi2[i].value == 'N'){
          pi2[i].addEventListener("click", function(){
            for(var i = 0; i < pi2.length; i++){
               dp2[0].style.display = 'none';
               y2[0].value = 'nonchecked';
               n2[0].value = 'checked';
               bb2[0].value = 0;
               rs2[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi3.length; i++){

      if(y3[0].value == 'checked'){
        dp3[0].style.display = 'block';
      }else{
        dp3[0].style.display = 'none';
      }

      if (pi3[i].value == 'Y'){
          pi3[i].addEventListener("click", function(){
            for(var i = 0; i < pi3.length; i++){
               dp3[0].style.display = 'block';
               y3[0].value = 'checked';
               n3[0].value = 'nonchecked';
               bb3[0].value;
               rs3[0].value = '';
            }
          });
      }else if (pi3[i].value == 'N'){
          pi3[i].addEventListener("click", function(){
            for(var i = 0; i < pi3.length; i++){
               dp3[0].style.display = 'none';
               y3[0].value = 'nonchecked';
               n3[0].value = 'checked';
               bb3[0].value = 0;
               rs3[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi4.length; i++){

      if(y4[0].value == 'checked'){
        dp4[0].style.display = 'block';
      }else{
        dp4[0].style.display = 'none';
      }

      if (pi4[i].value == 'Y'){
          pi4[i].addEventListener("click", function(){
            for(var i = 0; i < pi4.length; i++){
               dp4[0].style.display = 'block';
               y4[0].value = 'checked';
               n4[0].value = 'nonchecked';
               bb4[0].value;
               rs4[0].value = '';
            }
          });
      }else if (pi4[i].value == 'N'){
          pi4[i].addEventListener("click", function(){
            for(var i = 0; i < pi4.length; i++){
               dp4[0].style.display = 'none';
               y4[0].value = 'nonchecked';
               n4[0].value = 'checked';
               bb4[0].value = 0;
               rs4[0].value;
            }
          });
      }
   }

  for(var i = 0; i< pi5.length; i++){

      if(y5[0].value == 'checked'){
        dp5[0].style.display = 'block';
      }else{
        dp5[0].style.display = 'none';
      }

      if (pi5[i].value == 'Y'){
          pi5[i].addEventListener("click", function(){
            for(var i = 0; i < pi5.length; i++){
               dp5[0].style.display = 'block';
               y5[0].value = 'checked';
               n5[0].value = 'nonchecked';
               bb5[0].value;
               rs5[0].value = '';
            }
          });
      }else if (pi5[i].value == 'N'){
          pi5[i].addEventListener("click", function(){
            for(var i = 0; i < pi5.length; i++){
               dp5[0].style.display = 'none';
               y5[0].value = 'nonchecked';
               n5[0].value = 'checked';
               bb5[0].value = 0;
               rs5[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi6.length; i++){

      if(y6[0].value == 'checked'){
        dp6[0].style.display = 'block';
      }else{
        dp6[0].style.display = 'none';
      }

      if (pi6[i].value == 'Y'){
          pi6[i].addEventListener("click", function(){
            for(var i = 0; i < pi6.length; i++){
               dp6[0].style.display = 'block';
               y6[0].value = 'checked';
               n6[0].value = 'nonchecked';
               bb6[0].value;
               rs6[0].value = '';
            }
          });
      }else if (pi6[i].value == 'N'){
          pi6[i].addEventListener("click", function(){
            for(var i = 0; i < pi6.length; i++){
               dp6[0].style.display = 'none';
               y6[0].value = 'nonchecked';
               n6[0].value = 'checked';
               bb6[0].value = 0;
               rs6[0].value;
            }
          });
      }
   }

      for(var i = 0; i< pi7.length; i++){

      if(y7[0].value == 'checked'){
        dp7[0].style.display = 'block';
      }else{
        dp7[0].style.display = 'none';
      }

      if (pi7[i].value == 'Y'){
          pi7[i].addEventListener("click", function(){
            for(var i = 0; i < pi7.length; i++){
               dp7[0].style.display = 'block';
               y7[0].value = 'checked';
               n7[0].value = 'nonchecked';
               bb7[0].value;
               rs7[0].value = '';
            }
          });
      }else if (pi7[i].value == 'N'){
          pi7[i].addEventListener("click", function(){
            for(var i = 0; i < pi7.length; i++){
               dp7[0].style.display = 'none';
               y7[0].value = 'nonchecked';
               n7[0].value = 'checked';
               bb7[0].value = 0;
               rs7[0].value;
            }
          });
      }
   }

  for(var i = 0; i< pi8.length; i++){

      if(y8[0].value == 'checked'){
        dp8[0].style.display = 'block';
      }else{
        dp8[0].style.display = 'none';
      }

      if (pi8[i].value == 'Y'){
          pi8[i].addEventListener("click", function(){
            for(var i = 0; i < pi8.length; i++){
               dp8[0].style.display = 'block';
               y8[0].value = 'checked';
               n8[0].value = 'nonchecked';
               bb8[0].value;
               rs8[0].value = '';
            }
          });
      }else if (pi8[i].value == 'N'){
          pi8[i].addEventListener("click", function(){
            for(var i = 0; i < pi8.length; i++){
               dp8[0].style.display = 'none';
               y8[0].value = 'nonchecked';
               n8[0].value = 'checked';
               bb8[0].value = 0;
               rs8[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi9.length; i++){

      if(y9[0].value == 'checked'){
        dp9[0].style.display = 'block';
      }else{
        dp9[0].style.display = 'none';
      }

      if (pi9[i].value == 'Y'){
          pi9[i].addEventListener("click", function(){
            for(var i = 0; i < pi9.length; i++){
               dp9[0].style.display = 'block';
               y9[0].value = 'checked';
               n9[0].value = 'nonchecked';
               bb9[0].value;
               rs9[0].value = '';
            }
          });
      }else if (pi9[i].value == 'N'){
          pi9[i].addEventListener("click", function(){
            for(var i = 0; i < pi9.length; i++){
               dp9[0].style.display = 'none';
               y9[0].value = 'nonchecked';
               n9[0].value = 'checked';
               bb9[0].value = 0;
               rs9[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi10.length; i++){

      if(y10[0].value == 'checked'){
        dp10[0].style.display = 'block';
      }else{
        dp10[0].style.display = 'none';
      }

      if (pi10[i].value == 'Y'){
          pi10[i].addEventListener("click", function(){
            for(var i = 0; i < pi0.length; i++){
               dp10[0].style.display = 'block';
               y10[0].value = 'checked';
               n10[0].value = 'nonchecked';
               bb10[0].value;
               rs10[0].value = '';
            }
          });
      }else if (pi10[i].value == 'N'){
          pi10[i].addEventListener("click", function(){
            for(var i = 0; i < pi4.length; i++){
               dp10[0].style.display = 'none';
               y10[0].value = 'nonchecked';
               n10[0].value = 'checked';
               bb10[0].value = 0;
               rs10[0].value;
            }
          });
      }
   }

  for(var i = 0; i< pi11.length; i++){

      if(y11[0].value == 'checked'){
        dp11[0].style.display = 'block';
      }else{
        dp11[0].style.display = 'none';
      }

      if (pi11[i].value == 'Y'){
          pi11[i].addEventListener("click", function(){
            for(var i = 0; i < pi11.length; i++){
               dp11[0].style.display = 'block';
               y11[0].value = 'checked';
               n11[0].value = 'nonchecked';
               bb11[0].value;
               rs11[0].value = '';
            }
          });
      }else if (pi11[i].value == 'N'){
          pi11[i].addEventListener("click", function(){
            for(var i = 0; i < pi11.length; i++){
               dp11[0].style.display = 'none';
               y11[0].value = 'nonchecked';
               n11[0].value = 'checked';
               bb11[0].value = 0;
               rs11[0].value;
            }
          });
      }
   }

     for(var i = 0; i< pi12.length; i++){

      if(y12[0].value == 'checked'){
        dp12[0].style.display = 'block';
      }else{
        dp12[0].style.display = 'none';
      }

      if (pi12[i].value == 'Y'){
          pi12[i].addEventListener("click", function(){
            for(var i = 0; i < pi12.length; i++){
               dp12[0].style.display = 'block';
               y12[0].value = 'checked';
               n12[0].value = 'nonchecked';
               bb12[0].value;
               rs12[0].value = '';
            }
          });
      }else if (pi12[i].value == 'N'){
          pi12[i].addEventListener("click", function(){
            for(var i = 0; i < pi12.length; i++){
               dp12[0].style.display = 'none';
               y12[0].value = 'nonchecked';
               n12[0].value = 'checked';
               bb12[0].value = 0;
               rs12[0].value;
            }
          });
      }
   }

     for(var i = 0; i< pi13.length; i++){

      if(y13[0].value == 'checked'){
        dp13[0].style.display = 'block';
      }else{
        dp13[0].style.display = 'none';
      }

      if (pi13[i].value == 'Y'){
          pi13[i].addEventListener("click", function(){
            for(var i = 0; i < pi13.length; i++){
               dp13[0].style.display = 'block';
               y13[0].value = 'checked';
               n13[0].value = 'nonchecked';
               bb13[0].value;
               rs13[0].value = '';
            }
          });
      }else if (pi13[i].value == 'N'){
          pi13[i].addEventListener("click", function(){
            for(var i = 0; i < pi13.length; i++){
               dp13[0].style.display = 'none';
               y13[0].value = 'nonchecked';
               n13[0].value = 'checked';
               bb13[0].value = 0;
               rs13[0].value;
            }
          });
      }
   }

     for(var i = 0; i< pi14.length; i++){

      if(y14[0].value == 'checked'){
        dp14[0].style.display = 'block';
      }else{
        dp14[0].style.display = 'none';
      }

      if (pi14[i].value == 'Y'){
          pi14[i].addEventListener("click", function(){
            for(var i = 0; i < pi14.length; i++){
               dp14[0].style.display = 'block';
               y14[0].value = 'checked';
               n14[0].value = 'nonchecked';
               bb14[0].value;
               rs14[0].value = '';
            }
          });
      }else if (pi14[i].value == 'N'){
          pi14[i].addEventListener("click", function(){
            for(var i = 0; i < pi14.length; i++){
               dp14[0].style.display = 'none';
               y14[0].value = 'nonchecked';
               n14[0].value = 'checked';
               bb14[0].value = 0;
               rs14[0].value;
            }
          });
      }
   }

    for(var i = 0; i< pi15.length; i++){

      if(y15[0].value == 'checked'){
        dp15[0].style.display = 'block';
      }else{
        dp15[0].style.display = 'none';
      }

      if (pi15[i].value == 'Y'){
          pi15[i].addEventListener("click", function(){
            for(var i = 0; i < pi15.length; i++){
               dp15[0].style.display = 'block';
               y15[0].value = 'checked';
               n15[0].value = 'nonchecked';
               bb15[0].value;
               rs15[0].value = '';
            }
          });
      }else if (pi15[i].value == 'N'){
          pi15[i].addEventListener("click", function(){
            for(var i = 0; i < pi15.length; i++){
               dp15[0].style.display = 'none';
               y15[0].value = 'nonchecked';
               n15[0].value = 'checked';
               bb15[0].value = 0;
               rs15[0].value;
            }
          });
      }
   }



   a0 = document.getElementsByClassName('a0');
   b0 = document.getElementsByClassName('b0');
   s0 = document.getElementsByClassName('s0');
   a1 = document.getElementsByClassName('a1');
   
   b1 = document.getElementsByClassName('b1');
   s1 = document.getElementsByClassName('s1');

   a2 = document.getElementsByClassName('a2');
   b2 = document.getElementsByClassName('b2');
   s2 = document.getElementsByClassName('s2');

   a3 = document.getElementsByClassName('a3');
   b3 = document.getElementsByClassName('b3');
   s3 = document.getElementsByClassName('s3');

   a4 = document.getElementsByClassName('a4');
   b4 = document.getElementsByClassName('b4');
   s4 = document.getElementsByClassName('s4');

   a5 = document.getElementsByClassName('a5');
   b5 = document.getElementsByClassName('b5');
   s5 = document.getElementsByClassName('s5');

   a6 = document.getElementsByClassName('a6');
   b6 = document.getElementsByClassName('b6');
   s6 = document.getElementsByClassName('s6');

   a7 = document.getElementsByClassName('a7');
   b7 = document.getElementsByClassName('b7');
   s7 = document.getElementsByClassName('s7');

   a8 = document.getElementsByClassName('a8');
   b8 = document.getElementsByClassName('b8');
   s8 = document.getElementsByClassName('s8');

   a9 = document.getElementsByClassName('a9');
   b9 = document.getElementsByClassName('b9');
   s9 = document.getElementsByClassName('s9');

   a10 = document.getElementsByClassName('a10');
   b10 = document.getElementsByClassName('b10');
   s10 = document.getElementsByClassName('s10');

   a11 = document.getElementsByClassName('a11');
   b11 = document.getElementsByClassName('b11');
   s11 = document.getElementsByClassName('s11');

   a12 = document.getElementsByClassName('a12');
   b12 = document.getElementsByClassName('b12');
   s12 = document.getElementsByClassName('s12');

   a13 = document.getElementsByClassName('a13');
   b13 = document.getElementsByClassName('b13');
   s13 = document.getElementsByClassName('s13');

   a14 = document.getElementsByClassName('a14');
   b14 = document.getElementsByClassName('b14');
   s14 = document.getElementsByClassName('s14');

   a15 = document.getElementsByClassName('a15');
   b15 = document.getElementsByClassName('b15');
   s15 = document.getElementsByClassName('s15');


    for(var i = 0; i < b0.length; i++){

      if(a0[b0.length-1].value == 'Lainnya' || a0[b0.length-1].value == 'lainnya' || a0[b0.length-1].value == 'Other' || b0[a0.length-1].value == 'other'){
        if(a0[i].checked == true){
          a0[b0.length].style.display = 'block';
          a0[b0.length].required = true;
          b0[i].value = 'checked';
          s0[0].value = 'block';
          $("#0t"+i).show();
        }else{
          a0[b0.length].style.display = 'none';
          b0[i].value = 'nonchecked';
          s0[0].value = 'none';
          a0[b0.length].required = false;
          $("#0t"+i).hide();
          $(".0f"+i).val('zonk');
        }
      }else{
        if(a0[i].checked == true){
          b0[i].value = 'checked';
           $("#0t"+i).show();
        }else{
          b0[i].value = 'nonchecked';
          $("#0t"+i).hide();
          $(".0f"+i).val('zonk');
        }
      }

      a0[i].addEventListener("click", function(){
          for(var i = 0; i < b0.length; i++){  
          if (a0[i].checked == true){
                b0[i].value = 'checked';
                a0[b0.length].style.display = 'block';
                s0[0].value = 'block';
                a0[b0.length].required = true;
          }else{
              b0[i].value = 'nonchecked';
              a0[b0.length].style.display = 'none';
              s0[0].value = 'none';
              a0[b0.length].required = false;
          }
        }

        });
 
    }

    for(var i = 0; i < b1.length; i++){

      if(a1[b1.length-1].value == 'Lainnya' || a1[b1.length-1].value == 'lainnya' || a1[b1.length-1].value == 'Other' || a1[b1.length-1].value == 'other'){
        if(a1[i].checked == true){
          a1[b1.length].style.display = 'block';
          a1[b1.length].required = true;
          b1[i].value = 'checked';
          s1[0].value = 'block';
          $("#1t"+i).show();
        }else{
          a1[b1.length].style.display = 'none';
          b1[i].value = 'nonchecked';
          s1[0].value = 'none';
          a1[b1.length].required = false;
          $("#1t"+i).hide();
          $(".1f"+i).val('zonk');
        }
        }else{
          if(a1[i].checked == true){
          b1[i].value = 'checked';
          $("#1t"+i).show();
        }else{
          b1[i].value = 'nonchecked';
          $("#1t"+i).hide();
          $(".1f"+i).val('zonk');
        }
      }

      a1[i].addEventListener("click", function(){
          for(var i = 0; i < b1.length; i++){  
          if (a1[i].checked == true){
                b1[i].value = 'checked';
                a1[b1.length].style.display = 'block';
                s1[0].value = 'block';
                a1[b1.length].required = true;
          }else{
              b1[i].value = 'nonchecked';
              a1[b1.length].style.display = 'none';
              s1[0].value = 'none';
              a1[b1.length].required = false;
          }
            }

        });
 
    }


    for(var i = 0; i < b2.length; i++){

      if(a2[b2.length-1].value == 'Lainnya' || a2[b2.length-1].value == 'lainnya' || a2[b2.length-1].value == 'Other' || a2[b2.length-1].value == 'other'){
        if(a2[i].checked == true){
          a2[b2.length].style.display = 'block';
          a2[b2.length].required = true;
          b2[i].value = 'checked';
          s2[0].value = 'block';
          $("#2t"+i).show();
        }else{
          a2[b2.length].style.display = 'none';
          b2[i].value = 'nonchecked';
          s2[0].value = 'none';
          a2[b2.length].required = false;
          $("#2t"+i).hide();
          $(".2f"+i).val('zonk');
        }
        }else{
          if(a2[i].checked == true){
          b2[i].value = 'checked';
          $("#2t"+i).show();
        }else{
          b2[i].value = 'nonchecked';
          $("#2t"+i).hide();
          $(".2f"+i).val('zonk');
        }
      }

      a2[i].addEventListener("click", function(){
          for(var i = 0; i < b2.length; i++){  
          if (a2[i].checked == true){
                b2[i].value = 'checked';
                a2[b2.length].style.display = 'block';
                s2[0].value = 'block';
                a2[b2.length].required = true;
          }else{
              b2[i].value = 'nonchecked';
              a2[b2.length].style.display = 'none';
              s2[0].value = 'none';
              a2[b2.length].required = false;
          }
            }

        });
 
    }

    for(var i = 0; i < b3.length; i++){

      if(a3[b3.length-1].value == 'Lainnya' || a3[b3.length-1].value == 'lainnya' || a3[b3.length-1].value == 'Other' || a3[b3.length-1].value == 'other'){
        if(a3[i].checked == true){
          a3[b3.length].style.display = 'block';
          a3[b3.length].required = true;
          b3[i].value = 'checked';
          s3[0].value = 'block';
          $("#3t"+i).show();
        }else{
          a3[b3.length].style.display = 'none';
          b3[i].value = 'nonchecked';
          s3[0].value = 'none';
          a3[b3.length].required = false;
          $("#3t"+i).hide();
          $(".3f"+i).val('zonk');
        }
        }else{
          if(a3[i].checked == true){
          b3[i].value = 'checked';
          $("#3t"+i).show();
        }else{
          b3[i].value = 'nonchecked';
          $("#3t"+i).hide();
          $(".3f"+i).val('zonk');
        }
      }

      a3[i].addEventListener("click", function(){
          for(var i = 0; i < b3.length; i++){  
          if (a3[i].checked == true){
                b3[i].value = 'checked';
                a3[b3.length].style.display = 'block';
                s3[0].value = 'block';
                a3[b3.length].required = true;
          }else{
              b3[i].value = 'nonchecked';
              a3[b3.length].style.display = 'none';
              s3[0].value = 'none';
              a3[b3.length].required = false;
          }
          }

        });
 
    }

    for(var i = 0; i < b4.length; i++){

      if(a4[b4.length-1].value == 'Lainnya' || a4[b4.length-1].value == 'lainnya' || a4[b4.length-1].value == 'Other' || a4[b4.length-1].value == 'other'){
        if(a4[i].checked == true){
          a4[b4.length].style.display = 'block';
          a4[b4.length].required = true;
          b4[i].value = 'checked';
          s4[0].value = 'block';
          $("#4t"+i).show();
        }else{
          a4[b4.length].style.display = 'none';
          b4[i].value = 'nonchecked';
          s4[0].value = 'none';
          a4[b4.length].required = false;
          $("#4t"+i).hide();
          $(".4f"+i).val('zonk');
        }
        }else{
          if(a4[i].checked == true){
          b4[i].value = 'checked';
          $("#4t"+i).show();
        }else{
          b4[i].value = 'nonchecked';
          $("#4t"+i).hide();
          $(".4f"+i).val('zonk');
        }
      }

      a4[i].addEventListener("click", function(){
          for(var i = 0; i < b4.length; i++){  
          if (a4[i].checked == true){
                b4[i].value = 'checked';
                a4[b4.length].style.display = 'block';
                s4[0].value = 'block';
                a4[b4.length].required = true;
          }else{
              b4[i].value = 'nonchecked';
              a4[b4.length].style.display = 'none';
              s4[0].value = 'none';
              a4[b4.length].required = false;
          }
          }

        });
 
    }

    for(var i = 0; i < b5.length; i++){

      if(a5[b5.length-1].value == 'Lainnya' || a5[b5.length-1].value == 'lainnya' || a5[b5.length-1].value == 'Other' || a5[b5.length-1].value == 'other'){
        if(a5[i].checked == true){
          a5[b5.length].style.display = 'block';
          a5[b5.length].required = true;
          b5[i].value = 'checked';
          s5[0].value = 'block';
          $("#5t"+i).show();
        }else{
          a5[b5.length].style.display = 'none';
          b5[i].value = 'nonchecked';
          s5[0].value = 'none';
          a5[b5.length].required = false;
          $("#5t"+i).hide();
          $(".5f"+i).val('zonk');
        }
        }else{
          if(a5[i].checked == true){
          b5[i].value = 'checked';
          $("#5t"+i).show();
        }else{
          b5[i].value = 'nonchecked';
          $("#5t"+i).hide();
          $(".5f"+i).val('zonk');
        }
      }

      a5[i].addEventListener("click", function(){
          for(var i = 0; i < b5.length; i++){  
          if (a5[i].checked == true){
                b5[i].value = 'checked';
                a5[b5.length].style.display = 'block';
                s5[0].value = 'block';
                a5[b5.length].required = true;
          }else{
              b5[i].value = 'nonchecked';
              a5[b5.length].style.display = 'none';
              s5[0].value = 'none';
              a5[b5.length].required = false;
          }
          }

        });
 
    }

    for(var i = 0; i < b6.length; i++){

      if(a6[b6.length-1].value == 'Lainnya' || a6[b6.length-1].value == 'lainnya' || a6[b6.length-1].value == 'Other' || a6[b6.length-1].value == 'other'){
        if(a6[i].checked == true){
          a6[b6.length].style.display = 'block';
          a6[b6.length].required = true;
          b6[i].value = 'checked';
          s6[0].value = 'block';
          $("#6t"+i).show();
        }else{
          a6[b6.length].style.display = 'none';
          b6[i].value = 'nonchecked';
          s6[0].value = 'none';
          a6[b6.length].required = false;
          $("#6t"+i).hide();
          $(".6f"+i).val('zonk');
        }
        }else{
          if(a6[i].checked == true){
          b6[i].value = 'checked';
          $("#6t"+i).show();
        }else{
          b6[i].value = 'nonchecked';
          $("#6t"+i).hide();
          $(".6f"+i).val('zonk');
        }
      }

      a6[i].addEventListener("click", function(){
          for(var i = 0; i < b6.length; i++){  
          if (a6[i].checked == true){
                b6[i].value = 'checked';
                a6[b6.length].style.display = 'block';
                s6[0].value = 'block';
                a6[b6.length].required = true;
          }else{
              b6[i].value = 'nonchecked';
              a6[b6.length].style.display = 'none';
              s6[0].value = 'none';
              a6[b6.length].required = false;
          }
          }

        });
 
    }
      for(var i = 0; i < b7.length; i++){

      if(a7[b7.length-1].value == 'Lainnya' || a7[b7.length-1].value == 'lainnya' || a7[b7.length-1].value == 'Other' || a7[b7.length-1].value == 'other'){
        if(a7[i].checked == true){
          a7[b7.length].style.display = 'block';
          a7[b7.length].required = true;
          b7[i].value = 'checked';
          s7[0].value = 'block';
          $("#7t"+i).show();
        }else{
          a7[b7.length].style.display = 'none';
          b7[i].value = 'nonchecked';
          s7[0].value = 'none';
          a7[b7.length].required = false;
          $("#7t"+i).hide();
          $(".7f"+i).val('zonk');
        }
        }else{
          if(a7[i].checked == true){
          b7[i].value = 'checked';
          $("#7t"+i).show();
        }else{
          b7[i].value = 'nonchecked';
          $("#7t"+i).hide();
          $(".7f"+i).val('zonk');
        }
      }

      a7[i].addEventListener("click", function(){
          for(var i = 0; i < b7.length; i++){  
          if (a7[i].checked == true){
                b7[i].value = 'checked';
                a7[b7.length].style.display = 'block';
                s7[0].value = 'block';
                a7[b7.length].required = true;
          }else{
              b7[i].value = 'nonchecked';
              a7[b7.length].style.display = 'none';
              s7[0].value = 'none';
              a7[b7.length].required = false;
          }
          }

        });
 
    }
    for(var i = 0; i < b8.length; i++){

      if(a8[b8.length-1].value == 'Lainnya' || a8[b8.length-1].value == 'lainnya' || a8[b8.length-1].value == 'Other' || a8[b8.length-1].value == 'other'){
        if(a8[i].checked == true){
          a8[b8.length].style.display = 'block';
          a8[b8.length].required = true;
          b8[i].value = 'checked';
          s8[0].value = 'block';
          $("#8t"+i).show();
        }else{
          a8[b8.length].style.display = 'none';
          b8[i].value = 'nonchecked';
          s8[0].value = 'none';
          a8[b8.length].required = false;
          $("#8t"+i).hide();
          $(".8f"+i).val('zonk');
        }
        }else{
          if(a8[i].checked == true){
          b8[i].value = 'checked';
          $("#8t"+i).show();
        }else{
          b8[i].value = 'nonchecked';
          $("#8t"+i).hide();
          $(".8f"+i).val('zonk');
        }
      }

      a8[i].addEventListener("click", function(){
          for(var i = 0; i < b8.length; i++){  
          if (a8[i].checked == true){
                b8[i].value = 'checked';
                a8[b8.length].style.display = 'block';
                s8[0].value = 'block';
                a8[b8.length].required = true;
          }else{
              b8[i].value = 'nonchecked';
              a8[b8.length].style.display = 'none';
              s8[0].value = 'none';
              a8[b8.length].required = false;
          }
          }

        });
 
    }
    for(var i = 0; i < b9.length; i++){

      if(a9[b9.length-1].value == 'Lainnya' || a9[b9.length-1].value == 'lainnya' || a9[b9.length-1].value == 'Other' || a9[b9.length-1].value == 'other'){
        if(a9[i].checked == true){
          a9[b9.length].style.display = 'block';
          a9[b9.length].required = true;
          b9[i].value = 'checked';
          s9[0].value = 'block';
        }else{
          a9[b9.length].style.display = 'none';
          b9[i].value = 'nonchecked';
          s9[0].value = 'none';
          a9[b9.length].required = false;
        }
        }else{
          if(a9[i].checked == true){
          b9[i].value = 'checked';
        }else{
          b9[i].value = 'nonchecked';
        }
      }

      a9[i].addEventListener("click", function(){
          for(var i = 0; i < b9.length; i++){  
          if (a9[i].checked == true){
                b9[i].value = 'checked';
                a9[b9.length].style.display = 'block';
                s9[0].value = 'block';
                a9[b9.length].required = true;
          }else{
              b9[i].value = 'nonchecked';
              a9[b9.length].style.display = 'none';
              s9[0].value = 'none';
              a9[b9.length].required = false;
          }
          }

        });
 
    }
      for(var i = 0; i < b10.length; i++){

      if(a10[b10.length-1].value == 'Lainnya' || a10[b10.length-1].value == 'lainnya' || a10[b10.length-1].value == 'Other' || a10[b10.length-1].value == 'other'){
        if(a10[i].checked == true){
          a10[b10.length].style.display = 'block';
          a10[b10.length].required = true;
          b10[i].value = 'checked';
          s10[0].value = 'block';
        }else{
          a10[b10.length].style.display = 'none';
          b10[i].value = 'nonchecked';
          s10[0].value = 'none';
          a10[b10.length].required = false;
        }
        }else{
          if(a10[i].checked == true){
          b10[i].value = 'checked';
        }else{
          b10[i].value = 'nonchecked';
        }
      }

      a10[i].addEventListener("click", function(){
          for(var i = 0; i < b10.length; i++){  
          if (a10[i].checked == true){
                b10[i].value = 'checked';
                a10[b10.length].style.display = 'block';
                s10[0].value = 'block';
                a10[b10.length].required = true;
          }else{
              b10[i].value = 'nonchecked';
              a10[b10.length].style.display = 'none';
              s10[0].value = 'none';
              a10[b10.length].required = false;
          }
          }

        });
 
    }
      for(var i = 0; i < b11.length; i++){

      if(a11[b11.length-1].value == 'Lainnya' || a11[b11.length-1].value == 'lainnya' || a11[b11.length-1].value == 'Other' || a11[b11.length-1].value == 'other'){
        if(a11[i].checked == true){
          a11[b11.length].style.display = 'block';
          a11[b11.length].required = true;
          b11[i].value = 'checked';
          s11[0].value = 'block';
        }else{
          a11[b11.length].style.display = 'none';
          b11[i].value = 'nonchecked';
          s11[0].value = 'none';
          a11[b11.length].required = false;
        }
        }else{
          if(a11[i].checked == true){
          b11[i].value = 'checked';
        }else{
          b11[i].value = 'nonchecked';
        }
      }

      a11[i].addEventListener("click", function(){
          for(var i = 0; i < b11.length; i++){  
          if (a11[i].checked == true){
                b11[i].value = 'checked';
                a11[b11.length].style.display = 'block';
                s11[0].value = 'block';
                a11[b11.length].required = true;
          }else{
              b11[i].value = 'nonchecked';
              a11[b11.length].style.display = 'none';
              s11[0].value = 'none';
              a11[b11.length].required = false;
          }
          }

        });
 
    }
    for(var i = 0; i < b12.length; i++){

      if(a12[b12.length-1].value == 'Lainnya' || a12[b12.length-1].value == 'lainnya' || a12[b12.length-1].value == 'Other' || a12[b12.length-1].value == 'other'){
        if(a12[i].checked == true){
          a12[b12.length].style.display = 'block';
          a12[b12.length].required = true;
          b12[i].value = 'checked';
          s12[0].value = 'block';
        }else{
          a12[b12.length].style.display = 'none';
          b12[i].value = 'nonchecked';
          s12[0].value = 'none';
          a12[b12.length].required = false;
        }
        }else{
          if(a12[i].checked == true){
          b12[i].value = 'checked';
        }else{
          b12[i].value = 'nonchecked';
        }
      }

      a12[i].addEventListener("click", function(){
          for(var i = 0; i < b12.length; i++){  
          if (a12[i].checked == true){
                b12[i].value = 'checked';
                a12[b12.length].style.display = 'block';
                s12[0].value = 'block';
                a12[b12.length].required = true;
          }else{
              b12[i].value = 'nonchecked';
              a12[b12.length].style.display = 'none';
              s12[0].value = 'none';
              a12[b12.length].required = false;
          }
          }

        });
 
    }
        for(var i = 0; i < b13.length; i++){

      if(a13[b13.length-1].value == 'Lainnya' || a13[b13.length-1].value == 'lainnya' || a13[b13.length-1].value == 'Other' || a13[b13.length-1].value == 'other'){
        if(a13[i].checked == true){
          a13[b13.length].style.display = 'block';
          a13[b13.length].required = true;
          b13[i].value = 'checked';
          s13[0].value = 'block';
        }else{
          a13[b13.length].style.display = 'none';
          b13[i].value = 'nonchecked';
          s13[0].value = 'none';
          a13[b13.length].required = false;
        }
        }else{
          if(a13[i].checked == true){
          b13[i].value = 'checked';
        }else{
          b13[i].value = 'nonchecked';
        }
      }

      a13[i].addEventListener("click", function(){
          for(var i = 0; i < b13.length; i++){  
          if (a13[i].checked == true){
                b13[i].value = 'checked';
                a13[b13.length].style.display = 'block';
                s13[0].value = 'block';
                a13[b13.length].required = true;
          }else{
              b13[i].value = 'nonchecked';
              a13[b13.length].style.display = 'none';
              s13[0].value = 'none';
              a13[b13.length].required = false;
          }
          }

        });
 
    }
      for(var i = 0; i < b14.length; i++){

      if(a14[b14.length-1].value == 'Lainnya' || a14[b14.length-1].value == 'lainnya' || a14[b14.length-1].value == 'Other' || a14[b14.length-1].value == 'other'){
        if(a14[i].checked == true){
          a14[b14.length].style.display = 'block';
          a14[b14.length].required = true;
          b14[i].value = 'checked';
          s14[0].value = 'block';
        }else{
          a14[b14.length].style.display = 'none';
          b14[i].value = 'nonchecked';
          s14[0].value = 'none';
          a14[b14.length].required = false;
        }
        }else{
          if(a14[i].checked == true){
          b14[i].value = 'checked';
        }else{
          b14[i].value = 'nonchecked';
        }
      }

      a14[i].addEventListener("click", function(){
          for(var i = 0; i < b14.length; i++){  
          if (a14[i].checked == true){
                b14[i].value = 'checked';
                a14[b14.length].style.display = 'block';
                s14[0].value = 'block';
                a14[b14.length].required = true;
          }else{
              b14[i].value = 'nonchecked';
              a14[b14.length].style.display = 'none';
              s14[0].value = 'none';
              a14[b14.length].required = false;
          }
          }

        });
 
    }
      for(var i = 0; i < b15.length; i++){

      if(a15[b15.length-1].value == 'Lainnya' || a15[b15.length-1].value == 'lainnya' || a15[b15.length-1].value == 'Other' || a15[b15.length-1].value == 'other'){
        if(a15[i].checked == true){
          a15[b15.length].style.display = 'block';
          a15[b15.length].required = true;
          b15[i].value = 'checked';
          s15[0].value = 'block';
        }else{
          a15[b15.length].style.display = 'none';
          b15[i].value = 'nonchecked';
          s15[0].value = 'none';
          a15[b15.length].required = false;
        }
        }else{
          if(a15[i].checked == true){
          b15[i].value = 'checked';
        }else{
          b15[i].value = 'nonchecked';
        }
      }

      a15[i].addEventListener("click", function(){
          for(var i = 0; i < b15.length; i++){  
          if (a15[i].checked == true){
                b15[i].value = 'checked';
                a15[b15.length].style.display = 'block';
                s15[0].value = 'block';
                a15[b15.length].required = true;
          }else{
              b15[i].value = 'nonchecked';
              a15[b15.length].style.display = 'none';
              s15[0].value = 'none';
              a15[b15.length].required = false;
          }
          }

        });
 
    }
    if( ($("[name=f1]").val() == '' || $("[name=f1]").val() == null) 
        ||($("[name=f2]").val() == '' || $("[name=f2]").val() == null) 
        ||($("[name=f3]").val() == '' || $("[name=f3]").val() == null)
        ||($("[name=f4]").val() == '' || $("[name=f4]").val() == null) 
        ||($("[name=f5]").val() == '' || $("[name=f5]").val() == null) 
        ||($("[name=f6]").val() == '' || $("[name=f6]").val() == null)
        ||($("[name=f7]").val() == '' || $("[name=f7]").val() == null) 
        ||($("[name=f8]").val() == '' || $("[name=f8]").val() == null)
        ||($("[name=f9]").val() == '' || $("[name=f9]").val() == null) 
        ||($("[name=f10]").val() == '' || $("[name=f10]").val() == null) 
        ||($("[name=f11]").val() == '' || $("[name=f11]").val() == null)
        ||($("[name=f12]").val() == '' || $("[name=f12]").val() == null) 
        ||($("[name=f13]").val() == '' || $("[name=f13]").val() == null)
        ||($("[name=f14]").val() == '' || $("[name=f14]").val() == null) 
        ||($("[name=f15]").val() == '' || $("[name=f15]").val() == null) 
        ||($("[name=f16]").val() == '' || $("[name=f16]").val() == null)
        ||($("[name=f17]").val() == '' || $("[name=f17]").val() == null) 
        ||($("[name=f18]").val() == '' || $("[name=f18]").val() == null)
        ||($("[name=f19]").val() == '' || $("[name=f19]").val() == null) 
        ||($("[name=f20]").val() == '' || $("[name=f20]").val() == null) 
        ||($("[name=f21]").val() == '' || $("[name=f21]").val() == null)
        ||($("[name=f22]").val() == '' || $("[name=f22]").val() == null) 
        ||($("[name=f23]").val() == '' || $("[name=f23]").val() == null)
        ||($("[name=f24]").val() == '' || $("[name=f24]").val() == null) 

      ){
        $("#next").attr('disabled',true);
      }else{
        $("#next").attr('disabled',false);
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

      function zip1(){
        var arr = [];
        $('.attachment1').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no1';
      }

      function zip2(){
        var arr = [];
        $('.attachment2').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no2';
      }

      function zip3(){
        var arr = [];
        $('.attachment3').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no3';
      }

      function zip4(){
        var arr = [];
        $('.attachment4').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no4';
      }
      function zip5(){
        var arr = [];
        $('.attachment5').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no5';
      }

      function zip6(){
        var arr = [];
        $('.attachment6').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no6';
      }

      function zip7(){
        var arr = [];
        $('.attachment7').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no7';
      }

      function zip8(){
        var arr = [];
        $('.attachment8').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no8';
      }

      function zip9(){
        var arr = [];
        $('.attachment9').each(function() {
          arr.push($(this).html());
        });

        var $combine = 'name[]=' + arr.join('&name[]=');
        window.location = "<?php echo site_url('home/zip'); ?>?"+$combine + '&filename=<?php echo $profil[0]->id_projek.'_'.substr($profil[0]->nama_projek,0,25); ?>_no9';
      }
    </script>
  </body>
</html>