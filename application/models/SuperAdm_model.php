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

    public function getkementrian(){
        $sql = "SELECT * FROM t_kementerian";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getlpnk(){
        $sql = "SELECT * from t_lpnk";
        $query = $this->db->query($sql)->result();

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