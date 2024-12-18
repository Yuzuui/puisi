<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	
	
    public function update(){
        $data = array(
            'judul_website'     => $this->input->post('judul_website'),
            'profil_website'     => $this->input->post('profil_website'),
            'instagram'     => $this->input->post('instagram'),
            'twitter'     => $this->input->post('twitter'),
            'email'     => $this->input->post('email'),
            'alamat'     => $this->input->post('alamat'),
            'no_wa'     => $this->input->post('no_wa'),
        );
        $where = array(
           ' id_konfigurasi' => 1
        );   
        $this->db->update('konfigurasi', $data, $where);
    }
	

	
}