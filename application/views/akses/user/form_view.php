 
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
              $nomor = array();
              $pertanyaan = array();
              $penjelasan = array();
              $respon = array();
              $bobot = array();
              foreach ($assesment as $result=>$v):
                
                array_push($id_ass, $v->id_ass);
                array_push($nomor, $v->nomor_urut);
                array_push($pertanyaan, $v->creteria);
                array_push($penjelasan, $v->penjelasan);
                array_push($respon, $v->respon);
                array_push($bobot, $v->bobot);
              
              endforeach;

              $Y = array();
              $N = array();
              foreach ($skor as $key => $v):

                array_push($Y, $v->Y);
                array_push($N, $v->N);
                  
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
                <div class="box-footer">
                  <a href="Home/nextinclomplete2/<?php echo $rowp->id_projek; ?>"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>
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

   pi0[0].disabled = true;
   pi1[0].disabled = true;
   pi2[0].disabled = true;
   pi3[0].disabled = true;
   pi4[0].disabled = true;
   pi5[0].disabled = true;   
   pi6[0].disabled = true;
   pi7[0].disabled = true;
   pi8[0].disabled = true;
   pi9[0].disabled = true;
   pi10[0].disabled = true;
   pi11[0].disabled = true;
   pi12[0].disabled = true;
   pi13[0].disabled = true;
   pi14[0].disabled = true;


   pi0[1].disabled = true;
   pi1[1].disabled = true;
   pi2[1].disabled = true;
   pi3[1].disabled = true;
   pi4[1].disabled = true;
   pi5[1].disabled = true;   
   pi6[1].disabled = true;
   pi7[1].disabled = true;
   pi8[1].disabled = true;
   pi9[1].disabled = true;
   pi10[1].disabled = true;
   pi11[1].disabled = true;
   pi12[1].disabled = true;
   pi13[1].disabled = true;
   pi14[1].disabled = true;


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
        }else{
          a0[b0.length].style.display = 'none';
          b0[i].value = 'nonchecked';
          s0[0].value = 'none';
          a0[b0.length].required = false;
        }
        }else{
          if(a0[i].checked == true){
          b0[i].value = 'checked';
        }else{
          b0[i].value = 'nonchecked';
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
        }else{
          a1[b1.length].style.display = 'none';
          b1[i].value = 'nonchecked';
          s1[0].value = 'none';
          a1[b1.length].required = false;
        }
        }else{
          if(a1[i].checked == true){
          b1[i].value = 'checked';
        }else{
          b1[i].value = 'nonchecked';
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
        }else{
          a2[b2.length].style.display = 'none';
          b2[i].value = 'nonchecked';
          s2[0].value = 'none';
          a2[b2.length].required = false;
        }
        }else{
          if(a2[i].checked == true){
          b2[i].value = 'checked';
        }else{
          b2[i].value = 'nonchecked';
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
        }else{
          a3[b3.length].style.display = 'none';
          b3[i].value = 'nonchecked';
          s3[0].value = 'none';
          a3[b3.length].required = false;
        }
        }else{
          if(a3[i].checked == true){
          b3[i].value = 'checked';
        }else{
          b3[i].value = 'nonchecked';
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
        }else{
          a4[b4.length].style.display = 'none';
          b4[i].value = 'nonchecked';
          s4[0].value = 'none';
          a4[b4.length].required = false;
        }
        }else{
          if(a4[i].checked == true){
          b4[i].value = 'checked';
        }else{
          b4[i].value = 'nonchecked';
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
        }else{
          a5[b5.length].style.display = 'none';
          b5[i].value = 'nonchecked';
          s5[0].value = 'none';
          a5[b5.length].required = false;
        }
        }else{
          if(a5[i].checked == true){
          b5[i].value = 'checked';
        }else{
          b5[i].value = 'nonchecked';
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
        }else{
          a6[b6.length].style.display = 'none';
          b6[i].value = 'nonchecked';
          s6[0].value = 'none';
          a6[b6.length].required = false;
        }
        }else{
          if(a6[i].checked == true){
          b6[i].value = 'checked';
        }else{
          b6[i].value = 'nonchecked';
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
        }else{
          a7[b7.length].style.display = 'none';
          b7[i].value = 'nonchecked';
          s7[0].value = 'none';
          a7[b7.length].required = false;
        }
        }else{
          if(a7[i].checked == true){
          b7[i].value = 'checked';
        }else{
          b7[i].value = 'nonchecked';
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
        }else{
          a8[b8.length].style.display = 'none';
          b8[i].value = 'nonchecked';
          s8[0].value = 'none';
          a8[b8.length].required = false;
        }
        }else{
          if(a8[i].checked == true){
          b8[i].value = 'checked';
        }else{
          b8[i].value = 'nonchecked';
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

        $("#draft #draft2").on('click', function(){

          $("[name=nama_pj]").attr('required',false);
          $("[name=kt]").attr('required',false);
          $("[name=sektor]").attr('required',false);
          $("[name=subsektor]").attr('required',false);
          $("[name=nama_proyek]").attr('required',false);
          $("[name=lokasi]").attr('required',false);
          $("[name=estimasi]").attr('required',false);
          $("[name=nama]").attr('required',false);
          $("[name=jabatan]").attr('required',false);
          $("[name=telepon]").attr('required',false);

          for(i = 0; i<20; i++){
             $("[name=p"+i+"]").attr('required',false); 
             $(".dp"+i+" .areax").prop('required', false);
             $(".ac"+i+"").prop('required', false);
          }
          

          $("#form").submit();


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
        }


        if ( ($("[name=p0]:checked").length == 0) ||
              ($("[name=p1]:checked").length == 0) ||
              ($("[name=p2]:checked").length == 0) ||
              ($("[name=p3]:checked").length == 0) ||
              ($("[name=p4]:checked").length == 0) ||
              ($("[name=p5]:checked").length == 0) ||
              ($("[name=p6]:checked").length == 0) ||
              ($("[name=p7]:checked").length == 0) ||
              ($("[name=p8]:checked").length == 0) ||
              ($("[name=p9]:checked").length == 0) ||
              ($("[name=p10]:checked").length == 0) ||
              ($("[name=p11]:checked").length == 0) ||
              ($("[name=p12]:checked").length == 0) ||
              ($("[name=p13]:checked").length == 0) ||
              ($("[name=p14]:checked").length == 0) ){
          alert("Deskripsi Proyek harap dilengkapi semuanya");

           $("[name=p0]").attr('required',true);
           $("[name=p1]").attr('required',true);
           $("[name=p2]").attr('required',true);
           $("[name=p3]").attr('required',true);
           $("[name=p4]").attr('required',true);
           $("[name=p5]").attr('required',true);
           $("[name=p6]").attr('required',true);
           $("[name=p7]").attr('required',true);
           $("[name=p8]").attr('required',true);
           $("[name=p9]").attr('required',true);
           $("[name=p10]").attr('required',true);
           $("[name=p11]").attr('required',true);
           $("[name=p12]").attr('required',true);
           $("[name=p13]").attr('required',true);
           $("[name=p14]").attr('required',true);
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

          for(i = 0; i<20; i++){

            if( $(".y"+i+"").val() == 'checked'){
                $(".dp"+i+" .areax").prop('required', true);

                    if($(".ac"+i+":checked").length == 0){
                      $(".ac"+i+"").prop('required', true);
                    }else{
                      $(".ac"+i+"").prop('required', false);
                    }
            }else{
                $(".dp"+i+" .areax").prop('required', false);
                $(".ac"+i+"").prop('required', false);
            }

          }

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
            ($("[name=telepon]").val() != '') || 
            ($("[name=p0]:checked").length == 0) ||
            ($("[name=p1]:checked").length == 0) ||
            ($("[name=p2]:checked").length == 0) ||
            ($("[name=p3]:checked").length == 0) ||
            ($("[name=p4]:checked").length == 0) ||
            ($("[name=p5]:checked").length == 0) ||
            ($("[name=p6]:checked").length == 0) ||
            ($("[name=p7]:checked").length == 0) ||
            ($("[name=p8]:checked").length == 0) ||
            ($("[name=p9]:checked").length == 0) ||
            ($("[name=p10]:checked").length == 0) ||
            ($("[name=p11]:checked").length == 0) ||
            ($("[name=p12]:checked").length == 0) ||
            ($("[name=p13]:checked").length == 0) ||
            ($("[name=p14]:checked").length == 0)
          ){

          $("#form").submit();

        }

      });
    </script>
  </body>
</html>