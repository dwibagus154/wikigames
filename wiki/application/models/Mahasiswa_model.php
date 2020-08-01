<?php 

	class Mahasiswa_model extends CI_model {

		public function getMahasiswaById(){
			$query = $this->db->get('mahasiswa');
			return $query->result_array();
		}

		public function tambahDataMahasiswa(){
			$data = array(
	        'nama' => $this->input->post('name', true), // sama seperti $_POST
	        'nim' => $this->input->post('nim', true), // true menggaNTIKAN HTMLSPECIALCHARS
	        'foto' => $this->input->post('foto', true),
			);

			$this->db->insert('mahasiswa', $data); 
				
		}
		

		public function hapusDataMahasiswa ($id){
			$this->db->where('id', $id);
			$this->db->delete('mahasiswa');
			// atau bisa juga ditulis 
			// $this->db->delete('mahasiswa', ['id'=> $id]);
		}

		public function getDetailMahasiswa($id){
			$query = $this->db->get_where('mahasiswa', array('id' => $id));
			return $query->row_array();
		}

		public function ubahDataMahasiswa(){
			$data = array(
	        'nama' => $this->input->post('name', true), // sama seperti $_POST
	        'nim' => $this->input->post('nim', true), // true menggaNTIKAN HTMLSPECIALCHARS
	        'foto' => $this->input->post('foto', true),
			);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('mahasiswa', $data); 
				
		}

		public function getOnlyMahasiswa(){
			$keyword = $this->input->post('keyword', true);

			$this->db->like('nama', $keyword);
			$this->db->or_like('nim', $keyword);
			$query = $this->db->get('mahasiswa');
			return $query->result_array();

		}


	}

 ?>