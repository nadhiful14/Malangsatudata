<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_desa_wisata extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_desa_wisata');
    }

    public function index() {
        $kecamatan ='0000';
    	$data['data']=$this->m_desa_wisata->tampil_desa_wisata($kecamatan);
        $data['datazx']=$this->m_desa_wisata->tampil_kecamatan();
        $data['datax']=$this->m_desa_wisata->tampil_kec();
        $this->load->view('template/header');
        $this->load->view('pariwisata/v_desa_wisata',$data);
    }

    public function get() {
        $kecamatan = $this->input->get('opt_kecamatan');
        // $kecamatan=intval($kecamatan);
        $data['data']=$this->m_desa_wisata->tampil_desa_wisata($kecamatan);
        $no=0;
        $tabel=array();
                    foreach ($data['data']->result_array() as $a) {
                    $temp = array();
                        $no++;
                        $id=$a['id'];
                        $kecamatan=$a['nama_kecamatan'];
                        $desa=$a['nama_desa'];
                        $kelembagaan=$a['kelembagaan'];
                        $temp[]=$no;
                        $temp[]=$kecamatan;
                        $temp[]=$desa;
                        $temp[]=$kelembagaan;
                        $temp[]="<a class=\"btn btn-xs btn-warning\" href=\"#modalEdit$id\" data-toggle=\"modal\" title=\"Edit\"><span class=\"fa fa-edit\"></span> Edit</a> 
                                <a class=\"btn btn-xs btn-danger\" href=\"#modalHapus$id\" data-toggle=\"modal\" title=\"Edit\"><span class=\"fa fa-close\"></span>Hapus</a>";
                        $tabel[]=$temp;
                    }
                    echo json_encode(array('data' => $tabel));
    }

    public function tambah_desa_wisata(){
        $kecamatan=$this->input->post('kecamatan_id');
        $desa=$this->input->post('kelurahan_id');
        $kelembagaan=$this->input->post('kelembagaan');
        $penginput=$this->input->post('penginput');
        
        $this->m_desa_wisata->simpan_dewi($kecamatan, $desa, $kelembagaan, $penginput);

        redirect('C_desa_wisata');
    }

    public function ubah_desa_wisata(){
        $id=$this->input->post('id');
        $kelembagaan=$this->input->post('kelembagaan');
        $penginput=$this->input->post('penginput');

        $this->m_desa_wisata->ubah_dewi($id, $kelembagaan, $penginput);

        redirect('C_desa_wisata');
    }

    public function hapus_desa_wisata(){
        $id=$this->input->post('id');

        $this->m_desa_wisata->hapus_dewi($id);
        redirect('C_desa_wisata');
    }

    public function pilih_kelurahan(){
        $data['kelurahan']=$this->m_desa_wisata->tampil_desa($this->uri->segment(3));
        $this->load->view('pariwisata/v_drop_down_kelurahan',$data);
    }


    

}
?>