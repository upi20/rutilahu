<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Alternatif_model');

		if ($this->session->userdata('id_user_level') == 2) {

			redirect('Login/block');
		}
	}

	public function index()
	{
		$level_id = $this->session->userdata('id_user_level');
		$user_id = $level_id == 3 ? $this->session->userdata('id_user') : null;
		$data = [
			'page' => "Alternatif",
			'list' => $this->Alternatif_model->tampil($user_id),
			'total_warga' => $this->Alternatif_model->total_warga($user_id),
			'level_id' => $level_id

		];
		$this->load->view('alternatif/index', $data);
	}

	//menampilkan view create
	public function create()
	{
		$data['page'] = "Alternatif";
		$this->load->view('alternatif/create', $data);
	}

	//menambahkan data ke database
	public function store()
	{
		//cek nik
		$nik = $this->input->post('nik');
		$set = $this->Alternatif_model->show_nik($nik);
		if ($set) {

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Nik</strong> sudah digunakan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
			redirect('alternatif/create');
		}
		$data = [

			'id_dusun' => $this->session->userdata('id_user'),
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
		];


		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() != false) {
			$result = $this->Alternatif_model->insert($data);
			if ($result) {
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data berhasil disimpan!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
				redirect('alternatif');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Data gagal disimpan!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>');
			redirect('alternatif/create');
		}
	}

	public function edit($id_alternatif)
	{
		$alternatif = $this->Alternatif_model->show($id_alternatif);
		$data = [
			'page' => "Alternatif",
			'alternatif' => $alternatif
		];
		$this->load->view('alternatif/edit', $data);
	}

	public function detail($id_alternatif)
	{
		$alternatif = $this->Alternatif_model->show($id_alternatif);
		$data = [
			'page' => "Alternatif",
			'alternatif' => $alternatif
		];
		$this->load->view('alternatif/detail', $data);
	}

	public function update($id_alternatif)
	{
		$id_alternatif = $this->input->post('id_alternatif');
		$data = array(

			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
		);

		$this->Alternatif_model->update($id_alternatif, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('alternatif');
	}

	public function destroy($id_alternatif)
	{
		$this->Alternatif_model->delete($id_alternatif);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('alternatif');
	}
}
