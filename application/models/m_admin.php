<?php 
 
class M_admin extends CI_Model{	
	// Fungsi untuk menampilkan semua data siswa
    public function view(){
        return $this->db->get('user')->result();
      }
      
      // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
    //   public function view_by($nis){
    //     $this->db->where('nis', $nis);
    //     return $this->db->get('siswa')->row();
    //   }
    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save($username,$password,$nama,$level,$blokir){
        
        // $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
        $this->db->query("INSERT INTO user VALUES('','$username','$password','$nama','$level','$blokir')");
    }
}