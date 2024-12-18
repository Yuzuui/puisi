<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten_model extends CI_Model {

	
	public function simpan($namafoto)
	{
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('Y-m-d'),
            'foto' => $namafoto,
            'username' => $this->session->userdata('username'),
            'slug' => str_replace(' ', '-', $this->input->post('judul')),
           
        );
        $this->db->insert('konten', $data);
	}

    public function update($namafoto)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('Y-m-d'),
            'slug' => str_replace(' ', '-', $this->input->post('judul')),
            'foto' => $namafoto
        );
        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('konten', $data, $where);
    }
    

    
	

	
}