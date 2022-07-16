<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Perhitungan_model');
		$this->load->model('Kriteria_model');
	}

	public function index()
	{
		$this->load->model('Login_model');
		if ($this->Login_model->logged_id()) {
			redirect('Login');
		} else {

			$is_publish =  $this->Perhitungan_model->get_publish();
			$kriteria = $this->Perhitungan_model->get_kriteria();
			$alternatif = $this->Perhitungan_model->get_alternatif();

			$this->Perhitungan_model->hapus_hasil();
			foreach ($alternatif as $keys) {
				$nilai_total = 0;
				foreach ($kriteria as $key) {
					$data_pencocokan = $this->Perhitungan_model->data_nilai($keys->id_alternatif, $key->id_kriteria);
					$min_max = $this->Perhitungan_model->get_max_min($key->id_kriteria);
					$hasil_normalisasi = @(round(($data_pencocokan['nilai'] - $min_max['min']) / ($min_max['max'] - $min_max['min']), 3));

					$tb = $this->Kriteria_model->get_jumlah_bobot()->row();
					$hbobot = @(round(($key->bobot / $tb->total), 4));

					$nilai_total += $hbobot * $hasil_normalisasi;
				}
				$hasil_akhir = [
					'id_alternatif' => $keys->id_alternatif,
					'nilai' => $nilai_total
				];
				$result = $this->Perhitungan_model->insert_nilai_hasil($hasil_akhir);
			}

			$data = [
				'page' => "Hasil",
				'hasil' => $this->Perhitungan_model->get_hasil(),
				'is_publish' => $is_publish,
				'level_id' => $this->session->userdata('id_user_level')
			];

			$data['page'] = "Informasi";
			$this->load->view('informasi/index', $data);
		}
	}
}
