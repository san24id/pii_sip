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
              $komen1 = array();
              foreach($profil as $rowp=>$y):
                  array_push($id_projek, $y->id_projek);
                  array_push($status, $y->status);
                  array_push($komen1, $y->komen1);
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
                          <td><?php echo $pertanyaan[$x]; ?>&nbsp;<?php if($penjelasan[$x] == NULL || $penjelasan[$x] == ''){  }else{ ?> <i class="glyphicon glyphicon-info-sign" style="color: blue; cursor:pointer;" data-toggle="modal" data-target="#bnomor<?php echo $x; ?>"></i><?php } ?>
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
                                                <a href="<?php echo 'upload/'.$row->upload; ?>"><button type="button" class="btn btn-default btn-sm">Download FIle <?php echo $row->nomor_urut; ?></button></a>
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
                                                <button type="button" id="dw<?php echo $row->nomor_urut; ?>" class="btn btn-default btn-sm" style="<?php echo $nn; ?>">Download FIle <?php echo $row->nomor_urut; ?></button>
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
                                                <a href="<?php echo 'upload/'.$row->upload; ?>"><button type="button" class="btn btn-default btn-sm">Download FIle <?php echo $row->nomor_urut; ?></button></a>
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
                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                    TOTAL SKOR : <b><?php echo $totskor; ?></b>
                    <br>
                     <?php if($komen1[0] != '' || $komen1[0] != NULL){ ?>
                         <form method="post" action="dashboard/addrespon">
                        NOTE &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $id_projek[0]; ?>">
                          <input type="hidden" name="status" value="<?php echo $status[0]; ?>">
                          <input type="hidden"  name="user1" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea readonly class="form-control" cols="3" name="respon1" placeholder="Note" required><?php echo $komen1[0]; ?></textarea>
                        </form>
                      <?php } ?> 
                      <br>

                      <?php foreach ($resadmin as $res) ?> 
                      <?php if($status[0] == 6){ ?>
                         <form method="post" action="dashboard/addrespon">
                        Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $id_projek[0]; ?>">
                          <input type="hidden" name="status" value="<?php echo $status[0]; ?>">
                          <input type="hidden"  name="user1" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" required></textarea><br>
                        Last Admin User &nbsp;: &nbsp;
                          <input type="text" value="" readonly> &nbsp; &nbsp;
                          <input type="text" name="log_update" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update1)); ?>" placeholder="Last Update Admin User" readonly><br><br>
                          <button type="submit" class="btn btn-primary" name="save" value="draft">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                        </form>

                      <?php }else if($status[0] == 7){ 
                        foreach ($resadmin as $res) {?>
                        <form method="post" action="dashboard/updaterespon">
                     Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $id_projek[0]; ?>">
                          <input type="hidden" name="status" value="<?php echo $status[0]; ?>">
                          <input type="hidden"  name="user1" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" required><?php echo $res->respon1 ?></textarea><br>
                     Last Admin User &nbsp;: &nbsp;
                          <input type="text" value="<?php echo $res->user1 ?>" readonly>&nbsp; &nbsp;
                          <input type="text" name="log_update" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update1)); ?>" placeholder="Last Update Admin User" readonly><br><br>
                          <button type="submit" class="btn btn-primary" name="save" value="draft">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                        </form>

                       <?php }}else if($status[0] == 8){ 
                        foreach ($resadmin as $res) {?>
                        <form method="post" action="dashboard/updaterespon">
                     Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $id_projek[0]; ?>">
                          <input type="hidden" name="status" value="<?php echo $status[0]; ?>">
                          <input type="hidden"  name="user1" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" readonly><?php echo $res->respon1 ?></textarea><br>
                     Last Admin User &nbsp;: &nbsp;
                          <input type="text" value="<?php echo $res->user1 ?>" readonly>&nbsp; &nbsp;
                          <input type="text" name="log_update" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update2)); ?>" placeholder="Last Update Admin User" readonly><br><br>
                        </form>

                      <?php }}else if($status[0] == 9){ 
                    foreach ($resadmin as $res) { ?>
                        Rekomendasi &nbsp;: &nbsp;
                          <input type="hidden" name="id_projek" value="<?php echo $id_projek[0]; ?>">
                          <input type="hidden" name="status" value="<?php echo $status[0]; ?>">
                          <input type="hidden"  name="user2" value="<?php echo $this->session->userdata('username') ?>">
                          <textarea class="form-control" cols="3" name="respon1" placeholder="YOUR RESPON" readonly><?php echo $res->respon1 ?></textarea><br>
                     Last Admin User &nbsp;: &nbsp;
                          <input type="text" value="<?php echo $res->user1 ?>" readonly> &nbsp;<input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update1)); ?>" readonly><br><br>
                          <textarea class="form-control" cols="3" name="respon2" placeholder="YOUR RESPON" readonly><?php echo $res->respon2 ?></textarea><br>
                     Last Admin Approval &nbsp;: &nbsp;
                          <input type="text" value="<?php echo $res->user2 ?>" readonly> &nbsp;
                          <input type="text" value="<?php echo date("d-m-Y H:i:s", strtotime($res->log_update2)); ?>" readonly><br><br>
                      <?php }} ?>
                  </div>
                </div>
              </div>
            </div>

                <div class="box-footer">
                   <a href="dashboard/submissionpage"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>                   
                   <a href="Dashboard/FormVerifikasiProyekPDF/<?php echo $row->id_projek; ?>" target="_blank"><button type="button" class="btn btn-primary btn-sm">Export Informasi Proyek</button></a>
                   <a href="Dashboard/FormVerifikasiProyekPDF2/<?php echo $row->id_projek; ?>" target="_blank"><button type="button" class="btn btn-success btn-sm">Export Laporan Tindak Lanjut</button></a>
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

<?php
  for($x = 0; $x<$cn_assesment; $x++){
?>
<div class="modal fade" id="bnomor<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="bnomor<?php echo $x; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h5><p align="justify"><?php echo $penjelasan[$x]; ?></p><h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php } ?>

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
                            url: "<?php echo base_url("index.php/dashboard/kotakabu_edit"); ?>", // Isi dengan url/path file php yang dituju       
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
                            url: "<?php echo base_url("index.php/dashboard/listSubsektor_edit"); ?>", // Isi dengan url/path file php yang dituju       
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
                            url: "<?php echo base_url("index.php/dashboard/listKotabu"); ?>", // Isi dengan url/path file php yang dituju       
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
                            url: "<?php echo base_url("index.php/dashboard/listSubsektor"); ?>", // Isi dengan url/path file php yang dituju       
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