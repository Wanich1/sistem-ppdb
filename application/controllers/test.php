<?php defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;
require FCPATH . 'vendor/autoload.php';
Class Test extends CI_Controller
{
	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_Siswa');
		$this->load->library('form_validation');
	}

    public function index()
    {
		$this->form_validation->set_rules('nisn','nisn','rquired|max_length[200]');
		$this->form_validation->set_rules('sandi','sandi','rquired|min_length[3]');

		$nisn = $this->input->post('nisn');
		$sandi = $this->input->post('sandi');

		echo $nisn;
		echo $sandi;

		$n = $nisn;
		$s = md5($sandi); 
		$cek = $this->m_Siswa->cekLogin($n, $s);

		
		
		if($cek->num_rows() > 0){
			foreach($cek->result() as $ck){
				$data['id'] = $ck->id_siswa;
				$data['nisn'] = $ck->nisn;
				$data['nama'] = $ck->nama;
				$data['email'] = $ck->email;
				$data['sandi'] = $ck->sandi;
				$data['alamat'] = $ck->alamat;
				$data['tempat_lahir'] = $ck->tempat_lahir;
				$data['tanggal_lahir'] = $ck->tanggal_lahir;
				$data['jenis_kelamin'] = $ck->jenis_kelamin;
				$data['nomor_hp'] = $ck->nomor_hp;
				$data['agama'] = $ck->agama;
				$data['asal_smp'] = $ck->asal_smp;
				
			}
		}else{
				$data['nisn'] = 'null';
				$data['nama'] = 'null';
			}

        $key = "manut";
        $token = array(
            "nama" => $data['nama'],
			"nisn" => $data['nisn'],
			"id" => $data['id'],
			"email" => $data['email'],
			"sandi" => $data['sandi'],
			"alamat" => $data['alamat'],
			"tempat_lahir" => $data['tempat_lahir'],
			"tanggal_lahir" => $data['tanggal_lahir'],
			"jenis_kelamin" => $data['jenis_kelamin'],
			"nomor_hp" => $data['nomor_hp'],
			"agama" => $data['agama'],
			"asal_smp" => $data['asal_smp']
            
        );
     
        $jwt = JWT::encode($token, $key);
    
        echo $jwt;
      
	}
	
	public function check_token() {
       $jwt = $this->input->get_request_header('Authorization');
		echo $asu='asu';
       try {
           //decode token with HS256 method
		   $decode = JWT::decode($jwt, $this->secret, array('HS256'));
		   if($decoded){
                    // response true
                    $output = [
                        'message' => 'Access granted'
                    ];
                    return $this->respond($output, 200);
                }
       } catch(\SignatureInvalidException $e) {

           var_dump($e); //var_dump error
       }
   }
}
