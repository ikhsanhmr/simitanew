<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_model extends CI_Model
{


	public function getData()
	{
		$query = $this->db->query('SELECT id_report, serial_number, nama_item, tanggal_pelaporan, pengguna, (SELECT kategori FROM kategori_gangguan_perangkat WHERE id_kategori=kondisi_item) AS kondisi_item FROM `report_kerusakan`');
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
		$this->db->where('id_report', $id);
		return $this->db->delete('report_kerusakan');
	}

	public function addData($data)
	{
		return $this->db->insert('report_kerusakan', $data);
	}


	function getDataHar()
	{
		$this->db->select('*');
		$this->db->from('har_network');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDetailDataHar($id)
	{
		return $this->db->get_where('har_network', ['id' => $id])->row_array();
	}

	public function get_data_kantor_induk($id)
	{
		$this->db->select('kantor_induk');
		$this->db->from('har_network');
		$this->db->where('id', $id);
		return $this->db->get()->row()->kantor_induk;
	}
	public function get_data_lv2($id)
	{
		$this->db->select('unit_level2');
		$this->db->from('har_network');
		$this->db->where('id', $id);

		return $this->db->get()->row()->unit_level2;
	}
	public function get_data_lv3($id)
	{
		$this->db->select('unit_level3');
		$this->db->from('har_network');
		$this->db->where('id', $id);

		return $this->db->get()->row()->unit_level3;
	}

	public function get_data_waktu($id)
	{
		$this->db->select('waktu_pelaksanaan');
		$this->db->from('har_network');
		$this->db->where('id', $id);

		return $this->db->get()->row()->waktu_pelaksanaan;
	}

	public function filter_data_unit($id_induk)
	{
		$this->db->select('*');
		$this->db->from('kantor_induk');
		$this->db->where('id_kantor_induk', $id_induk);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function filter_data_unit_level2($id_induk)
	{
		$this->db->select('*');
		$this->db->from('unit_level2');
		$this->db->where('id_unit_level2', $id_induk);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function filter_data_unit_level3($id_induk)
	{
		$this->db->select('*');
		$this->db->from('unit_level3');
		$this->db->where('id_unit_level3', $id_induk);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function filter_data_waktu($id_induk)
	{
		$this->db->select('*');
		$this->db->from('jadwal_har');
		$this->db->where('id_jadwal', $id_induk);
		$query = $this->db->get();
		return $query->row_array();
	}



	public function addDataHar($data)
	{
		return $this->db->insert('har_network', $data);
	}

	public function deleteDataHar($id)
	{
		$this->db->from('har_network');
		$this->db->where('id', $id);
		return $this->db->delete('har_network');
	}



	public function getDataEditHar($id)
	{
		return $this->db->get_where('har_network', ['id' => $id])->row_array();
	}

	public function editDataHar()
	{
		$config['upload_path']         = './public/images/har_network/';  // folder upload 
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc'; // jenis file
		$config['max_size']             = 3000;

		$this->load->library('upload', $config);

		//INPUT GAMBAR
		// script upload file pertama


		// script uplaod file kedua

		$data = [

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
			'genset' => htmlspecialchars($this->input->post('genset'), true),
			'ups' => htmlspecialchars($this->input->post('ups'), true),
			'inverter' => htmlspecialchars($this->input->post('inverter'), true),
			'pop' => htmlspecialchars($this->input->post('pop'), true),
			'backup_setting' => htmlspecialchars($this->input->post('backup_setting'), true),
			'kantor_induk' => htmlspecialchars($this->input->post('kantor_induk'), true),
			'tingkat_kerawanan' => htmlspecialchars($this->input->post('tingkat_kerawanan'), true),
			'solusi_tingkat_kerawanan' => htmlspecialchars($this->input->post('solusi_tingkat_kerawanan'), true),
			'unit_level2' => htmlspecialchars($this->input->post('unit_level2'), true),
			'unit_level3' => htmlspecialchars($this->input->post('unit_level3'), true),
			'pelaksana_pekerjaan' => htmlspecialchars($this->input->post('pelaksana_pekerjaan'), true),
			'pengawas_pekerjaan' => htmlspecialchars($this->input->post('pengawas_pekerjaan'), true),

			'solusi_indikator_lampu' => htmlspecialchars($this->input->post('solusi_indikator_lampu'), true),
			'solusi_tampak_fisik' => htmlspecialchars($this->input->post('solusi_tampak_fisik'), true),
			'solusi_inverter' => htmlspecialchars($this->input->post('solusi_inverter'), true),
			'solusi_backup_setting' => htmlspecialchars($this->input->post('solusi_backup_setting'), true),
			'solusi_power_supply' => htmlspecialchars($this->input->post('solusi_power_supply'), true),
			'solusi_lan' => htmlspecialchars($this->input->post('solusi_lan'), true),
			'solusi_port' => htmlspecialchars($this->input->post('solusi_port'), true),
			'solusi_konfigurasi' => htmlspecialchars($this->input->post('solusi_konfigurasi'), true),
			'solusi_genset' => htmlspecialchars($this->input->post('solusi_genset'), true),
			'solusi_ups' => htmlspecialchars($this->input->post('solusi_ups'), true),
			'solusi_pop' => htmlspecialchars($this->input->post('solusi_pop'), true)
		];

		if ($this->upload->do_upload('foto_sebelum_pengerjaan')) {
			$file = $this->upload->data();
			$foto_sebelum = $file["file_name"];
			$dataFoto1 = [
				'foto_sebelum_pengerjaan' => $foto_sebelum

			];
		} else {
			$dataFoto1 = [];
		}

		if ($this->upload->do_upload('foto_sesudah_pengerjaan')) {
			$file2 = $this->upload->data();
			$foto_sesudah = $file2["file_name"];
			$dataFoto2 = [
				'foto_sesudah_pengerjaan' => $foto_sesudah

			];
		} else {
			$dataFoto2 = [];
		}

		if ($this->upload->do_upload('foto_saat_pengerjaan')) {
			$file3 = $this->upload->data();
			$foto_saat = $file3["file_name"];
			$dataFoto3 = [
				'foto_saat_pengerjaan' => $foto_saat

			];
		} else {
			$dataFoto3 = [];
		}

		if ($this->upload->do_upload('working_permit')) {
			$upFile = $this->upload->data();
			$fileWP = $upFile["file_name"];
			$filePDF = [
				'working_permit' => $fileWP
			];
		} else {
			$filePDF = [];
		}
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('har_network', $data + $dataFoto1 + $dataFoto2 + $dataFoto3 + $filePDF);
	}


	public function approval()
	{
		$data = [
			'approval' => 'approved',
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('har_network', $data);
	}

	function serial_number()
	{
		$this->db->order_by('serial_number', 'ASC');
		return $this->db->from('network_device')
			->get()
			->result();
	}

	function type_network_device()
	{
		$this->db->order_by('device_type', 'ASC');
		$this->db->group_by('device_type');
		return $this->db->from('network_device')
			->get()
			->result();
	}

	function nama_unit($device_type)
	{
		$this->db->where('device_type', $device_type);
		$this->db->order_by('id_unit', 'ASC');
		$this->db->group_by('id_unit');
		return $this->db->from('network_device')
			->get()
			->result();
	}

	function nama_unit_final($id_unit, $level)
	{
		$this->db->where('id_unit', $id_unit);
		$this->db->order_by($level, 'ASC');
		return $this->db->from('unit')
			->get()
			->result();
	}

	//JADWAL HAR
	function tampil_jadwal_har()
	{
		$get = $this->db->query("SELECT a.* FROM jadwal_har a ORDER BY a.id_jadwal DESC ");
		return $get;
	}

	function tampil_jadwal_har_with_pegawai_and_unit()
	{
		$get = $this->db->query("SELECT jadwal_har.id_jadwal, jadwal_har.tanggal_pergi, jadwal_har.tanggal_pulang, (SELECT nama FROM pegawai WHERE pegawai_id=petugas) AS petugas, (SELECT nama_unit_level2 FROM unit_level2 WHERE id_unit_level2=tujuan_level2) AS nama_unit_level2, (SELECT nama_unit_level3 FROM unit_level3 WHERE id_unit_level3=tujuan_level3) AS nama_unit_level3 FROM `jadwal_har` ORDER BY jadwal_har.id_jadwal DESC");
		return $get;
	}

	function add_jadwal_har_data($data)
	{
		$input = $this->db->insert('jadwal_har', $data);
		return $input;
	}

	function get_jadwal_har($id_jadwal)
	{
		$get = $this->db->query("SELECT * FROM jadwal_har a WHERE a.id_jadwal =$id_jadwal");
		if ($get->num_rows() == 1) {
			return $get->row_array();
		}
	}

	function update_jadwal_har($data, $id_jadwal)
	{
		$update = $this->db->update('jadwal_har', $data, array('id_jadwal' => $id_jadwal));
		return $update;
	}

	function jadwal_har_delete($id)
	{
		$delete = $this->db->delete('jadwal_har', array('id_jadwal' => $id));
		return $delete;
	}

	public function jadwal_har_filter($petugas, $year, $month)
	{
		$query = "SELECT jadwal_har.id_jadwal, jadwal_har.tanggal_pergi, jadwal_har.tanggal_pulang, (SELECT nama FROM pegawai WHERE pegawai_id=petugas) AS petugas, (SELECT nama_unit_level2 FROM unit_level2 WHERE id_unit_level2=tujuan_level2) AS nama_unit_level2, (SELECT nama_unit_level3 FROM unit_level3 WHERE id_unit_level3=tujuan_level3) AS nama_unit_level3 FROM `jadwal_har` WHERE ";
		$requirement = 0;

		if (!empty($petugas)) {
			$query .= "petugas = $petugas ";
			$requirement++;
		}

		if (!empty($year)) {
			if (!empty($month)) {
				if ($requirement > 0) {
					$query .= "AND ";
				}
				$query .= "(YEAR(tanggal_pergi) = '$year' OR YEAR(tanggal_pulang) = '$year') AND (month(tanggal_pergi) = '$month' OR MONTH(tanggal_pulang) = '$month')";
			} else {
				if ($requirement > 0) {
					$query .= "AND ";
				}
				$query .= "(YEAR(tanggal_pergi) = '$year' OR YEAR(tanggal_pulang) = '$year')";
			}
		} else {
			if (!empty($month)) {
				if ($requirement > 0) {
					$query .= "AND ";
				}
				$query .= "(MONTH(tanggal_pergi) = '$month' OR MONTH(tanggal_pulang) = '$month')";
			}
		}

		$query .= " ORDER BY jadwal_har.id_jadwal DESC";

		$get = $this->db->query($query);
		return $get;
	}

	function kantor_induk()
	{
		$this->db->order_by('id_kantor_induk', 'ASC');
		return $this->db->from('kantor_induk')
			->get()
			->result();
	}

	function unit_level2($id_kantor_induk)
	{
		$this->db->where('id_kantor_induk', $id_kantor_induk);
		$this->db->order_by('id_unit_level2', 'ASC');
		return $this->db->from('unit_level2')
			->get()
			->result();
	}

	function unit_level3($id_unit_level2)
	{
		$this->db->where('id_unit_level2', $id_unit_level2);
		$this->db->order_by('id_unit_level3', 'ASC');
		return $this->db->from('unit_level3')
			->get()
			->result();
	}

	function getUnitLevel3($type)
	{
		$this->db->select('id_unit_level3');
		$this->db->where('device_type', $type);
		return $this->db->from('network_device')
			->get()
			->result();
	}
	function get_unit_level3($id)
	{
		$this->db->where('id_unit_level3', $id);
		$this->db->order_by('id_unit_level3', 'ASC');
		return $this->db->from('unit_level3')
			->get()
			->result();
	}

	function getJadwalHar()
	{
		$this->db->select('*');
		return $this->db->from('jadwal_har')
			->get()
			->result();
	}

	function getWaktuPelaksanaan()
	{
		$query = $this->db->query("SELECT * FROM  `har_network` ,`kantor_induk` WHERE id_kantor_induk = kantor_induk ORDER BY id ");
		return $query->result_array();
	}

	function tampil_waktu_pelaksanaan()
	{
		$get = $this->db->query("SELECT * FROM `har_network` ,`kantor_induk` WHERE id_kantor_induk = kantor_induk ORDER BY id");
		return $get;
	}

	function getDataGangguan()
	{
		$query = $this->db->query("SELECT a.id, a.serial_number,a.type, 
(SELECT nama_kantor_induk FROM kantor_induk WHERE id_kantor_induk = a.kantor_induk) AS nama_unit,
CASE WHEN tampak_fisik <> 'Normal' THEN '1 Masalah Indikator Tampak Fisik'
ELSE 'Normal'
END AS tampak_fisik,
CASE WHEN indikator_lampu <> 'Normal' THEN '1 Masalah Indikator Lampu'
ELSE 'Normal'
END AS indikator_lampu,
CASE WHEN power_supply <> 'Normal' THEN '1 Masalah Indikator Power Supply'
ELSE 'Normal'
END AS power_supply,
CASE WHEN lan <> 'Normal' THEN '1 Masalah Indikator LAN'
ELSE 'Normal'
END AS lan,
CASE WHEN PORT <> 'Normal' THEN '1 Masalah Indikator Port'
ELSE 'Normal'
END AS PORT,
CASE WHEN konfigurasi <> 'Normal' THEN '1 Masalah Konfigurasi'
ELSE 'Normal'
END AS konfigurasi,

CASE WHEN backup_setting <> 'Normal' THEN '1 Masalah Backup Setting'
ELSE 'Normal'
END AS backup_setting,

CASE WHEN genset <> 'Normal' THEN '1 Masalah Indikator Genset'
ELSE 'Normal'
END AS genset,

CASE WHEN ups <> 'Normal' THEN '1 Masalah Indikator UPS'
ELSE 'Normal'
END AS ups,

CASE WHEN inverter <> 'Normal' THEN '1 Masalah Indikator Inverter'
ELSE 'Normal'
END AS inverter


FROM har_network a");
		return $query->result_array();
	}

	function filter_type_perangkat_by_id_perangkat($name_perangkat, $id_unit_level3)
	{
		$get = $this->db->query("SELECT type FROM `network_device` WHERE device_type='$name_perangkat' AND id_unit_level3=$id_unit_level3 ORDER BY `type` DESC");
		return $get
			->result();
	}

	function filter_network_device_by_unitlv3($id_unit_level3)
	{
		$this->db->order_by('device_type', 'ASC');
		$this->db->group_by('device_type');
		$this->db->where('id_unit_level3', $id_unit_level3);
		return $this->db->from('network_device')
			->get()
			->result();
	}

	function filter_serial_num_by_type($type)
	{
		$this->db->order_by('type', 'ASC');
		//$this->db->group_by('serial_number');	

		$this->db->where('type', $type);
		return $this->db->from('network_device')
			->get()
			->result();
	}

	function filter_serial($serial)
	{
		$this->db->select('*');
		$this->db->from('network_device');
		$this->db->where('serial_number', $serial);
		$query = $this->db->get();
		return $query->result();
	}

	function data_kerawanan()
	{
		$this->db->order_by('tingkat_kerawanan', 'ASC');
		$this->db->group_by('tingkat_kerawanan');
		return $this->db->from('kerawanan')
			->get()
			->result();
	}

	function kategori_gangguan()
	{
		$this->db->select('*');
		$this->db->from('kategori_gangguan_perangkat');
		$query = $this->db->get();
		return $query->result_array();
	}

	function pilih_sid()
	{
		$this->db->order_by('data_id', 'ASC');
		return $this->db->from('data_network')
			->get()
			->result();
	}

	function get_keterangan_data_network($service_id)
	{
		$this->db->where('service_id', $service_id);
		$this->db->order_by('service_id', 'ASC');
		return $this->db->from('data_network')
			->get()
			->result();
	}
}
