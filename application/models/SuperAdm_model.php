 <?php

class SuperAdm_model extends CI_model {

    public function getassesment(){
        $sql = "SELECT * FROM t_assessment";
        $query = $this->db->query($sql)->result();

        return $query;
    }
    
    function getsum(){
        $sql = "SELECT SUM(bobot) as bobot FROM t_assessment";
        $result = $this->db->query($sql);

        return $result->row()->bobot;
        }

    function addassesment($add){
        // $cari_jumlah_bobot = "SELECT SUM(bobot) FROM t_assessment";
        // $jumlah_bobot = $this->db->query($cari_jumlah_bobot);
        // $penjumlahan = $add['bobot'];
        // $hasil_penjumlahan = $jumlah_bobot + $penjumlahan; 
        // // var_dump($jumlah_bobot);exit;
        // if($hasil_penjumlahan <= 100){        
	       //  $sql = "INSERT INTO `t_assessment`(`nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `respon`, `bobot` ) 
        //     VALUES ('".$add['nomor_urut']."','".$add['creteria']."','".$add['intruksi_upload']."','".$add['penjelasan']."',
        //     '".$add['informasi_upload']."','".$add['respon']."','".$add['bobot']."')";
        
	       //  $query = $this->db->query($sql);
        
	       //  return $query;
        //     }else{
	       //      die('Bobot Maksimal 100!!!');
        // }

          $sql = "INSERT INTO `imp_assessment`(section, `nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `respon`, `bobot`, s_upload, s_upload2) 
                    VALUES ('".$add['section']."', '".$add['nomor_urut']."','".$add['creteria']."','".$add['intruksi_upload']."','".$add['penjelasan']."',
                 '".$add['informasi_upload']."','".$add['respon']."','".$add['bobot']."', '".$add['s_upload']."', 0)";
        
         $query = $this->db->query($sql);

         $rid = $this->db->insert_id();

        $sql = "DELETE FROM `imp_m1` WHERE `imp_m1`.`idass` = $rid";

        $query = $this->db->query($sql);

        $sql = "INSERT INTO `imp_m1`(`idass`, `nomor_urut`, `urut`, `a`, `b`, `su`) VALUES ('".$rid."','".$add['nomor_urut']."','0','','not','0')";

        $query = $this->db->query($sql);

        return $query;


        
    }
       
    function updateassesment($upd){
        $sql = "UPDATE `imp_assessment` SET section = '".$upd['section']."', `nomor_urut`='".$upd['nomor_urut']."',`creteria`='".$upd['creteria']."',`intruksi_upload`='".$upd['intruksi_upload']."',`penjelasan`='".$upd['penjelasan']."',
        `informasi_upload`='".$upd['informasi_upload']."',`respon`='".$upd['respon']."',`bobot`='".$upd['bobot']."', s_upload = '".$upd['s_upload']."' WHERE `id_ass`='".$upd['id_ass']."'"; 
        
        $query = $this->db->query($sql);

        $sql = "UPDATE `imp_m1` SET `nomor_urut`='".$upd['nomor_urut']."' WHERE `id`='".$upd['id']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deleteassesment($id){
        $sql = "DELETE FROM `imp_assessment` WHERE `imp_assessment`.`id_ass` = $id";

        $query = $this->db->query($sql);

        $sql = "DELETE FROM `imp_m1` WHERE `imp_m1`.`idass` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getm1(){
        $sql = "SELECT * FROM m1";
        
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addm1($add){
        $sql = "INSERT INTO `imp_m1`(`idass`, `nomor_urut`, `urut`, `a`, `b`, `su` ) 
        VALUES ('".$add['id_ass']."',(SELECT nomor_urut FROM imp_assessment WHERE id_ass = '".$add['id_ass']."'),'".$add['urut']."','".$add['a']."','".$add['b']."','0')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatem1($upd){
        $sql = "UPDATE `imp_m1` SET `idass`='".$upd['id_ass']."',`nomor_urut`='".$upd['nomor_urut']."',`urut`='".$upd['urut']."',`a`='".$upd['a']."',
        `b`='".$upd['b']."',`su`='0' WHERE `id`='".$upd['id']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletem1($id){
        $sql = "DELETE FROM `imp_m1` WHERE `imp_m1`.`id` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getkementrian(){
        $sql = "SELECT * FROM t_kementerian";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addkementerian($add){
        $sql = "INSERT INTO `t_kementerian`(`id_kementerian`, `nama_kementerian` ) 
        VALUES ('".$add['id_kementerian']."'.'".$add['nama_kementerian']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatekementrian($upd){
        $sql = "UPDATE `t_kementerian` SET `nama_kementerian`='".$upd['nama_kementerian']."' WHERE `id_kementerian`='".$upd['id_kementerian']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletekementrian($id){
        $sql = "DELETE FROM `t_kementerian` WHERE `t_kementerian`.`id` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getlpnk(){
        $sql = "SELECT * from t_lpnk";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addlpnk($add){
        $sql = "INSERT INTO `t_lpnk`(`nama_lpnk` ) 
        VALUES ('".$add['nama_lpnk']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatelpnk($upd){
        $sql = "UPDATE `t_lpnk` SET `nama_lpnk`='".$upd['nama_lpnk']."' WHERE `id_lpnk`='".$upd['id_lpnk']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletelpnk($id){
        $sql = "DELETE FROM `t_lpnk` WHERE `t_lpnk`.`id_lpnk` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getsektor(){
        $sql = "SELECT * from t_sektor";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addsektor($add){
        $sql = "INSERT INTO `t_sektor`(`nama_sektor` ) 
        VALUES ('".$add['nama_sektor']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatesektor($upd){
        $sql = "UPDATE `t_sektor` SET `nama_sektor`='".$upd['nama_sektor']."' WHERE `id_sektor`='".$upd['id_sektor']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletesektor($id){
        $sql = "DELETE FROM `t_sektor` WHERE `t_sektor`.`id_sektor` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getssektor(){
        $sql = "SELECT * from t_subsektor";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addssektor($add){
        $sql = "INSERT INTO `t_subsektor`(`id_sektor`, `nama_subsektor` ) 
        VALUES ('".$add['id_sektor']."', '".$add['nama_sektor']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatessektor($upd){
        $sql = "UPDATE `t_subsektor` SET `id_sektor`='".$upd['id_sektor']."',`nama_subsektor`='".$upd['nama_subsektor']."' WHERE `id_subsektor`='".$upd['id_subsektor']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletessektor($id){
        $sql = "DELETE FROM `t_subsektor` WHERE `t_subsektor`.`id_subsektor` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getprovinsi(){
        $sql = "SELECT * from t_provinsi";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addprov($add){
        $sql = "INSERT INTO `t_provinsi`(`nama_provinsi` ) 
        VALUES ('".$add['nama_provinsi']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updateprov($upd){
        $sql = "UPDATE `t_provinsi` SET `nama_provinsi`='".$upd['nama_provinsi']."' WHERE `id_provinsi`='".$upd['id_provinsi']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deleteprov($id){
        $sql = "DELETE FROM `t_provinsi` WHERE `t_provinsi`.`id_provinsi` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getkotakabu(){
        $sql = "SELECT * from t_kotakabu";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addkotakabu($add){
        $sql = "INSERT INTO `t_kotakabu`(`id_provinsi`, `nama_daerah` ) 
        VALUES ('".$add['id_provinsi']."','".$add['nama_daerah']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatekotakabu($upd){
        $sql = "UPDATE `t_kotakabu` SET `id_provinsi`='".$upd['id_provinsi']."',`nama_daerah`='".$upd['nama_daerah']."'
        WHERE `id_kotakabu`='".$upd['id_kotakabu']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletekotakabu($id){
        $sql = "DELETE FROM `t_kotakabu` WHERE `t_kotakabu`.`id_kotakabu` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getuser(){
        $sql = "SELECT * from t_user";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function updateuser($upd){
        $sql = "UPDATE `t_user` SET `nomor_user`='".$upd['nomor_user']."',`nik`='".$upd['nik']."',`foto`='".$upd['foto']."',`nama_user`='".$upd['nama_user']."'
        ,`instansi`='".$upd['instansi']."',`jabatan`='".$upd['jabatan']."',`email`='".$upd['email']."',`telepon`='".$upd['telepon']."',`username`='".$upd['username']."'
        ,`status`='".$upd['status']."'
        WHERE `id_user`='".$upd['id_user']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    public function getimpassesment(){
        $sql = "SELECT * FROM imp_assessment ORDER BY nomor_urut ASC";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getimpm1(){
        $sql = "SELECT * FROM imp_m1 a, imp_assessment b WHERE a.idass = b.id_ass";
        
        $query = $this->db->query($sql)->result();

        return $query;
    }


    function getsumimpassesment(){
        $sql = "SELECT SUM(bobot) as bobot FROM imp_assessment";
        $result = $this->db->query($sql);

        return $result->row()->bobot;
    }

    function importass(){
        $sql ="TRUNCATE `t_assessment`";
        $query = $this->db->query($sql);

        $sql ="TRUNCATE `m1`";
        $query = $this->db->query($sql);

        $sql = "DELETE t1, t2, t3, t4, t5 FROM `t_projekprofil` t1, t_skor t2, t_m1profil t3, t_subsektor_ln t4, t_user_kategori t5 WHERE t1.id_projek = t2.id_projek AND t1.id_projek = t3.id_projek AND t1.id_projek = t4.id_projek AND t1.id_projek = t5.id_projek AND t1.status < 3";

        $query = $this->db->query($sql);

        $sql ="INSERT INTO `t_assessment`(`id_ass`, `section`, `nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `respon`, `bobot`, `s_upload`, `s_upload2`)SELECT * FROM imp_assessment";
        $query = $this->db->query($sql);

        $sql ="INSERT INTO `m1`(`idass`, `nomor_urut`, `urut`, `a`, `b`, `su`) SELECT `idass`, `nomor_urut`, `urut`, `a`, `b`, '0' FROM `imp_m1`";
        $query = $this->db->query($sql);


        return $query;


    }


}