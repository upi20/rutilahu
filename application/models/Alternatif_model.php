<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{

	public function tampil($id_dusun = null)
	{

		$get = $this->db->select(('a.*, u.nama as kepala_dusun'))->from('alternatif a')
			->join('user u', 'a.id_dusun = u.id_user ', 'left');

		if ($id_dusun != null) {
			$get->where('id_dusun', $id_dusun);
		}
		return $get->get()->result();
	}

	public function total_warga($id_dusun = null)
	{
		$get = $this->db->from('alternatif');

		if ($id_dusun != null) {
			$get->where('id_dusun', $id_dusun);
		}
		return $get->get()->num_rows();
	}


	public function getTotal()
	{
		return $this->db->count_all('alternatif');
	}

	public function insert($data = [])
	{
		$result = $this->db->insert('alternatif', $data);
		return $result;
	}

	//Cek nik
	public function show_nik($nik)
	{
		$this->db->select('*');
		$this->db->from('alternatif');
		$this->db->where('nik', $nik);
		return $this->db->get()->row();
	}

	public function show($id_alternatif)
	{
		$this->db->where('id_alternatif', $id_alternatif);
		$query = $this->db->get('alternatif');
		return $query->row();
	}

	public function update($id_alternatif, $data = [])
	{
		$ubah = array(

			'nik'  => $data['nik'],
			'nama'  => $data['nama'],
			'jenis_kelamin'  => $data['jenis_kelamin'],
			'no_telp'  => $data['no_telp'],
			'alamat'  => $data['alamat']
		);

		$this->db->where('id_alternatif', $id_alternatif);
		$this->db->update('alternatif', $ubah);
	}


	public function delete($id_alternatif)
	{
		$this->db->where('id_alternatif', $id_alternatif);
		$this->db->delete('alternatif');
	}
}
