<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Kategori_model');
        if($this->session->userdata('level')== NULL){
			redirect('auth');
        }
    }

	public function index()
	{
    $this->db->from('kategori');
    $this->db->order_by('nama_kategori', 'ASC');
    $kategori = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' =>'kategori konten',
            'kategori'          =>$kategori
		);
		$this->template->load('template_admin2','admin/kategori_index', $data);
	}

    public function simpan(){
        $nama_kategori = $this->input->post('nama_kategori');
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $nama_kategori);
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
        $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
        nama kategori sudah digunakan. <b>BUAT DATA BARU</b></div>'); 
        redirect('admin/kategori');
        }

       $this->Kategori_model->simpan();
       $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
       data berhasil di simpan</div>');
       redirect('admin/kategori');
	}

    public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/kategori');
    }

    public function update(){
        $this->Kategori_model->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di edit></div>'); 
        redirect('admin/kategori');
    }

   
    

}
