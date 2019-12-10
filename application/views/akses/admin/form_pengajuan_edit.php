
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            FORM PROFIL PROYEK
            <small></small>
          </h1>
        </section>
        <!-- Main content -->
        <?php foreach($profil as $rowp){ ?>
        <form method="post" action="Home/action_updateprofil/<?php echo $rowp->id_projek; ?>">
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
                    <div class="box-body">
                      <div class="form-group">
                        <label>Status :</label>
                        <?php 
                          if($rowp->status == 1){
                              echo "<img src='assets/dashboard/images/legend/treatment.png'>Drafted";  
                          }else if($rowp->status == 2){
                             echo "<img src='assets/dashboard/images/legend/submit.png'>Incomplete";
                          }else if($rowp->status == 3){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>Complete";
                          }else if($rowp->status == 4){
                             echo "<img src='assets/dashboard/images/legend/verified.png'>Complete";
                          }else if($rowp->status == 5){
                             echo "<img src='assets/dashboard/images/legend/executed.png'>Finished";
                          } 
                          ?> 
                      </div>
                      <div class="form-group">
                         <label>1. Penanggung Jawab Proyek Kerjasama : <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#anomor1"></i></label>
                        <input type="hidden" name="id_projek" class="form-control" value="<?php echo $rowp->id_projek; ?>">
                        <input type="text" name="nama_pj" class="form-control" placeholder="Dirut Pertamina, Dirut PLN, Mentri BUMN" value="<?php echo $rowp->nama_pj; ?>" readonly>
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
                          $ck2 = 'disabled';
                          $ck3 = 'disabled';
                          $ck4 = 'disabled';
                          $ck5 = 'disabled';
                          $st1 = 'display: block;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 2){
                          $ck1 = 'disabled';
                          $ck2 = 'checked';
                          $ck3 = 'disabled';
                          $ck4 = 'disabled';
                          $ck5 = 'disabled';
                          $st1 = 'display: none;';
                          $st2 = 'display: block;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 3){
                          $ck1 = 'disabled';
                          $ck2 = 'disabled';
                          $ck3 = 'checked';
                          $ck4 = 'disabled';
                          $ck5 = 'disabled';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: block;';
                          $st4 = 'display: none;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 4){
                          $ck1 = 'disabled';
                          $ck2 = 'disabled';
                          $ck3 = 'disabled';
                          $ck4 = 'checked';
                          $ck5 = 'disabled';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: block;';
                          $st5 = 'display: none;';
                        }else if($rowp->kategori == 5){
                          $ck1 = 'disabled';
                          $ck2 = 'disabled';
                          $ck3 = 'disabled';
                          $ck4 = 'disabled';
                          $ck5 = 'checked';
                          $st1 = 'display: none;';
                          $st2 = 'display: none;';
                          $st3 = 'display: none;';
                          $st4 = 'display: none;';
                          $st5 = 'display: block;';
                        }else{
                          $ck1 = 'disabled';
                          $ck2 = 'disabled';
                          $ck3 = 'disabled';
                          $ck4 = 'disabled';
                          $ck5 = 'disabled';
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
                          <input type="radio" name="kt" value="1" id="pp" <?php echo $ck1; ?> onclick="yesnoCheck()">
                          Pemerintah Pusat
                          </label>
                        </div>
                        <div style="<?php echo $st1; ?>" id="rjenis">
                          <div class="radio">
                            <label></label>
                            <select class="select2 form-control" name="jenis" id="jenis" style="width: 150px;" disabled>
                              <?php if($rowp->jenis == 'Kementerian'){ ?>
                              <option value="Kementerian" selected="selected" readonly>Kementerian</option>
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
                          <input type="radio" name="kt"  value="2" id="pd" <?php echo $ck2; ?> onclick="yesnoCheck();">
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
                              <?php foreach($kotakabu as $row) { 
                                if($row['id_kotakabu'] == $rowp->n_kotakabu){
                                ?>
                              <option value="<?=$row['id_kotakabu']?>" selected><?=$row['nama_daerah']?></option>
                              <?php }else{ ?>
                              <option value="<?=$row['id_kotakabu']?>"><?=$row['nama_daerah']?></option>
                              <?php }} ?>
                            </select>
                          </div>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt" value="3" id="bn" <?php echo $ck3; ?> onclick="yesnoCheck();">
                          BUMN <input type="text" value="<?php echo $rowp->bumn_text; ?>" style="<?php echo $st3; ?>" class="form-control" name="bumn" id="rbn" readonly>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt"  value="4" id="bd" <?php echo $ck4; ?> onclick="yesnoCheck();">
                          BUMD <input type="text"  value="<?php echo $rowp->bumd_text; ?>" style="<?php echo $st4; ?>"  class="form-control" name="bumd" id="rbd" readonly>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                          <input type="radio" name="kt" value="5" id="ln" <?php echo $ck5; ?> onclick="yesnoCheck();">
                          Lainnya <input style="<?php echo $st5; ?>" type="text"  value="<?php echo $rowp->lainnya_text; ?>" class="form-control" name="lainnya" id="rln" readonly>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>3. Sektor Infrastruktur:</label>
                        <select class="form-control select2" name="sektor" style="width: 100%" disabled>
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
                      <div class="form-group">
                        <label>4. Nama Proyek :</label>
                        <input type="text" class="form-control" name="nama_proyek" value="<?php echo $rowp->nama_projek; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label title="tes">5. Lokasi Proyek :</label>
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
                          <label>7. Informasi PIC Proyek :<i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#anomor7"></i></label>
                          <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $rowp->nama; ?>" readonly>
                        </div>
                        <div class="col-md-4"> 
                          <label>-</label>
                          <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?php echo $rowp->jabatan; ?>" readonly>
                        </div>
                        <div class="col-md-4"> 
                         <label>-</label>
                          <input type="text" class="form-control" name="telepon" placeholder="telepon" value="<?php echo $rowp->telepon; ?>" readonly>
                        </div>
                      </div>
                    </div>
                      <?php } ?>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
            <?php 
              $nomor = array();
              $pertanyaan = array();
              $penjelasan = array();
              $respon = array();
              $bobot = array();
              foreach ($assesment as $result=>$v):
              
                array_push($nomor, $v->nomor_urut);
                array_push($pertanyaan, $v->creteria);
                array_push($penjelasan, $v->penjelasan);
                array_push($respon, $v->respon);
                array_push($bobot, $v->bobot);
              
              endforeach; 
              
              ?>
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">B. Deskripsi Proyek</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" id="form2">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>NO.</th>
                          <th>Criteria</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach ($g1 as $r1) {
                             if($r1->pilihan == 'Y'){
                                 $r1->N = 'disabled';
                            }else if($r1->pilihan == 'N'){
                                $r1->Y = 'disabled';
                            }
                          ?>
                        <tr>
                          <td><?php echo $nomor[0]; ?></td>
                         <td><?php echo $pertanyaan[0]; ?> <?php if($penjelasan[0] == NULL || $penjelasan[0] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor0"></i><?php } ?> <br> 
                            <input type="radio" name="d1" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r1->Y; ?>>YA&nbsp; <input type="radio" name="d1" id="optionsRadios2" class="checkradio" value="N" <?php echo $r1->N; ?>>Tidak 
                            <input type="hidden" name="d1skor" value="<?php echo $bobot[0]; ?>"> <input type="hidden" name="respon1" value="<?php echo $respon[0]; ?>">
                            <?php if($r1->upload != '' || $r1->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r1->upload; ?>"> <?php echo $r1->upload; ?></a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php 
                          }
                          foreach ($g2 as $r2){
                            if($r2->pilihan == 'Y'){
                                 $r2->N = 'disabled';
                            }else if($r2->pilihan == 'N'){
                                $r2->Y = 'disabled';
                            }
                          ?>
                        <tr>
                          <td><?php echo $nomor[1]; ?></td>
                           <td><?php echo $pertanyaan[1]; ?> <?php if($penjelasan[1] == NULL || $penjelasan[1] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor1"></i><?php } ?><br>
                            <input type="radio" name="d2" value="Y" class="checkradio" onclick="formb(this.name, this.value, 't2_txt')" <?php echo $r2->Y; ?>>YA&nbsp;
                            <input type="radio" name="d2" value="N" class="checkradio" onclick="formb(this.name, this.value, 't2_txt')" <?php echo $r2->N; ?>>Tidak <input type="hidden" name="d2skor" value="<?php echo $bobot[1]; ?>">
                            <div id="d2-container" style="display: none">
                              <br>
                              Jika Ya, sebutkan 3 (tiga) alasannya 
                              <br>
                              <textarea cols="3" class="form-control" name="t2_txt" readonly><?php echo $r2->t2_txt; ?></textarea>
                              <input type="hidden" name="respon2" value="<?php echo $respon[1]; ?>">
                            <?php if($r2->upload != '' || $r2->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r2->upload; ?>"> <?php echo $r2->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g3 as $r3){
                            if($r3->pilihan == 'Y'){
                                 $r3->N = 'disabled';
                            }else if($r3->pilihan == 'N'){
                                $r3->Y = 'disabled';
                            } 
                          ?>
                        <tr>
                          <td><?php echo $nomor[2]; ?></td>
                          <td><?php echo $pertanyaan[2]; ?> <?php if($penjelasan[2] == NULL || $penjelasan[2] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor2"></i><?php } ?><br>
                            <input type="radio" name="d3" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r3->Y; ?>>YA&nbsp;
                            <input type="radio" name="d3" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r3->N; ?>>Tidak <input type="hidden" name="d3skor" value="<?php echo $bobot[2]; ?>"> <input type="hidden" name="respon3" value="<?php echo $respon[2]; ?>">
                            <div id="d3-container" style="display: none">
                              <br>
                              Jika Ya, melalui media: pilih minimal satu 
                              <br>
                              <input type="checkbox" name="t3_1" id="optionsRadios2" class="checkradio" value="1"  <?php echo $r3->t3_1a; ?> disabled>Media massa<input type="hidden" name="t3_1txt" value="Media massa"><br>
                              <input type="checkbox" name="t3_2" id="optionsRadios2" class="checkradio" value="2"  <?php echo $r3->t3_2a; ?> disabled>Forum masyarakat/sosialisasi<input type="hidden" name="t3_2txt" value="Forum masyarakat/sosialisasi"><br>
                              <input type="checkbox" name="t3_3" id="optionsRadios2" class="checkradio" value="3"  <?php echo $r3->t3_3a; ?> disabled>Lainnya <input type="hidden" name="t3_3txt" value="Lainnya"> <input type="text" name="t3_4txt" value="<?php echo $r3->t3_4txt; ?>" readonly>
                            <?php if($r3->upload != '' || $r3->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r3->upload; ?>"> <?php echo $r3->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g4 as $r4){ 
                           if($r4->pilihan == 'Y'){
                                 $r4->N = 'disabled';
                            }else if($r4->pilihan == 'N'){
                                $r4->Y = 'disabled';
                            }

                          ?>
                        <tr>
                          <td><?php echo $nomor[3]; ?></td>
                          <td><?php echo $pertanyaan[3]; ?> <?php if($penjelasan[3] == NULL || $penjelasan[3] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor3"></i><?php } ?>
                            <br>
                            <input type="radio" name="d4" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r4->Y; ?>>YA&nbsp;
                            <input type="radio" name="d4" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r4->N; ?>>Tidak <input type="hidden" name="d4skor" value="<?php echo $bobot[3]; ?>"> <input type="hidden" name="respon4" value="<?php echo $respon[3]; ?>">
                            <div id="d4-container" style="display: none">
                              <br>
                              Jika Ya, melalui media: pilih minimal satu 
                              <br>
                              <input type="checkbox" name="t4_1" id="optionsRadios2" class="checkradio" value="1" <?php echo $r4->t4_1a; ?> disabled>RPJMN/D<input type="hidden" name="t4_1txt" value="RPJMN/D"><br>
                              <input type="checkbox" name="t4_2" id="optionsRadios2" class="checkradio" value="2" <?php echo $r4->t4_2a; ?> disabled>RTRW<input type="hidden" name="t4_2txt" value="RTRW"><br>
                              <input type="checkbox" name="t4_3" id="optionsRadios2" class="checkradio" value="3" <?php echo $r4->t4_3a; ?> disabled>Lainnya<input type="hidden" name="t4_3txt" value="Lainnya"> <input type="text" name="t4_4txt" value="<?php echo $r4->t4_4txt; ?>" readonly>
                            <?php if($r4->upload != '' || $r4->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r4->upload; ?>"> <?php echo $r4->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php  }
                          foreach ($g5 as $r5){ 
                            if($r5->pilihan == 'Y'){
                                 $r5->N = 'disabled';
                            }else if($r5->pilihan == 'N'){
                                $r5->Y = 'disabled';
                            }

                            ?>
                         <tr>
                          <td><?php echo $nomor[4]; ?></td>
                          <td><?php echo $pertanyaan[4]; ?> <?php if($penjelasan[4] == NULL || $penjelasan[4] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor4"></i><?php } ?><br><input type="radio" name="d5" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r5->Y; ?>>YA&nbsp; <input type="radio" name="d5" id="optionsRadios2" class="checkradio" value="N" <?php echo $r5->N; ?>>Tidak <input type="hidden" name="d5skor" value="<?php echo $bobot[4]; ?>"><input type="hidden" name="respon5" value="<?php echo $respon[4]; ?>">
                            <?php if($r5->upload != '' || $r5->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r5->upload; ?>"> <?php echo $r5->upload; ?></a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php 
                          }
                          foreach ($g6 as $r6){ 
                            if($r6->pilihan == 'Y'){
                                 $r6->N = 'disabled';
                            }else if($r6->pilihan == 'N'){
                                $r6->Y = 'disabled';
                            }
                            ?>
                          <tr>
                          <td><?php echo $nomor[5]; ?></td>
                         <td><?php echo $pertanyaan[5]; ?> <?php if($penjelasan[5] == NULL || $penjelasan[5] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor5"></i><?php } ?><br>
                            <input type="radio" name="d6" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r6->Y; ?>>YA&nbsp;
                            <input type="radio" name="d6" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r6->N; ?>>Tidak <input type="hidden" name="d6skor" value="<?php echo $bobot[5]; ?>"><input type="hidden" name="respon6" value="<?php echo $respon[5]; ?>">
                            <div id="d6-container" style="display: none">
                              <br>
                              Jika Ya, bagaimana status kepemilikan lahan tersebut pilih salah satu:
                              <br>
                              <input type="radio" name="t6_1" id="optionsRadios2" class="checkradio" value="1" <?php echo $r6->t6_1a; ?> disabled>Tanah Ulayat <input type="hidden" name="t6_1txt" value="Tanah Ulayat"> <br>
                              <input type="radio" name="t6_1" id="optionsRadios2" class="checkradio" value="2" <?php echo $r6->t6_1b; ?> disabled>Tanah Hutan Lindung <input type="hidden" name="t6_2txt" value="Tanah Hutan Lindung"><br>
                              <input type="radio" name="t6_1" id="optionsRadios2" class="checkradio" value="3" <?php echo $r6->t6_1c; ?> disabled>Tanah Masyarakat<input type="hidden" name="t6_3txt" value="Tanah Masyarakat"><br>
                              <input type="radio" name="t6_1" id="optionsRadios2" class="checkradio" value="4" <?php echo $r6->t6_1d; ?> disabled>Tanah Pemerintah<input type="hidden" name="t6_4txt" value="Tanah Pemerintah"><br>
                              <input type="radio" name="t6_1" id="optionsRadios2" class="checkradio" value="5" <?php echo $r6->t6_1e; ?> disabled>Lainnya<input type="hidden" name="t6_5txt" value="Lainnya"><input type="text" name="t6_2" value="<?php echo $r6->t6_2; ?>" readonly>
                              <?php if($r6->upload != '' || $r6->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r6->upload; ?>"> <?php echo $r6->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g7 as $r7){ 
                            if($r7->pilihan == 'Y'){
                                 $r7->N = 'disabled';
                            }else if($r7->pilihan == 'N'){
                                $r7->Y = 'disabled';
                            }
                            ?>
                        <tr>
                          <td><?php echo $nomor[6]; ?></td>
                          <td><?php echo $pertanyaan[6]; ?> <?php if($penjelasan[6] == NULL || $penjelasan[6] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor6"></i><?php } ?><br>
                            <input type="radio" name="d7" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r7->Y; ?>>YA&nbsp;
                            <input type="radio" name="d7" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r7->N; ?>>Tidak <input type="hidden" name="d7skor" value="<?php echo $bobot[6]; ?>"><input type="hidden" name="d6skor" value="10"><input type="hidden" name="respon7" value="<?php echo $respon[6]; ?>">
                            <div id="d7-container" style="display: none">
                              <br>
                              Jika Ya, Dokumen apa saja: pilih minimal satu
                              <br>
                              <input type="checkbox" name="t7_1" id="optionsRadios2" class="checkradio" value="1" <?php echo $r7->t7_1a; ?> disabled>Master Plan <input type="hidden" name="t7_1txt" value="Master Plan"><br>
                              <input type="checkbox" name="t7_2" id="optionsRadios2" class="checkradio" value="2" <?php echo $r7->t7_2a; ?> disabled><i>Detail Engineering Designed</i> (DED) <input type="hidden" name="t7_2txt" value="Detail Engineering Designed (DED)"><br>
                              <input type="checkbox" name="t7_3" id="optionsRadios2" class="checkradio" value="3" <?php echo $r7->t7_3a; ?> disabled>Kajian Kelayakan /<I> Feasibility Study</I> <input type="hidden" name="t7_3txt" value="Kajian Kelayakan / Feasibility Study"><br>
                              <input type="checkbox" name="t7_4" id="optionsRadios2" class="checkradio" value="4" <?php echo $r7->t7_4a; ?> disabled>AMDAL <input type="hidden" name="t7_4txt" value="AMDAL"><br>
                              <input type="checkbox" name="t7_5" id="optionsRadios2" class="checkradio" value="5" <?php echo $r7->t7_5a; ?> disabled>Lainnya <input type="hidden" name="t7_5txt" value="Lainnya"> <input type="text" name="t7_6txt" value="<?php echo $r7->t7_6txt; ?>" readonly><br>
                              <?php if($r7->upload != '' || $r7->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r7->upload; ?>"> <?php echo $r7->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php } 
                          foreach ($g8 as $r8){ 
                            if($r8->pilihan == 'Y'){
                                 $r8->N = 'disabled';
                            }else if($r8->pilihan == 'N'){
                                $r8->Y = 'disabled';
                            }
                            ?>
                        <tr>
                          <td><?php echo $nomor[7]; ?></td>
                          <td><?php echo $pertanyaan[7]; ?> <?php if($penjelasan[7] == NULL || $penjelasan[7] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor7"></i><?php } ?><br><input type="radio" name="d8" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r8->Y; ?>>YA&nbsp; <input type="radio" name="d8" id="optionsRadios2" class="checkradio" value="N" <?php echo $r8->N; ?>>Tidak <input type="hidden" name="d8skor" value="<?php echo $bobot[7]; ?>"><input type="hidden" name="respon8" value="<?php echo $respon[7]; ?>">
                            <?php if($r8->upload != '' || $r8->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r8->upload; ?>"> <?php echo $r8->upload; ?></a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php } 
                          foreach ($g9 as $r9){ 
                            if($r9->pilihan == 'Y'){
                                 $r9->N = 'disabled';
                            }else if($r9->pilihan == 'N'){
                                $r9->Y = 'disabled';
                            }
                            ?>
                       <tr>
                          <td><?php echo $nomor[8]; ?></td>
                          <td><?php echo $pertanyaan[8]; ?> <?php if($penjelasan[8] == NULL || $penjelasan[8] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor8"></i><?php } ?><br>
                            <input type="radio" name="d9" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r9->Y; ?>>YA&nbsp;
                            <input type="radio" name="d9" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r9->N; ?>>Tidak <input type="hidden" name="d9skor" value="<?php echo $bobot[8]; ?>"><input type="hidden" name="respon9" value="<?php echo $respon[8]; ?>">
                            <div id="d9-container" style="display: none">
                              <br>
                              Jika Ya, alasan: pilih minimal satu
                              <br>
                              <input type="checkbox" name="t9_1" id="optionsRadios2" class="checkradio" value="1" <?php echo $r9->t9_1a; ?> disabled>Keterbatasan Anggaran untuk Proyek <input type="hidden" name="t9_1txt" value="Keterbatasan Anggaran untuk Proyek"><br>
                              <input type="checkbox" name="t9_2" id="optionsRadios2" class="checkradio" value="2" <?php echo $r9->t9_2a; ?> disabled>Peningkatan Pelayanan <input type="hidden" name="t9_2txt" value="Peningkatan Pelayanan"><br>
                              <input type="checkbox" name="t9_3" id="optionsRadios2" class="checkradio" value="3" <?php echo $r9->t9_3a; ?> disabled>Peningkatan Kapasitas SDM melalui alih pengetahuan dan teknologi <input type="hidden" name="t9_3txt" value="Peningkatan Kapasitas SDM melalui alih pengetahuan dan teknologi"><br>
                              <input type="checkbox" name="t9_4" id="optionsRadios2" class="checkradio" value="4" <?php echo $r9->t9_4a; ?> disabled>Lainnya  <input type="hidden" name="t9_4txt" value="Lainnya"> <input type="text" name="t9_5txt" value="<?php echo $r9->t9_5txt; ?>" readonly>
                              <?php if($r9->upload != '' || $r9->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r9->upload; ?>"> <?php echo $r9->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g10 as $r10){ 
                            if($r10->pilihan == 'Y'){
                                 $r10->N = 'disabled';
                            }else if($r10->pilihan == 'N'){
                                $r10->Y = 'disabled';
                            }
                          ?>
                          <tr>
                          <td><?php echo $nomor[9]; ?></td>
                          <td><?php echo $pertanyaan[9]; ?> <?php if($penjelasan[9] == NULL || $penjelasan[9] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor9"></i><?php } ?><br><input type="radio" name="d10" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r10->Y; ?>>YA&nbsp; <input type="radio" name="d10" id="optionsRadios2" class="checkradio" value="N" <?php echo $r10->N; ?>>Tidak <input type="hidden" name="d10skor" value="<?php echo $bobot[9]; ?>"><input type="hidden" name="respon10" value="<?php echo $respon[9]; ?>">
                            <?php if($r10->upload != '' || $r10->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r10->upload; ?>"> <?php echo $r10->upload; ?></a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g11 as $r11){ 
                            if($r11->pilihan == 'Y'){
                                 $r11->N = 'disabled';
                            }else if($r11->pilihan == 'N'){
                                $r11->Y = 'disabled';
                            }
                            ?>
                       <tr>
                          <td><?php echo $nomor[10]; ?></td>
                          <td><?php echo $pertanyaan[10]; ?> <?php if($penjelasan[10] == NULL || $penjelasan[10] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor10"></i><?php } ?><br>
                            <input type="radio" name="d11" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value, 't11_txt')" <?php echo $r11->Y; ?>>YA&nbsp;
                            <input type="radio" name="d11" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value, 't11_txt')" <?php echo $r11->N; ?>>Tidak <input type="hidden" name="d11skor" value="<?php echo $bobot[10]; ?>"><input type="hidden" name="respon11" value="<?php echo $respon[10]; ?>">
                            <div id="d11-container" style="display: none">
                              <br>
                              Jika Ya, sebutkan
                              <br>
                              <textarea cols="3" class="form-control" name="t11_txt" readonly><?php echo $r11->t11_txt; ?></textarea>
                              <?php if($r11->upload != '' || $r11->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r11->upload; ?>"> <?php echo $r11->upload; ?></a>
                            <?php } ?>
                            </div>
                        </tr>
                        <?php }
                          foreach ($g12 as $r12){ 
                            if($r12->pilihan == 'Y'){
                                 $r12->N = 'disabled';
                            }else if($r12->pilihan == 'N'){
                                $r12->Y = 'disabled';
                            }

                            ?>
                        <tr>
                          <td><?php echo $nomor[11]; ?></td>
                          <td><?php echo $pertanyaan[11]; ?> <?php if($penjelasan[11] == NULL || $penjelasan[11] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor11"></i><?php } ?><br>
                            <input type="radio" name="d12" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value)" <?php echo $r12->Y; ?>>YA&nbsp;
                            <input type="radio" name="d12" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value)" <?php echo $r12->N; ?>>Tidak <input type="hidden" name="d12skor" value="<?php echo $bobot[11]; ?>"><input type="hidden" name="respon12" value="<?php echo $respon[11]; ?>">
                            <div id="d12-container" style="display: none">
                              <br>
                              Jika Ya, dukungan Saudara yang ada ketahui: pilih minimal satu
                              <br>
                              <input type="checkbox" name="t12_1" id="optionsRadios2" class="checkradio" value="1" <?php echo $r12->t12_1a; ?> disabled>Subsidi Konstruksi (VGF) <input type="hidden" name="t12_1txt" value="Subsidi Konstruksi (VGF)"><br>
                              <input type="checkbox" name="t12_2" id="optionsRadios2" class="checkradio" value="2" <?php echo $r12->t12_2a; ?> disabled>Penjaminan Pemerintah <input type="hidden" name="t12_2txt" value="Penjaminan Pemerintah"><br>
                              <input type="checkbox" name="t12_3" id="optionsRadios2" class="checkradio" value="3" <?php echo $r12->t12_3a; ?> disabled>Fasilitas Penyiapan Proyek <input type="hidden" name="t12_3txt" value="Fasilitas Penyiapan Proyek"><br>
                              <input type="checkbox" name="t12_4" id="optionsRadios2" class="checkradio" value="4" <?php echo $r12->t12_4a; ?> disabled>Lainnya <input type="hidden" name="t12_4txt" value="Lainnya"> <input type="text" name="t12_5txt" value="<?php echo $r12->t12_5txt; ?>" readonly>
                              <?php if($r12->upload != '' || $r12->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r12->upload; ?>"> <?php echo $r12->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g13 as $r13){ 
                            if($r13->pilihan == 'Y'){
                                 $r13->N = 'disabled';
                            }else if($r13->pilihan == 'N'){
                                $r13->Y = 'disabled';
                            }
                            ?>
                        <tr>
                          <td><?php echo $nomor[12]; ?></td>
                           <td><?php echo $pertanyaan[12]; ?> <?php if($penjelasan[12] == NULL || $penjelasan[12] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor12"></i><?php } ?><br>
                            <input type="radio" name="d13" id="optionsRadios2" class="checkradio" value="Y" onclick="formb(this.name, this.value, 't13_txt')" <?php echo $r13->Y; ?>>YA&nbsp;
                            <input type="radio" name="d13" id="optionsRadios2" class="checkradio" value="N" onclick="formb(this.name, this.value, 't13_txt')" <?php echo $r13->N; ?>>Tidak <input type="hidden" name="d13skor" value="<?php echo $bobot[12]; ?>"><input type="hidden" name="respon13" value="<?php echo $respon[12]; ?>">
                            <div id="d13-container" style="display: none">
                              <br>
                              Jika Ya, jelaskan bentuk dukungan nya seperti apa:
                              <br>
                              <textarea cols="3" class="form-control" name="t13_txt" readonly><?php echo $r13->t13_txt; ?></textarea>
                             <?php if($r13->upload != '' || $r13->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r13->upload; ?>"> <?php echo $r13->upload; ?></a>
                            <?php } ?>
                            </div>
                          </td>
                        </tr>
                        <?php }
                          foreach ($g14 as $r14){ 
                            if($r14->pilihan == 'Y'){
                                 $r14->N = 'disabled';
                            }else if($r14->pilihan == 'N'){
                                $r14->Y = 'disabled';
                            }
                            ?>
                          <tr>
                          <td><?php echo $nomor[13]; ?></td>
                         <td><?php echo $pertanyaan[13]; ?> <?php if($penjelasan[13] == NULL || $penjelasan[13] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor13"></i><?php } ?><br><input type="radio" name="d14" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r14->Y; ?>>YA&nbsp; <input type="radio" name="d14" id="optionsRadios2" class="checkradio" value="N" <?php echo $r14->N; ?>>Tidak <input type="hidden" name="d14skor" value="<?php echo $bobot[13]; ?>"><input type="hidden" name="respon14" value="<?php echo $respon[13]; ?>">
                            <?php if($r14->upload != '' || $r14->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r14->upload; ?>"> <?php echo $r14->upload; ?></a>
                            <?php } ?>
                         </td>
                        </tr>
                        <?php } 
                          foreach ($g15 as $r15){ 
                             if($r15->pilihan == 'Y'){
                                 $r15->N = 'disabled';
                            }else if($r15->pilihan == 'N'){
                                $r15->Y = 'disabled';
                            }

                            ?>
                        <tr>
                          <td><?php echo $nomor[14]; ?></td>
                          <td><?php echo $pertanyaan[14]; ?> <?php if($penjelasan[14] == NULL || $penjelasan[14] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor14"></i><?php } ?><br><input type="radio" name="d15" id="optionsRadios2" class="checkradio" value="Y" <?php echo $r15->Y; ?>>YA&nbsp; <input type="radio" name="d15" id="optionsRadios2" class="checkradio" value="N" <?php echo $r15->N; ?>>Tidak <input type="hidden" name="d15skor" value="<?php echo $bobot[14]; ?>"><input type="hidden" name="respon15" value="<?php echo $respon[14]; ?>">
                            <?php if($r15->upload != '' || $r15->upload != NULL){ ?>
                              <br>
                              <i>Attachment</i>&nbsp;: &nbsp;<a href="<?php echo 'upload/'.$r15->upload; ?>"> <?php echo $r15->upload; ?></a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="Dashboard/submissionpage"><button type="button" class="btn btn-warning">Kembali</button></a>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.row -->
          </section>
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
            <div class="modal-body">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                      <input type="hidden" name="id_projek" value="<?php echo $rowp->id_projek; ?>" />
                      <input type="hidden" name="status" value="<?php echo $rowp->status; ?>" />
                      <div class="box-body">
                        <table class="table table-bordered table-striped">
                          <tbody>
                            <?php 
                              $i = 1;
                              foreach ($getrespon as $res) {
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
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
      
    
      
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e){
          // tambahkan 'Rp.' pada saat form di ketik
          // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
          rupiah.value = formatRupiah(this.value, 'Rp. ');
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
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }  
      
      // For action button
      $("#draft, #draft2").on('click', function(){
        $("#subaction").val('draft');
        $("#form").validate();
        $("#form").submit();
      });
      $("#next").on('click', function(){
        $("#subaction").val('next');

        // Validate form1 & form2 harus diisi semua kalau pilih next
        if ( ($("[name=lokasi]").val() == '') || ($("[name=estimasi]").val() == '') || ($("[name=nama]").val() == '') || ($("[name=telepon]").val() == '') || ($("[name=jabatan]").val() == '') ){
          alert("Profil Proyek harap dilengkapi semuanya");
          return false;
        }
        if ( ($("#form2 [name=d1]").prop("checked") == false) ||
              ($("#form2 [name=d2]").prop("checked") == false) ||
              ($("#form2 [name=d3]").prop("checked") == false) ||
              ($("#form2 [name=d4]").prop("checked") == false) ||
              ($("#form2 [name=d5]").prop("checked") == false) ||
              ($("#form2 [name=d6]").prop("checked") == false) ||
              ($("#form2 [name=d7]").prop("checked") == false) ||
              ($("#form2 [name=d8]").prop("checked") == false) ||
              ($("#form2 [name=d9]").prop("checked") == false) ||
              ($("#form2 [name=d10]").prop("checked") == false) ||
              ($("#form2 [name=d11]").prop("checked") == false) ||
              ($("#form2 [name=d12]").prop("checked") == false) ||
              ($("#form2 [name=d13]").prop("checked") == false) ||
              ($("#form2 [name=d14]").prop("checked") == false) ||
              ($("#form2 [name=d15]").prop("checked") == false) ){
          alert("Deskripsi Proyek harap dilengkapi semuanya");
          return false;
        }

        $("#form").validate();

        // Check ada checked atau tidak, minimal 1 checked
        if($("[name=d3]").prop("checked") == true){
          if ( ($("[name=t3_1]").prop("checked") == false) && ($("[name=t3_2]").prop("checked") == false) && ($("[name=t3_3]").prop("checked") == false) ){
            alert("Deskripsi Proyek No 3 harap dilengkapi");
            return false;
          }
        }
        if($("[name=d4]").prop("checked") == true){
          if ( ($("[name=t4_1]").prop("checked") == false) && ($("[name=t4_2]").prop("checked") == false) && ($("[name=t4_3]").prop("checked") == false) ){
            alert("Deskripsi Proyek No 4 harap dilengkapi");
            return false;
          }
        }
        if($("[name=d7]").prop("checked") == true){
          if ( ($("[name=t7_1]").prop("checked") == false) && ($("[name=t7_2]").prop("checked") == false) && ($("[name=t7_3]").prop("checked") == false) && ($("[name=t7_4]").prop("checked") == false) && ($("[name=t7_5]").prop("checked") == false) ){
            alert("Deskripsi Proyek No 7 harap dilengkapi");
            return false;
          }
        }
        if($("[name=d9]").prop("checked") == true){
          if ( ($("[name=t9_1]").prop("checked") == false) && ($("[name=t9_2]").prop("checked") == false) && ($("[name=t9_3]").prop("checked") == false) && ($("[name=t9_4]").prop("checked") == false) ){
            alert("Deskripsi Proyek No 9 harap dilengkapi");
            return false;
          }
        }
        if($("[name=d12]").prop("checked") == true){
          if ( ($("[name=t12_1]").prop("checked") == false) && ($("[name=t12_2]").prop("checked") == false) && ($("[name=t12_3]").prop("checked") == false) && ($("[name=t12_4]").prop("checked") == false) ){
            alert("Deskripsi Proyek No 12 harap dilengkapi");
            return false;
          }
        }

        $("#form").submit();
      });

      // For action yes / no container
      function formb(id='', value='', required_name='')
      {
        if (value == 'Y'){
          $("#"+id+"-container").show();
          if (required_name != ''){
            $("[name="+required_name+"]").attr('required', true);
          }
        }else{
          $("#"+id+"-container").hide();
          if (required_name != ''){
            $("[name="+required_name+"]").attr('required', false);
          }
        }
      }

      // Required Lainnya
      $("[name=t3_3]").on('click', function(){
        $("[name=t3_4txt]").attr('required', false);
        if($("[name=t3_3]").prop("checked") == true){
          $("[name=t3_4txt]").attr('required', true);
        }
      });
      $("[name=t4_3]").on('click', function(){
        $("[name=t4_4txt]").attr('required', false);
        if($("[name=t4_3]").prop("checked") == true){
          $("[name=t4_4txt]").attr('required', true);
        }
      });
      $("[name=t6_1]").on('click', function(){
        $("[name=t6_2]").attr('required', false);
        if($("[name=t6_1]").prop("checked") == true){
          $("[name=t6_2]").attr('required', true);
        }
      });
      $("[name=t7_5]").on('click', function(){
        $("[name=t7_6txt]").attr('required', false);
        if($("[name=t7_5]").prop("checked") == true){
          $("[name=t7_6txt]").attr('required', true);
        }
      });
      $("[name=t9_4]").on('click', function(){
        $("[name=t9_5txt]").attr('required', false);
        if($("[name=t9_4]").prop("checked") == true){
          $("[name=t9_5txt]").attr('required', true);
        }
      });
      $("[name=t12_4]").on('click', function(){
        $("[name=t12_5txt]").attr('required', false);
        if($("[name=t12_4]").prop("checked") == true){
          $("[name=t12_5txt]").attr('required', true);
        }
      });
      $("[name=t6_1]").on('click', function(){
        $("[name=t6_2]").attr('required', false);
        if($("[name=t6_1]").prop("checked") == true){
          $("[name=t6_2]").attr('required', true);
        }
      });

      // Edit : Autoload yes display
      for (var i = 1; i <= 15; i++) {
        if ( $("#form2 [name=d"+i+"]").prop("checked") == true ){
          $("#form2 [name=d"+i+"]:radio:first").click();
        }
      }
    </script>
  </body>
</html>