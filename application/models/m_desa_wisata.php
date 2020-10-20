<?php 
class m_desa_wisata extends CI_Model
{

	public function tampil_desa_wisata($kecamatan){
		$kcmtn=$kecamatan;
		if($kcmtn=='0000'){
			$hasil=$this->db->query("SELECT a.id,a.kelembagaan,b.nama_kecamatan,c.nama_desa FROM desa_wisata AS a JOIN master_kecamatan AS b ON a.kecamatan = b.id_kecamatan JOIN master_desa AS c ON a.desa = c.id_desa WHERE a.STATUS = 0 ORDER BY kecamatan ASC ");
		}else{
			$hasil=$this->db->query("SELECT a.id,a.kelembagaan,b.nama_kecamatan,c.nama_desa FROM desa_wisata AS a JOIN master_kecamatan AS b ON a.kecamatan = b.id_kecamatan JOIN master_desa AS c ON a.desa = c.id_desa WHERE a.STATUS = 0 AND kecamatan='$kcmtn'");
		}
		return $hasil;
	}

	public function tampil_kecamatan(){
		$hasil=$this->db->query("SELECT * FROM master_kecamatan");
		return $hasil;
	}

	// public function tampil_kec(){
	// 	$hasil=$this->db->query("SELECT * FROM desa_wisata  WHERE status='0' GROUP BY kecamatan");
	// 	return $hasil;
	// }

		public function tampil_desa($kecamatan){
		$hasil=$this->db->query("SELECT * FROM master_desa where id_kecamatan='$kecamatan'");
		return $hasil;
	}

	public function tampil_kec(){
		$hasil=$this->db->query("SELECT master_kecamatan.id_kecamatan, master_kecamatan.nama_kecamatan FROM desa_wisata JOIN master_kecamatan ON desa_wisata.kecamatan = master_kecamatan.id_kecamatan WHERE desa_wisata.STATUS='0' GROUP BY desa_wisata.kecamatan");
		return $hasil;
	}

	public function simpan_dewi($kecamatan, $desa, $kelembagaan, $penginput){
		$hasil=$this->db->query("INSERT INTO desa_wisata
			(id, kecamatan, desa, kelembagaan, penginput) 
			VALUES 
			('', '$kecamatan', '$desa', '$kelembagaan', '$penginput')");
		return $hasil;
	}

	function ubah_dewi($id, $kelembagaan, $penginput){
		$hasil=$this->db->query("UPDATE desa_wisata 
			SET kelembagaan='$kelembagaan', penginput='$penginput' where id='$id'");
		return $hasil;
	}

	function hapus_dewi($id){
		$status=1;
		$hasil=$this->db->query("UPDATE desa_wisata SET status='$status' where id='$id'");
		return $hasil;
	}





	
	
}
?>