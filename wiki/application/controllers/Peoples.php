<?php 

	class Peoples extends CI_Controller{

		public function index(){

			$data["judul"] = "List of Peoples";
			// bisa digunakan setelah model diaktifkan
			$this->load->model("Peoples_model", "peoples"); // peoples di kanan hanya untuk alias yang dikiri

			if ($this->input->post('submit')){
				$data['keyword'] = $this->input->post('keyword');
				// gunakan session agar data bisa digunakan lagi
				$this->session->set_userdata('keyword', $data['keyword']);
			}else{
				$data["keyword"] = $this->session->userdata('keyword');
			}

			//buat pagination 

			$this->load->library('pagination');

			//config
			// $config['total_rows'] = $this->peoples->countAll();
			// yang diatas akan menghitung total dari database 

			$this->db->like('name', $data['keyword']);
			$this->db->or_like('email', $data['keyword']);

			$this->db->from('peoples');
			$config['total_rows'] = $this->db->count_all_results(); // fungsi bawaan
			$data["total"] = $config['total_rows'];
			// gunakan yang diatas agar saat memindahkan halaman, menggunakan query yang terakhir
			$config['per_page'] = 6;

			// $config['base_url'] = 'http://localhost/ci-app/peoples/index';			
			// $config['num_links'] = 4;

			// //styling 

			// $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
			// $config['full_tag_close'] = '</ul></nav>';


			// $config['last_link'] = 'last';
			// $config['last_tag_open'] = '<li class="page-item">';
			// $config['last_tag_close'] = '</li>';


			// $config['first_link'] = 'first';
			// $config['first_tag_open'] = '<li class="page-item">';
			// $config['first_tag_close'] = '</li>';


			// $config['next_link'] = '&raquo';
			// $config['next_tag_open'] = '<li class="page-item">';
			// $config['next_tag_close'] = '</li>';

			// $config['prev_link'] = '&laquo';
			// $config['prev_tag_open'] = '<li class="page-item">';
			// $config['prev_tag_close'] = '</li>';

			// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			// $config['cur_tag_close'] = '</a></li>';

			// $config['num_tag_open'] = '<li class="page-item">';
			// $config['num_tag_close'] = '</li>';

			// $config['attributes'] = array('class' => 'page-link');

			// yang diatas sudah dipindahkan ke file pagination


			




			//inisialisasi
			$this->pagination->initialize($config);

			// 3 untuk mengambil parameter, karena urutannya /peoples/index/param
			$data["start"] = $this->uri->segment(3);

			

			$data["peoples"] = $this->peoples->getPeoples($config["per_page"],$data["start"], $data['keyword']);
			


			$this->load->view("template/header", $data);
			$this->load->view("peoples/index", $data);
			$this->load->view("template/footer");
		}

	}

 ?>