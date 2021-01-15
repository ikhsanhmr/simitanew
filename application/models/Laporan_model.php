<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_model extends CI_Model {


    public function getData()
	{
		$this->db->select('*');
		$this->db->from('report_kerusakan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDataEdit($id)
	{
		return $this->db->get_where('report_kerusakan', ['id_report' => $id])->row_array();
	}

	public function editData()
	{
		$data = [
			'nama_item' => htmlspecialchars($this->input->post('nama_item'), true),
			'merek_item' => htmlspecialchars($this->input->post('merek_item'), true),
			'kondisi_item' => htmlspecialchars($this->input->post('kondisi_item'), true),
			'tanggal_pelaporan' => htmlspecialchars($this->input->post('tanggal_pelaporan'), true),
			'pengguna' => htmlspecialchars($this->input->post('pengguna'), true)
		];

		$this->db->where('id_report', $this->input->post('id_report'));
		$this->db->update('report_kerusakan', $data);
	}

	public function deleteData($id)
	{
		$this->db->from('report_kerusakan');
		$this->db->where('id_report',$id);
		return $this->db->delete('report_kerusakan');
	}

	public function addData($data)
	{
		return $this->db->insert('report_kerusakan', $data);
	}

	
	function getDataHar(){
		$this->db->select('*');
			$this->db->from('har_network');
			$query = $this->db->get();
			return $query->result_array();
	  }

	  public function getDetailDataHar($id)
	{
		return $this->db->get_where('har_network', ['id' => $id])->row_array();
	}

	public function addDataHar($data)
	{
		return $this->db->insert('har_network', $data);
	}
	  
	public function deleteDataHar($id)
	{
		$this->db->from('har_network');
		$this->db->where('id',$id);
		return $this->db->delete('har_network');
	}



	public function getDataEditHar($id)
	{
		return $this->db->get_where('har_network', ['id' => $id])->row_array();
	}

	public function editDataHar()
	{
		$config['upload_path']         = './public/images/har_network/';  // folder upload 
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
		$config['max_size']             = 3000;
	


		$this->load->library('upload', $config);

		//INPUT GAMBAR
				// script upload file pertama
				
				if($this->upload->do_upload('foto_sebelum_pengerjaan') != null){
					$file = $this->upload->data();
					$foto_sebelum = $file["file_name"];
				}
				else {
					$foto_sebelum = "no images";
				}
	
				// script uplaod file kedua
				
				if($this->upload->do_upload('foto_sesudah_pengerjaan') != null){
					$file2 = $this->upload->data();
					$foto_sesudah = $file2["file_name"];
				}
				else {
					$foto_sesudah = "no images";
				}

				

		$data = [
			'nama_unit' => htmlspecialchars($this->input->post('nama_unit'), true),
			'lokasi' => htmlspecialchars($this->input->post('lokasi'), true),
			'waktu_pelaksanaan' => htmlspecialchars($this->input->post('waktu_pelaksanaan'), true),
			'nama_perangkat' => htmlspecialchars($this->input->post('nama_perangkat'), true),
			'serial_number' => htmlspecialchars($this->input->post('serial_nuimber'), true),
			'type' => htmlspecialchars($this->input->post('type'), true),
			'lan' => htmlspecialchars($this->input->post('lan'), true),
			'port' => htmlspecialchars($this->input->post('port'), true),
			'id_address' => htmlspecialchars($this->input->post('id_address'), true),
			'mac_address' => htmlspecialchars($this->input->post('mac_address'), true),
			'tampak_fisik' => htmlspecialchars($this->input->post('tampak_fisik'), true),
			'indikator_lampu' => htmlspecialchars($this->input->post('indikator_lampu'), true),
			'power_supply' => htmlspecialchars($this->input->post('power_supply'), true),
			'konfigurasi' => htmlspecialchars($this->input->post('konfigurasi'), true),
			'catatan' => htmlspecialchars($this->input->post('catatan'), true),
			'backup_setting' => htmlspecialchars($this->input->post('backup_setting'), true),
			'pelaksana_pekerjaan' => htmlspecialchars($this->input->post('pelaksana_pekerjaan'), true),
			'pengawas_pekerjaan' => htmlspecialchars($this->input->post('pengawas_pekerjaan'), true),
		
		];

	if($this->upload->do_upload('foto_sebelum_pengerjaan')){
		$dataFoto1 = [
			'foto_sebelum_pengerjaan' => $foto_sebelum
			
		];
	}
	else {
		$dataFoto1 = [];
	}
	
	if($this->upload->do_upload('foto_sesudah_pengerjaan')){
		$dataFoto2 = [
			'foto_sesudah_pengerjaan' => $foto_sesudah
			
		];
	}
	else {
		$dataFoto2 = [];
	}
	

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('har_network', $data +$dataFoto1 + $dataFoto2);
	}
		
}