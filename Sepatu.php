<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sepatu extends CI_Controller
{
	public function __construct()
	{
		parent :: __construct();
		$this->load->model("Sepatu_model");
	}

	public function index()
	{

		$this->form_validation->set_rules("nama", "Nama Pembeli", "required", [
			"required" => "Nama Pembeli Harus Diisi"
		]);
		$this->form_validation->set_rules("nhp", "Nomor HP", "required", [
			"required" => "Nomor Harus Diisi"
		]);
		if ($this->form_validation->run() == FALSE){
			$this->load->view("sepatu/v_input");
		} else {
			$data = [
				"nama" => $this->input->post("nama"),
				"nhp" => $this->input->post("nhp"),
				"merk" => $this->input->post("merk"),
				"ukuran" => $this->input->post("ukuran"),
				"harga" => $this->Sepatu_model->proses($this->input->post("harga"))
			];
			$this->load->view("sepatu/v_output", $data);
		}
	}
}

?>