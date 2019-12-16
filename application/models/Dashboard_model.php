<?php
class Dashboard_model extends CI_Model{
   
   public function getall_user(){
    $query = $this->db->query("SELECT * FROM t_user");

    return $query;
   }

   	public function getProfilProjek($filter_status='0') {

			$sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor";

            if ( $filter_status != '' AND $filter_status != '0' )
            {
                $sql .= " AND status = '$filter_status'";
            }
			
            $query =  $this->db->query($sql)->result();

			return $query;

	}


    public function getProfilProjekStatus($filter_status='0', $status) {
        if($this->session->userdata('role') == 2){

            if($status == 'high'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.total_skor >= 65 AND status > 2";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }else if($status == 'medium'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.total_skor > 50 AND a.total_skor <= 64 AND status > 2";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }else if($status == 'low'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.total_skor <= 50 AND status > 2";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }else if($status == 'kembali'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.status = 5";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }
        }else if($this->session->userdata('role') == 3 || $this->session->userdata('role') == 4){
            if($status == 'dataproyek'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c, t_adminapp d WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.id_projek = d.id_projek AND d.role = ".$this->session->userdata('role')." AND a.status >= 4";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }
        }else if($this->session->userdata('role') == 5 || $this->session->userdata('role') == 6){
            if($status == 'dataproyek'){
                $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c, t_adminuser d WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.id_projek = d.id_projek AND d.username = '".$this->session->userdata('username')."' AND a.status >= 4";

                if ( $filter_status != '' AND $filter_status != '0' )
                    {
                        $sql .= " AND status = '$filter_status'";
                    }
            
                        $query =  $this->db->query($sql)->result();

                        return $query;
            }
        }
    }

	public function getIdProfilProjek($idp) {
		$sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c, t_user_kategori d WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.id_projek = d.id_projek AND a.id_projek = '$idp'";
		$query =  $this->db->query($sql)->result();
				
		return $query;
	}


 public function updatestatus_profil($addprof){

        $id_projek = addslashes($addprof['id_projek']);
        $status = addslashes($addprof['status']);
        $rekomendasi = addslashes($addprof['rekomendasi']);
        $skor = addslashes($addprof['skor']);
        $id_adm = addslashes($addprof['id_adm']);

        $sql = "UPDATE `t_projekprofil` SET status = '$status', rekomendasi = '$rekomendasi', total_skor = '$skor', id_adm = '$id_adm', log_update = NOW() WHERE id_projek = '$id_projek'";
        $query =  $this->db->query($sql);
                
        return $query;

    }

     public function updatestatus_profiladm($addprof){

        $id_projek = addslashes($addprof['id_projek']);
        $status = addslashes($addprof['status']);
        $rekomendasi_sadm = addslashes($addprof['rekomendasi_sadm']);
        $total_skor = addslashes($addprof['total_skor']);
        $id_adm = addslashes($addprof['id_adm']);

        $sql = "UPDATE `t_projekprofil` SET status= '$status', rekomendasi_sadm = '$rekomendasi_sadm', total_skor = '$total_skor', id_adm2 = '$id_adm', log_update = NOW() WHERE id_projek = '$id_projek'";
        $query =  $this->db->query($sql);
                
        return $query;

    }

    public function getstatus(){
        $sql = "SELECT * FROM (SELECT b.status_user, COUNT(a.status) AS jmlstatus FROM t_projekprofil a RIGHT JOIN t_status_projek b ON a.status = b.id GROUP by b.status_user ORDER by b.id) otr WHERE jmlstatus != 0";

        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getstatuscount(){
        $sql = "SELECT b.id, b.status_user, COUNT(a.status) AS jmlstatus FROM t_projekprofil a RIGHT JOIN t_status_projek b ON a.status = b.id GROUP by b.status_user ORDER by b.id";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function get_t_status_projek(){
        $sql = "SELECT * FROM t_status_projek ORDER by id";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getusercount(){
        $sql = "SELECT * FROM t_user";
        $query = $this->db->query($sql)->num_rows();

        return $query;
    }

    public function getkategoricount(){
        $sql = "SELECT b.nama_kategori, COUNT(a.kategori) AS jmlkategori FROM t_projekprofil a RIGHT JOIN t_kategori b ON a.kategori = b.id_kategori WHERE b.nama_kategori !='' GROUP by b.nama_kategori ORDER by b.id_kategori";

        $query = $this->db->query($sql)->result();
        return $query;
    }

    public function getsektorcount(){
        $sql = "SELECT * FROM (SELECT b.nama_sektor, COUNT(a.sektor) AS jmlsektor, substr(b.nama_sektor, 14) as nsektor FROM t_projekprofil a RIGHT JOIN t_sektor b ON a.sektor = b.id_sektor GROUP by b.nama_sektor ORDER by b.id_sektor) otr WHERE otr.nama_sektor != '' AND otr.jmlsektor != 0 AND otr.nama_sektor IS NOT NULL";

        $query = $this->db->query($sql)->result();
        return $query;
    }


    public function getIdProfilProjekadm($idp) {
        $sql = "SELECT * FROM t_projekprofil a, t_adminpii b WHERE a.id_adm = b.id_adm AND a.id_projek = '$idp'";
        $query =  $this->db->query($sql)->result();
                
        return $query;
    }

    public function getIdProfilProjekadm2($idp) {
        $sql = "SELECT * FROM t_projekprofil a, t_adminpii b WHERE a.id_adm2 = b.id_adm AND a.id_projek = '$idp'";
        $query =  $this->db->query($sql)->result();
                
        return $query;
    }

    public function getuser($filter_status='All'){
        $sql = "SELECT * FROM t_user";

        if ( $filter_status != '' AND $filter_status != 'All' )
        {
            $sql .= " WHERE status = '$filter_status'";
        }

        $query = $this->db->query($sql)->result();

        return $query;
    }

    public function getuserid($idp){
        $sql = "SELECT * FROM t_user WHERE id_user = '$idp'";
        $query = $this->db->query($sql)->result();

        return $query;
    }

    function updateblockuser($id, $status_1){
        $sql = "UPDATE `t_user` SET `status_1`= '".$status_1."' WHERE id_user = $id";

        $query = $this->db->query($sql);

        return true;
    }


    function data_adminstaff($adminpii='0'){
        $sql = "SELECT * FROM t_adminpii ORDER by role";

         $query =  $this->db->query($sql)->result();

        return $query;
    }

    function addstaff($add){
        $sql = "INSERT INTO `t_adminpii`(`display_name`, `email`, `username`, `password`, `role`) VALUES ('".$add['display_name']."','".$add['email']."','".$add['username']."',md5('".$add['password']."'),'".$add['role']."')";

        $query = $this->db->query($sql);

        return $query;
    }

    function updatestaff($upd){
        $sql = "UPDATE `t_adminpii` SET `display_name`='".$upd['display_name']."',`email`='".$upd['email']."',`username`='".$upd['username']."',`role`='".$upd['role']."' WHERE `id_adm`='".$upd['id_adm']."'";

        $query = $this->db->query($sql);

        return $query;
    }

    function deletestaff($id){
        $sql = "DELETE FROM `t_adminpii` WHERE `t_adminpii`.`id_adm` = $id";

        $query = $this->db->query($sql);

        return $query;
    }

    function getadminpii(){
        $query = '';

        if ( $this->session->userdata('role') == 3 ) {
            $sql = "select * from t_adminpii where role = 5";
            $query = $this->db->query($sql)->result();
        } elseif( $this->session->userdata('role') == 4 ) {
            $sql = "select * from t_adminpii where role = 6";
            $query = $this->db->query($sql)->result();
        }

        return $query;
    }

    function getresadmin($idp){
        $sql = "SELECT * FROM t_respon WHERE id_projek = $idp";

        $query = $this->db->query($sql)->result();

        return $query;
    }

    function insert_respon($addres, $status){
        $sql ="INSERT INTO `t_respon`( `id_projek`, `respon1`, `user1`, `log_update1`) VALUES ('".$addres['id_projek']."','".$addres['respon1']."', '".$addres['user1']."', NOW())";

        $query = $this->db->query($sql);

        $sql ="UPDATE t_projekprofil SET status = '".$status."' WHERE id_projek = '".$addres['id_projek']."'";

        $query = $this->db->query($sql);

        return $query;
    }

    function update_respon($addres, $status){
        $sql ="UPDATE `t_respon` SET  respon1 = '".$addres['respon1']."', user1 = '".$addres['user1']."', `log_update1`= NOW() WHERE id_projek = '".$addres['id_projek']."'";

        $query = $this->db->query($sql);

        $sql ="UPDATE t_projekprofil SET status = '".$status."' WHERE id_projek = '".$addres['id_projek']."'";

        $query = $this->db->query($sql);

        return $query;
    }

    function update_responap($addres, $status){
        $sql ="UPDATE `t_respon` SET  respon2 = '".$addres['respon2']."', user2 = '".$addres['user2']."', `log_update2`= NOW() WHERE id_projek = '".$addres['id_projek']."'";

        $query = $this->db->query($sql);

        $sql ="UPDATE t_projekprofil SET status = '".$status."' WHERE id_projek = '".$addres['id_projek']."'";

        $query = $this->db->query($sql);

        return $query;
    }

    function c_kembali(){
         $sql = "SELECT *, concat(LPAD(a.kategori,2,0),'-',LPAD(a.sektor,2,0),'-', LPAD(a.id_projek, 3, '0')) as act_code FROM t_projekprofil a, t_kategori b, t_sektor c WHERE a.kategori = b.id_kategori AND a.sektor = c.id_sektor AND a.status = 5";

         $query = $this->db->query($sql)->num_rows();

        return $query;
    }

}