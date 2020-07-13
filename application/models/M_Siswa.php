<?php

class M_Siswa extends CI_Model {
    private $_table = "siswa";

    public $nisn, $nama, $email, $sandi;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
      $post = $this->input->post();
      $this->nisn = $post["nisn"];
      $this->nama = $post["nama"];
      $this->email = $post["email"];
      $this->sandi = md5($post["sandi"]);
      return $this->db->insert($this->_table, $this);
    }

    public function editData($where,$table)
    {
      return $this->db->get_where($where, $table);
    }

    public function updateData($where, $data, $table)
    {
      var_dump($where);
      var_dump($data);
      return $this->db->update($this->_table, $data, $where);
    }

    public function cekLogin($nisn, $sandi) {
      $this->db->where("nisn", $nisn);
      $this->db->where("sandi", $sandi);
      return $this->db->get('siswa');

    }

    public function getLoginData($nisn, $sandi)
    {
      $n = $nisn;
      $s = md5($sandi);
      
      $queryCekLogin = $this->db->get_where('siswa', 
                        array(
                          'nisn' => $n,
                          'sandi' => $s    
                        )
        );
      
        if(count($queryCekLogin->result() > 0)){
          foreach($queryCekLogin->result() as $qck){
            foreach($queryCekLogin->result() as $ck){
              $sess_data['logged_in'] = TRUE;
              $sess_data['nisn'] = $ck->nisn;
              $sess_data['sandi'] = $ck->sandi;
            }
            redirect('siswaController/dashboard');
          }
        }else{
          $this->session->set_flashdata('pesan', 
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              NISN dan Password Anda salah !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('siswaController/login');
        }
    }

    public function ambilData($id) 
    {
      $this->db->where('nisn', $id);
      return $this->db->get('siswa')->row();
    }

    public function ambilDataDiri($id) 
    {
      $this->db->where('nisn', $id);
      return $this->db->get('siswa')->row();
    }

    public function isNotLogin() {
      return $this->session->userdata('user_logged') === null;
    }
}
