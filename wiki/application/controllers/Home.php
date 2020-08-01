<?php

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->library('form_validation');
		$data["judul"] = "wiki";
		$this->form_validation->set_rules('nType', 'nTye', 'required'); // tanda | untuk menambah rules

		if ($this->form_validation->run() == FALSE) {
			$join = "SELECT heroes_tb.*, type_tb.nama
					FROM heroes_tb INNER JOIN type_tb
					ON heroes_tb.type_id = type_tb.id ";
			$data['user'] = $this->db->query($join)->result_array();
			$this->load->view("template/header", $data);
			$this->load->view("home/index", $data);
			$this->load->view("template/footer");
		} else {
			$this->db->insert('type_tb', ['nama' => $this->input->post('nType', true)]);
			redirect(base_url());
		}
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('game', 'game', 'required');



		if ($this->form_validation->run() == FALSE) {
			$join = "SELECT heroes_tb.*, type_tb.nama
					FROM heroes_tb INNER JOIN type_tb
					ON heroes_tb.type_id = type_tb.id ";
			$data['user'] = $this->db->query($join)->result_array();
			$this->load->view("template/header", $data);
			$this->load->view("home/index", $data);
			$this->load->view("template/footer");
		} else {

			$uploadImage = $_FILES["image"]["name"];

			if ($uploadImage) {
				$config['upload_path'] = './img/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
					$this->db->insert('heroes_tb', [
						'name' => $this->input->post('game'),
						'type_id' => $this->input->post('type'),
						'photo' => $this->upload->data('file_name')
					]);
				} else {
					echo $this->upload->display_errors;
				}
			}
			redirect(base_url());
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('heroes_tb');
		redirect(base_url());
	}

	public function detail($id)
	{
		$data["judul"] = "detail";
		$join = "SELECT heroes_tb.*, type_tb.nama
					FROM heroes_tb INNER JOIN type_tb
					ON heroes_tb.type_id = type_tb.id WHERE heroes_tb.id = $id ";
		$data['user'] = $this->db->query($join)->row_array();

		$this->load->view("template/header", $data);
		$this->load->view("home/detail", $data);
		$this->load->view("template/footer");
	}

	public function edit($id)
	{
		$data["judul"] = "edit";
		$data["user"] = $this->db->get_where('heroes_tb', ['id' => $id])->row_array();

		$this->load->view("template/header", $data);
		$this->load->view("home/edit", $data);
		$this->load->view("template/footer");
	}
}
