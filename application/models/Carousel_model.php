<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel_model extends CI_Model {

	
	public function simpan($namafoto)
	{
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namafoto,
           
        );
        $this->db->insert('craousel', $data);
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
    

    // public function update(){
    //     $data = array(
    //         'nama_kategori'     => $this->input->post('nama_kategori')
    //     );
    //     $where = array(
    //        ' id_kategori' => $this->input->post('id_kategori')
    //     );   
    //     $this->db->update('kategori', $data, $where);
    // }
	

	
}