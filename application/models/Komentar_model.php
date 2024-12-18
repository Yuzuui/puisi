<?php
class Komentar_model extends CI_Model {
public function __construct() {
parent::__construct();
}

// Save the comment to the database
public function simpan_komentar($data) {
$this->db->insert('komentar', $data); // Insert the comment into the 'komentar' table
}

// Get comments based on the slug of the article
public function ambil_komentar($slug) {
    $this->db->select('komentar.*, konten.slug');
    $this->db->from('komentar');
    $this->db->join('konten', 'konten.slug = komentar.slug', 'left');
    $this->db->where('komentar.slug', $slug);

    return $this->db->get()->result_array(); // Mengembalikan array
}



}