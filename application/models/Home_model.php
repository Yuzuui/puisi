<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Get configuration data
    public function get_konfigurasi() {
        $this->db->from('konfigurasi');
        return $this->db->get()->row();
    }

    // Get carousel data
    public function get_craousel() {
        $this->db->from('craousel');
        return $this->db->get()->result_array();
    }

    // Get category data
    public function get_kategori() {
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }

    // Count all content
    public function countAllKonten() {
        return $this->db->count_all('konten'); // Hitung semua data
    }

    // Get content with pagination
    public function get_konten($limit = 10, $offset = 0) {
        $this->db->select('a.*, b.nama_kategori, c.username');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->order_by('a.tanggal', 'DESC');
        $this->db->limit($limit, $offset); // Menambahkan limit dan offset
        return $this->db->get()->result_array(); // Mengambil semua data konten
    }

    // Get total content
    public function get_total_konten() {
        return $this->db->count_all('konten'); // Menghitung total konten
    }

    // Get recent posts
    public function recentpost() {
        $this->db->select('a.judul, a.slug, a.tanggal, a.foto, a.keterangan, b.nama_kategori, c.username');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->order_by('a.id_konten', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    // Search content
    public function search_konten($query) {
        $this->db->from('konten');
        $this->db->like('judul', $query); // Mencari di kolom judul
        $this->db->or_like('keterangan', $query); // Mencari di kolom keterangan
        return $this->db->get()->result_array();
    }

    // Save comment
    public function simpan_komentar($data) {
        $this->db->insert('komentar', $data);  // Menyimpan komentar ke tabel 'komentar'
    }

    // Get comments by slug
    public function ambil_komentar($slug) {
        $this->db->where('slug', $slug);
        return $this->db->get('komentar')->result(); // Mengambil semua komentar berdasarkan slug
    }
}