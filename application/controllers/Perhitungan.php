<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
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
		if ($this->session->userdata('id_user_level') != "1") {

			redirect('Login/block');
		}
		$data = [
			'page' => "Perhitungan",
			'kriteria' => $this->Perhitungan_model->get_kriteria(),
			'alternatif' => $this->Perhitungan_model->get_alternatif(),
			'hasil' => $this->Perhitungan_model->get_hasil()
		];

		$var_rumus = ''; // variabel untuk menampilkan rumus perhitungan
		$rumus1 = "";
		$rumus2 = "";
		$rumus1 .= 'W = [';
		$i = 1;
		// mencari nilai w
		$tb = $this->Kriteria_model->get_jumlah_bobot()->row();
		$bot = $this->Kriteria_model->tampil();
		foreach ($bot as $key) {
			$hasil = round(($key->bobot / $tb->total), 4);
			$rumus1 .= $key->bobot . ", ";
			$rumus2 .= 'W<sub>' . $i . '</sub> = ' . $key->bobot . '/' . $tb->total . ' = ' . $hasil . '</br>';
			$i++;
		}

		$rumus1 .= ']<br>';
		$var_rumus .= '<h5 class="text-dark">Bobot Preferensi W</h5>';
		$var_rumus .= $rumus1;
		$var_rumus .= '<br><h5 class="text-dark">Proses Normalisasi Bobot Preferensi W</h5>';
		$var_rumus .= $rumus2;

		$data['rumus'] = $var_rumus;
		$this->load->view('perhitungan/perhitungan', $data);
	}



	public function hasil()
	{
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

		$this->load->view('perhitungan/hasil', $data);
	}


	public function print()
	{
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
			'hasil' => $this->Perhitungan_model->get_hasil()
		];


		$this->load->view('cetak', $data);
	}

	public function publish()
	{
		$this->Perhitungan_model->publish(1);
		redirect(base_url('perhitungan/hasil'));
	}

	public function unpublish()
	{
		$this->Perhitungan_model->publish(0);
		redirect(base_url('perhitungan/hasil'));
	}
}
