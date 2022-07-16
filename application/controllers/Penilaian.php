<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Penilaian_model');

		if ($this->session->userdata('id_user_level') == 2) {
			redirect('Login/block');
		}
	}

	public function index()
	{
		$level_id = $this->session->userdata('id_user_level');
		$user_id = $level_id == 3 ? $this->session->userdata('id_user') : null;

		$data = [
			'page' => "Penilaian",
			'list' => $this->Penilaian_model->tampil(),
			'kriteria' => $this->Penilaian_model->get_kriteria(),
			'alternatif' => $this->Penilaian_model->get_alternatif($user_id),
			'sub_kriteria' => $this->Penilaian_model->get_sub_kriteria(),
			'perhitungan' => $this->Penilaian_model->tampil(),
			'level_id' => $level_id

		];
		$this->load->view('penilaian/index', $data);
	}

	public function tambah_penilaian()
	{
		$id_alternatif = $this->input->post('id_alternatif');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');
		$i = 0;
		echo var_dump($nilai);
		foreach ($nilai as $key) {
			$this->Penilaian_model->tambah_penilaian($id_alternatif, $id_kriteria[$i], $key);
			$i++;
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
		redirect('penilaian');
	}


	public function create()
	{
		$data['page'] = "Penilaian";
		$this->load->view('Penilaian/create', $data);
	}


	public function update_penilaian()
	{

		$id_alternatif = $this->input->post('id_alternatif');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');
		$i = 0;

		foreach ($nilai as $key) {
			$cek = $this->Penilaian_model->data_penilaian($id_alternatif, $id_kriteria[$i]);
			if ($cek == 0) {
				$this->Penilaian_model->tambah_penilaian($id_alternatif, $id_kriteria[$i], $key);
			} else {
				$this->Penilaian_model->edit_penilaian($id_alternatif, $id_kriteria[$i], $key);
			}
			$i++;
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
		redirect('penilaian');
	}
}
