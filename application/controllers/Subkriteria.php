<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subkriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Subkriteria_model');

		if ($this->session->userdata('id_user_level') != "1") {

			redirect('Login/block');
		}
	}

	public function index()
	{
		$data = [
			'page' => "Sub Kriteria",
			'list' => $this->Subkriteria_model->tampil(),
			'kriteria' => $this->Subkriteria_model->get_kriteria(),
			'count_kriteria' => $this->Subkriteria_model->count_kriteria(),
			'sub_kriteria' => $this->Subkriteria_model->tampil()

		];
		$this->load->view('sub_kriteria/index', $data);
	}

	//menambahkan data ke database
	public function store()
	{
		$data = [
			'id_kriteria' => $this->input->post('id_kriteria'),
			'deskripsi' => $this->input->post('deskripsi'),
			'nilai' => $this->input->post('nilai')
		];

		$this->form_validation->set_rules('id_kriteria', 'ID Kriteria', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() != false) {
			$result = $this->Subkriteria_model->insert($data);
			if ($result) {
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data berhasil disimpan!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
				redirect('Subkriteria');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data gagal disimpan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
			redirect('Subkriteria/create');
		}
	}

	public function update($id_sub_kriteria)
	{
		// TODO: implementasi update data berdasarkan $id_sub_kriteria
		$id_sub_kriteria = $this->input->post('id_sub_kriteria');
		$data = array(
			'id_kriteria' => $this->input->post('id_kriteria'),
			'deskripsi' => $this->input->post('deskripsi'),
			'nilai' => $this->input->post('nilai')
		);

		$this->Subkriteria_model->update($id_sub_kriteria, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('Subkriteria');
	}

	public function destroy($id_sub_kriteria)
	{
		$this->Subkriteria_model->delete($id_sub_kriteria);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('Subkriteria');
	}
}
