<?php 

	class Mahasiswa extends CI_Controller{

		public function __construct(){
			Parent::__construct();
			// aktifkan model
			$this->load->model("Mahasiswa_model");
			// aktifkan form validation
			$this->load->library('form_validation');
		}

		public function index(){

			$data["judul"] = "mahasiswa/index";
			// bisa digunakan setelah model diaktifkan
			$data["mahasiswa"] = $this->Mahasiswa_model->getMahasiswaById();

			if ($this->input->post('keyword', true)){
				$data["mahasiswa"] = $this->Mahasiswa_model->getOnlyMahasiswa();
			}

			$this->load->view("template/header", $data);
			$this->load->view("mahasiswa/index", $data);
			$this->load->view("template/footer");
		}


		public function tambah (){
			$data["judul"] = "form tambah data mahasiswa";
			$this->form_validation->set_rules('name', 'Nama', 'required'); // tanda | untuk menambah rules
			$this->form_validation->set_rules('nim', 'NIM', 'required');
			$this->form_validation->set_rules('foto', 'Foto', 'required');


			if ($this->form_validation->run() == FALSE){
				$this->load->view("template/header", $data);
				$this->load->view("mahasiswa/tambah", $data);
				$this->load->view("template/footer");
			}else{

				$this->Mahasiswa_model->tambahDataMahasiswa();
				//panggil session 
				$this->session->set_flashdata('flash','ditambahkan');
			
				redirect('mahasiswa'); // pengganti header di mvc 
			}

		}

		public function hapus($id){
				$this->Mahasiswa_model->hapusDataMahasiswa($id);
				//panggil session 
				
				$this->session->set_flashdata('flash','dihapus');
			
				redirect('mahasiswa'); // pengganti header di mvc 
		}

		public function detail($id){

			$data["judul"] = "Detail Mahasiswa";
			// bisa digunakan setelah model diaktifkan
			$data["mahasiswa"] = $this->Mahasiswa_model->getDetailMahasiswa($id);


			$this->load->view("template/header", $data);
			$this->load->view("mahasiswa/detail", $data);
			$this->load->view("template/footer");
		}


		public function ubah ($id){
			$data["judul"] = "form ubah data mahasiswa";
			$data["mahasiswa"] = $this->Mahasiswa_model->getDetailMahasiswa($id);

			$this->form_validation->set_rules('name', 'Nama', 'required'); // tanda | untuk menambah rules
			$this->form_validation->set_rules('nim', 'NIM', 'required');
			$this->form_validation->set_rules('foto', 'Foto', 'required');


			if ($this->form_validation->run() == FALSE){
				$this->load->view("template/header", $data);
				$this->load->view("mahasiswa/ubah", $data);
				$this->load->view("template/footer");
			}else{

				$this->Mahasiswa_model->ubahDataMahasiswa();
				//panggil session 
				$this->session->set_flashdata('flash','diubah');
			
				redirect('mahasiswa'); // pengganti header di mvc 
			}

		}
	}

 ?>