<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Konten_model');
        $this->load->model('Home_model');
        $this->load->model('Komentar_model');
        
		
    }


    public function index($page = 1) {
        $limit = 4; // Jumlah konten per halaman
        $offset = ($page - 1) * $limit; // Menghitung offset
    
        // Ambil Data
        $data = array(
            'judul_halaman' => 'Beranda',
            'konfig'        => $this->Home_model->get_konfigurasi(),
            'kategori'      => $this->Home_model->get_kategori(),
            'craousel'      => $this->Home_model->get_craousel(),
            'recentpost'    => $this->Home_model->recentpost(),
            'konten'        => $this->Home_model->get_konten($limit, $offset), // Ambil konten dengan pagination
            'total_konten'  => $this->Home_model->get_total_konten(), // Ambil total konten
            'current_page'  => $page,
            'total_pages'   => ceil($this->Home_model->get_total_konten() / $limit), // Menghitung total halaman
        );
        
        // Muat View
        $this->load->view('depan_index', $data);
    }

    
    
    
    public function kategori($id, $page = 1) {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Set the number of items per page
        $items_per_page = 10; // Change this to your desired number
        $offset = ($page - 1) * $items_per_page;
    
        // Get the total number of contents for pagination
        $this->db->from('konten a');
        $this->db->where('a.id_kategori', $id);
        $total_konten = $this->db->count_all_results();
    
        // Get the paginated contents
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $this->db->limit($items_per_page, $offset);
        $konten = $this->db->get()->result_array();
    
        // Get the category name
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
    
        // Calculate total pages
        $total_pages = ceil($total_konten / $items_per_page);
    
        $data = array(
            'judul_halaman' => $nama_kategori,
            'nama_kategori' => $nama_kategori,
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
            'current_page'  => $page,
            'total_pages'   => $total_pages,
             'recentpost'    => $this->Home_model->recentpost(),
            'id'            => $id, // Add this line
        );
    
        $this->load->view('kategori', $data);
    }
    
    public function artikel($slug) {
        // Fetch article data from the konten table
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Fetch the content (konten) based on the slug
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.slug', $slug);  // Use slug to find content
        $konten = $this->db->get()->row();
    
        // Fetch comments joined with content based on slug
        $komentar = $this->Komentar_model->ambil_komentar($slug);
    
        // Prepare the data for the view
        $data = array(
            'judul_halaman' => $konten->judul,
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
            'komentar'      => $komentar, 
            'recentpost'    => $this->Home_model->recentpost()
             // Pass comments and content to the view
        );
    
        // Load the view with the data
        $this->load->view('detail', $data);
    }
    
    

    
    public function search() {
        $query = $this->input->get('query');
        $results = $this->Home_model->search_konten($query);
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $konfig = $this->Home_model->get_konfigurasi();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        
        $konten = $this->db->get()->row();
        
    
        // Siapkan data untuk view
        $data = array(
            'judul_halaman' => 'Hasil Pencarian',
            'results' => $results,
            'query' => $query,
            'kategori'      => $kategori,
            'konfig' => $konfig,
            'konten'        => $konten,
            'craousel'      => $this->Home_model->get_craousel(),
            
        );
    
        // Tampilkan view hasil pencarian
        $this->load->view('search_results', $data);
    }
    
    

    public function tambah_komentar() {
        // Get data from the form
        $data = array(
            'slug' => $this->input->post('slug'), // Get the slug from the hidden input
            'name' => $this->input->post('name'), // Get the commenter's name
            'email' => $this->input->post('email'), // Get the email
            'message' => $this->input->post('message'), // Get the comment message
            'created_at' => date('Y-m-d H:i:s') // Current timestamp
        );
    
        // Save the comment using the model
        $this->Komentar_model->simpan_komentar($data);
    
        // Redirect to the article page (with the slug)
        redirect('home/artikel/' . $data['slug']);
    }
    
    
}