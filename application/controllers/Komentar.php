<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Komentar_model');
    }

    public function index() {
        $data['komentar'] = $this->Komentar_model->ambil_komentar();
        $this->load->view('detail', $data);
    }

    public function tambah() {
        if ($this->input->post('submit')) {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'tanggal' => date('Y-m-d H:i:s')
            );
            $this->Komentar_model->simpan_komentar($data);
            redirect('komentar');
        }
    }
}
?>