<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Carousel_model');
        if($this->session->userdata('level')== NULL){
			redirect('auth');
        }
    }


    public function index()
	{
    $this->db->from('craousel');
    $craousel = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' =>'Carousel',
            'craousel'          =>$craousel
		);
		$this->template->load('template_admin2','admin/carousel_index', $data);
	}

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/carousel/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/carousel');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   

       $this->Carousel_model->simpan($namafoto);
       $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
       data berhasil di simpan</div>');
       redirect('admin/carousel');
	}

    public function hapus($id){
        $filename=FCPATH.'/assets/upload/carousel/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/carousel/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('craousel', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/carousel');
    }

    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
       

       $this->Konten_model->update($namafoto);
       $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
       data berhasil di simpan</div>');
       redirect('admin/konten');
	}


    

   
    

}