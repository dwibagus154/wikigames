<?php 

	class Peoples_model extends CI_model{

		public function getAllPeoples(){
			$query = $this->db->get('peoples');
			return $query->result_array();
		}

		public function countAll(){
			return $this->db->count_all_results('peoples');
		}

		public function getPeoples($limit, $start, $keyword = null){
			if ($keyword){
				$this->db->like('name', $keyword);
				$this->db->or_like('email', $keyword);
			}
			$query = $this->db->get('peoples', $limit, $start);
			return $query->result_array();
		}
	}

 ?>