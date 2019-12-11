 <?php

class SuperAdm_model extends CI_model {
    public function getassesment(){
        $sql = "SELECT * FROM t_assessment";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addassesment($add){
        $sql = "INSERT INTO `t_assessment`(`nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `respon`, `bobot` ) 
        VALUES ('".$add['nomor_urut']."','".$add['creteria']."','".$add['intruksi_upload']."','".$add['penjelasan']."','".$add['informasi_upload']."','".$add['respon']."','".$add['bobot']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updateassesment($upd){
        $sql = "UPDATE `t_assessment` SET `nomor_urut`='".$upd['nomor_urut']."',`creteria`='".$upd['creteria']."',`intruksi_upload`='".$upd['intruksi_upload']."',`penjelasan`='".$upd['penjelasan']."',
        `informasi_upload`='".$upd['informasi_upload']."',`respon`='".$upd['respon']."',`bobot`='".$upd['bobot']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deleteassesment($id){
        $sql = "DELETE FROM `t_assessment` WHERE `t_assessment`.`id_ass` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getm1(){
        $sql = "SELECT * FROM m1";
        
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addm1($add){
        $sql = "INSERT INTO `m1`(`id_ass`, `nomor_urut`, `urut`, `a`, `b`, `su` ) 
        VALUES ('".$add['id_ass']."','".$add['nomor_urut']."','".$add['urut']."','".$add['a']."','".$add['b']."','".$add['su']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatem1($upd){
        $sql = "UPDATE `m1` SET `id_ass`='".$upd['id_ass']."',`nomor_urut`='".$upd['nomor_urut']."',`urut`='".$upd['urut']."',`a`='".$upd['a']."',
        `b`='".$upd['b']."',`su`='".$upd['su']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletem1($id){
        $sql = "DELETE FROM `m1` WHERE `m1`.`id` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    public function getkementrian(){
        $sql = "SELECT * FROM t_kementerian";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function addkementerian($add){
        $sql = "INSERT INTO `t_kementerian`(`nama_kementerian` ) 
        VALUES ('".$add['nama_kementerian']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatekementrian($upd){
        $sql = "UPDATE `t_kementerian` SET `nama_kementerian`='".$upd['nama_kementerian']."'"; 
        
        $query = $this->db->query($sql);

        return $query;
    }

    function deletekementrian($id){
        $sql = "DELETE FROM `t_kementerian` WHERE `t_kementerian`.`id_kementerian` = $id";

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
        $sql = "UPDATE `t_lpnk` SET `nama_lpnk`='".$upd['nama_lpnk']."'"; 
        
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

    public function getssektor(){
        $sql = "SELECT * from t_subsektor";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getprovinsi(){
        $sql = "SELECT * from t_provinsi";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getkotakabu(){
        $sql = "SELECT * from t_kotakabu";
        $query = $this->db->query($sql)->result();

        return $query;
    }
}