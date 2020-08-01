<?php

class Home extends CI_Controller
{

	public function index($nama = "")
	{
		$data['user'] = $this->db->get('heroes_tb')->row_array();
		$data["judul"] = "wiki";
		$data["nama"] = $nama;
		$this->load->view("template/header", $data);
		$this->load->view("home/index", $data);
		$this->load->view("template/footer");
	}
}
