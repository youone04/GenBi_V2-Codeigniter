<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genbi extends CI_Controller {
	public function __construct(){
			parent::__construct();
			 //load libary pagination
        	$this->load->library('pagination');
			$this->load->model('Genbi_model');//manggil database
			$this->load->library('form_validation');//validasi form
		} //end controler __constructGenbi
	
	public function index(){
		$data['judul'] = 'GenBI | Provinsi Lampung';
		$data['text'] = $this->Genbi_model->getAllData();
		$data['pengumuman'] = $this->Genbi_model->getAllDataPengumuman();


		$this->load->view('templates/header',$data);
		$this->load->view('halaman/halaman_depan');//memanggil folder : halaman , dan file halaman_depan.html
		$this->load->view('templates/footer');


	}//end function index

	public function Login(){
		$data['judul'] = 'GenBI | Halaman Login';
		$this->load->view('templates/headerLogin',$data);
		$this->load->view('halaman/login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['username' => $username])->row_array();

		if(isset($_POST['submit'])){//jika tombol ditekan
			if($password == $user['password'] ){
				$this->session->set_userdata('username',$username);//menyimpan data username dalam session,jika login berhasil

				$this->session->set_flashdata('login_berhasil','password benar');
	    		redirect('Genbi/HalamanAdmin');
			}else{
				$this->session->set_flashdata('login_gagal','gagal login');
				redirect('Genbi/Login');
			}//end else

		}//end submit

	} //end login

	public function HalamanAdmin(){
		$data['judul'] ='GenBI | Halaman Admin';
		$this->load->view('templates/header',$data);
		$this->load->view('halaman/admin');
		
	} //end halaman admin

	//inputBerita
	public function inputBerita(){
		$data['judul'] = 'GenBI | Input Berita';
		$this->load->view('templates/header',$data);
		$this->load->view('halaman/input_berita_admin');
	}// end inputBerita

	//ubah berita
	public function ubahBerita(){
		$data['judul'] = 'GenBI | Ubah Berita';
		$data['berita'] = $this->Genbi_model->getUbahBerita();

		$this->load->view('templates/header',$data);
		$this->load->view('halaman/ubah_berita');

	}//end ubah berita

	public function ubahBeritaAdmin($id){
		$data['judul'] = 'GenBI | Ubah Berita';
		$data['selengkapnya'] = $this->Genbi_model->getIdSelengkapnya($id);
		$this->load->view('templates/header',$data);
		$this->load->view('halaman/ubah_berita_admin');
	}

	//proses yang dilakukan dihalan admin yang dipanggil di form nya action="<?php echo base_url('Genbi/ProsesInputBerita');
	public function ProsesInputBerita(){
		date_default_timezone_set('Asia/Jakarta');//set default waktu server
		if(isset($_POST['submit'])){ //jika tombol ditekan dihalaman admin
			$lampiran = $_FILES['file_lampiran']['name'];
			$config['upload_path']='./lampiran/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload',$config);


			if(!$this->upload->do_upload('file_lampiran')){//jika file tdk di upload

				$this->session->set_flashdata('tidak_upload','gagal_upload');
				redirect('Genbi/HalamanAdmin');
				die();

			}else{

				$lampiran = $this->upload->data('file_name');//code memasukaan file gambar ke folder
			}

			$data= [

					"id_berita" => '',//nama header dalam database
					"judul_berita" => $this->input->post('judul_berita',true),
					"isi_berita" => $this->input->post('isi_berita',true),
					"tgl_berita" => date('l,d-F-Y  h:i:s'),
					"file_lampiran" => $lampiran,//input nama file kedalam database
					"username" => $this->session->userdata('username')//username yang disimpan dalam sessio akan di input kedalam databases
				];

			$this->Genbi_model->InputBerita($data);
			$this->session->set_flashdata('data_sukses','berhasil_input');
			redirect('Genbi');

		} //end isset post

	}//end ProsesInputBerita

	public function Berita(){
		$data['judul'] = "GenBI | Halaman Berita";
		$config['base_url'] = base_url('Genbi/Berita'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);
        $data['berita'] = $this->Genbi_model->getDataBerita($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/header',$data);
		$this->load->view('halaman/berita');
		//$this->load->view('templates/footer');
		
	}//end berita

	public function Pengumuman(){
		$data['judul'] = "GenBI | Halaman Pengumuman";
		$data['pengumuman'] = $this->Genbi_model->getAllDataPengumuman();

		$this->load->view('templates/header',$data);
		$this->load->view('halaman/pengumuman');
		$this->load->view('templates/footer');
		
	}//end pengumuman

	public function HalamanBeritaSelengkapnya($id){
		$data['judul'] = "GenBI | Halaman Berita Selengkapnya";
		$data['selengkapnya'] = $this->Genbi_model->getIdSelengkapnya($id);
		$this->load->view('templates/header',$data);
		$this->load->view('halaman/halaman_selengkapnya');
	}//end halaman selengkapnya

	public function SelengkapnyaPengumuman($id){
		$data['judul'] = "GenBI | Halaman Pengumuman Selengkapnya";
		$data['pengumuman'] = $this->Genbi_model->getIdSelengkapnyaPengumuman($id);
		$this->load->view('templates/header',$data);
		$this->load->view('halaman/halaman_selengkapnya_pengumuman');
	}//end halaman selengkapnya pengumuman

	public function hapusBeritaAdmin($id){

		$this->Genbi_model->hapusBeritaById($id);
		$this->session->set_flashdata('hapus','data dihapus');
		redirect('Genbi/ubahBerita');

	}

	private function _uploadImage(){
    $config['upload_path']          = './lampiran';
    $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_lampiran')) {
        return $this->upload->data('file_name');
    }

    return "default.jpg";
    }

    public function prosesUbahBerita(){

    	if(isset($_POST['submit'])){

    		if(empty($_FILES['file_lampiran']['name'])){//jika kosoong

    			$lampiran = $this->input->post('oldGambar');

    		}else{

    			$lampiran = $this->_uploadImage();

    		}

    	$data= [

					//"id_berita" => '',//nama header dalam database
					"judul_berita" => $this->input->post('judul_berita',true),
					"isi_berita" => $this->input->post('isi_berita',true),
					"tgl_berita" => date('l,d-F-Y  h:i:s'),
					"file_lampiran" => $lampiran,//input nama file kedalam database
					"username" => $this->session->userdata('username')//username yang disimpan dalam sessio akan di input kedalam databases
				];


			$this->Genbi_model->UbahBerita($data);
			$this->session->set_flashdata('data_sukses','berhasil_input');
			redirect('Genbi');

    }
	
	}


}//end controler genbi

