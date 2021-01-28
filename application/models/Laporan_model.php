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
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc'; // jenis file
		$config['max_size']             = 3000;
	
		$this->load->library('upload', $config);

		//INPUT GAMBAR
				// script upload file pertama
				
				
				// script uplaod file kedua
				
				

				

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
			'gps' => htmlspecialchars($this->input->post('gps'), true),
			'ups' => htmlspecialchars($this->input->post('ups'), true),
			'inverter' => htmlspecialchars($this->input->post('inverter'), true),
			'backup_setting' => htmlspecialchars($this->input->post('backup_setting'), true),
			'pelaksana_pekerjaan' => htmlspecialchars($this->input->post('pelaksana_pekerjaan'), true),
			'pengawas_pekerjaan' => htmlspecialchars($this->input->post('pengawas_pekerjaan'), true),
		
		];

	if($this->upload->do_upload('foto_sebelum_pengerjaan')){
		$file = $this->upload->data();
		$foto_sebelum = $file["file_name"];
		$dataFoto1 = [
			'foto_sebelum_pengerjaan' => $foto_sebelum
			
		];
	}
	else {
		$dataFoto1 = [];
	}
	
	if($this->upload->do_upload('foto_sesudah_pengerjaan')){
		$file2 = $this->upload->data();
		$foto_sesudah = $file2["file_name"];
		$dataFoto2 = [
			'foto_sesudah_pengerjaan' => $foto_sesudah
			
		];
	}
	else {
		$dataFoto2 = [];
	}

	if($this->upload->do_upload('foto_saat_pengerjaan')){
		$file3 = $this->upload->data();
		$foto_saat = $file3["file_name"];
		$dataFoto3 = [
			'foto_saat_pengerjaan' => $foto_saat
			
		];
	}
	else {
		$dataFoto3 = [];
	}

	if($this->upload->do_upload('working_permit')){
		$upFile = $this->upload->data();
		$fileWP = $upFile["file_name"];
		$filePDF = [
			'working_permit' => $fileWP
		];
	}
	else {
		$filePDF = [];
	}
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('har_network', $data +$dataFoto1 + $dataFoto2 + $dataFoto3 +$filePDF);
	}


	public function approval(){
		$data = [
			'approval' => 'approved',
			
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('har_network', $data);
	}

	 function type_network_device(){
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
	function nama_unit_final($id_unit,$level)
    {
        $this->db->where('id_unit', $id_unit);
		$this->db->order_by($level, 'ASC');
        return $this->db->from('unit')
            ->get()
            ->result();
    }

    //JADWAL HAR
	function tampil_jadwal_har() {
		$get = $this->db->query("SELECT a.* FROM jadwal_har a ORDER BY a.id_jadwal DESC ");
	    return $get;
	}

	function add_jadwal_har_data($data) {
    	$input = $this->db->insert('jadwal_har', $data);
    	return $input;
  	}

  	function get_jadwal_har($id_jadwal) {
    	$get = $this->db->query("SELECT * FROM jadwal_har a WHERE a.id_jadwal =$id_jadwal");
    	if ($get->num_rows() == 1) {
      		return $get->row_array();
    	}
	}

    function update_jadwal_har($data, $id_jadwal) {
	    $update = $this->db->update('jadwal_har', $data, array('id_jadwal' => $id_jadwal));
    	return $update;
	}

	 function jadwal_har_delete($id) {
	    $delete = $this->db->delete('jadwal_har', array('id_jadwal' => $id));
	    return $delete;
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

	
	
			
}