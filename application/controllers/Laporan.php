<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Laporan_model', 'laporan');
		$this->load->model('Admin_model', 'admin');
    }
	
	
	//GET DATA
    function getLaporan(){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
            $data['laporan'] = $this->laporan->getData();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/laporan_view', $data);
			$this->load->view('footer');
        }

	}



	//TAMBAH DATA
	public function addData()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	} else {
	
	
	
	$this->load->view('header');
	$this->load->view('sidebar');
	$this->load->view('laporan/add',$data);
	$this->load->view('footer');
	}
}

	public function action_addData() {
		//print_r($_POST); exit;
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$nama_item = $this->input->post('nama_item');
			$merek_item = $this->input->post('merek_item');
			$kondisi_item = $this->input->post('kondisi_item');
			$tanggal_pelaporan = $this->input->post('tanggal_pelaporan');
			$pengguna = $this->input->post('pengguna');
			$data = array(
			'nama_item' => $nama_item
			,'merek_item' => $merek_item
			,'kondisi_item' => $kondisi_item
			,'tanggal_pelaporan' => $tanggal_pelaporan,
			'pengguna' => $pengguna,);
			$insert = $this->laporan->addData($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/getLaporan>";
			}
		}
	}




	
	//EDIT DATA
	public function editData($id) {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['laporan'] = $this->laporan->getDataEdit($id);
			$data['list_merek_printer'] = $this->admin->list_merek_printer();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/edit',$data);
			$this->load->view('footer');
		}
	}

	public function action_editData() {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['edit'] = $this->laporan->editData();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Data diperbarui!
		  </div>');
			redirect('laporan/getLaporan');
			
		}
	}
	

	


	//DELETE DATA
    function deleteData($id){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
        $this->laporan->deleteData($id);
        redirect(site_url('laporan/getLaporan'));
        }

	}
	
	//HAR NETWORK
	public function getDataHar(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
	
            $data['waktu'] = $this->laporan->getWaktuPelaksanaan();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/har_view', $data);
			$this->load->view('footer');
        }
	}

	public function addDataHar(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {

			$data['network'] = $this->laporan->type_network_device();
			$data['unit']=$this->laporan->kantor_induk();
			$data['waktu']=$this->laporan->getJadwalHar();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/har_add',$data);
			$this->load->view('footer');
		
        }

	}
	
	public function addDataHar_action(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
            $config['upload_path']         =  './public/images/har_network/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf'; // jenis file
            $config['max_size']             = 3000;
           
			$this->load->library('upload', $config);
			
			
				$lokasi = $this->input->post('lokasi');
				$waktu_pelaksanaan = $this->input->post('waktu_pelaksanaan');
				$nama_perangkat = $this->input->post('nama_perangkat');
				$serial_number = $this->input->post('serial_number');
				$type = $this->input->post('type');
				$id_address = $this->input->post('id_address');
				$mac_address = $this->input->post('mac_address');
				$tampak_fisik = $this->input->post('tampak_fisik');
				$indikator_lampu = $this->input->post('indikator_lampu');
				$power_supply = $this->input->post('power_supply');
				$lan = $this->input->post('lan');
				$port = $this->input->post('port');
				$konfigurasi = $this->input->post('konfigurasi');
				$catatan = $this->input->post('catatan');
				$backup_setting = $this->input->post('backup_setting');
				$ups = $this->input->post('ups');
				$genset = $this->input->post('genset');
				$inverter = $this->input->post('inverter');
				$kantor_induk = $this->input->post('kantor_induk');
				$unit_level2 = $this->input->post('unit_level2');
				$unit_level3 = $this->input->post('unit_level3');
				$pengawas_pekerjaan = $this->input->post('pengawas_pekerjaan');
				$pelaksana_pekerjaan = $this->input->post('pelaksana_pekerjaan');
				$solusi = $this->input->post('solusi');
				
				;
				// script uplaod file pdf
				$filePdf = $this->upload->do_upload('working_permit');
				if($filePdf != null){
					$pdf = $this->upload->data();
					$working_permit = $pdf["file_name"];
				}
				else {
					$working_permit = "";
				}

				//INPUT GAMBAR
				// script upload file pertama
				$foto1 = $this->upload->do_upload('foto_sebelum_pengerjaan');
				if($foto1 != null){
					$file1 = $this->upload->data();
					$foto_sebelum_pengerjaan = $file1["file_name"];
				}
				else {
					$foto_sebelum_pengerjaan = "" ;
				}
				
				// script uplaod file kedua
				$foto2 = $this->upload->do_upload('foto_sesudah_pengerjaan');
				if($foto2 != null){
					$file2 = $this->upload->data();
					$foto_sesudah_pengerjaan = $file2["file_name"];
				}
				else {
					$foto_sesudah_pengerjaan = "";
				}
				$foto3 = $this->upload->do_upload('foto_saat_pengerjaan');
				if($foto3 != null){
					$file3 = $this->upload->data();
					$foto_saat_pengerjaan = $file3["file_name"];
				}
				else {
					$foto_saat_pengerjaan = "";
				}
				
				$data = array(
				'lokasi' => $lokasi
				,'waktu_pelaksanaan' => $waktu_pelaksanaan
				,'nama_perangkat' => $nama_perangkat,
				'serial_number' => $serial_number,
				'working_permit' => $working_permit,
				'type' => $type,
				'id_address' => $id_address,
				'mac_address' => $mac_address,
				'tampak_fisik' => $tampak_fisik,
				'indikator_lampu' => $indikator_lampu,
				'power_supply' => $power_supply,
				'lan' => $lan,
				'port' => $port,
				'konfigurasi' => $konfigurasi,
				'backup_setting' => $backup_setting,
				'ups' => $ups,
				'genset' => $genset,
				'inverter' => $inverter,
				'catatan' => $catatan,
				// 'solusi' => $solusi,
				'kantor_induk' => $kantor_induk,
				'unit_level2' => $unit_level2,
				'unit_level3' => $unit_level3,
				'pengawas_pekerjaan' => $pengawas_pekerjaan,
				'pelaksana_pekerjaan' => $pelaksana_pekerjaan,
				'foto_sebelum_pengerjaan' => $foto_sebelum_pengerjaan,
				'foto_sesudah_pengerjaan' => $foto_sesudah_pengerjaan,
				'foto_saat_pengerjaan' => $foto_saat_pengerjaan,	
			);
				$insert = $this->laporan->addDataHar($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/getDataHar>";
				}
				else {
					echo "<script>alert('Gagal Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/getDataHar>";
				}
		}

	}
	public function editDataHar($id){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

	
		$data['laporan'] = $this->laporan->getDataEditHar($id);
		$data['network'] = $this->laporan->type_network_device();
		$data['unit']=$this->laporan->kantor_induk();
		$data['unitnya'] = $this->admin->tampil_unit();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('laporan/har_edit',$data);
		$this->load->view('footer');
	}

	}
	public function editDataHar_action(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
		$data['edit'] = $this->laporan->editDataHar();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		Data diperbarui!
	  	</div>');
		redirect('laporan/getDataHar');	
	}

	}
	public function deleteDataHar($id){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
		$this->laporan->deleteDataHar($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		Data diperbarui!
	  	</div>');
        redirect(site_url('laporan/getDataHar'));
        }


	}
	public function detailDataHar($id){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
			$data['data'] = $this->laporan->getDetailDataHar($id);
			$id_induk = $this->laporan->get_data_kantor_induk($id);
			$id_level2 = $this->laporan->get_data_lv2($id);
			$id_level3 = $this->laporan->get_data_lv3($id);
			$id_waktu = $this->laporan->get_data_waktu($id);
			$data['unit'] = $this->laporan->filter_data_unit($id_induk);
			$data['unit2'] = $this->laporan->filter_data_unit_level2($id_level2);
			$data['unit3'] = $this->laporan->filter_data_unit_level3($id_level3);
			$data['waktu'] = $this->laporan->filter_data_waktu($id_waktu);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/har_info',$data,$id_induk);
			$this->load->view('footer');
		
        }
	}

	public function approval(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
		$data['edit'] = $this->laporan->approval();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		Data diperbarui!
	  	</div>');
		redirect('laporan/getDataHar');
		}
	}

	public function downloadFile($files){
		$this->load->helper('download');
     
		
		force_download('./public/images/har_network/'.$files,NULL);
	}

	public function cetakHar($id){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
			$data['data'] = $this->laporan->getDetailDataHar($id);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/cetak_har',$data);
			$this->load->view('footer');
		
        }
	}

	function get_data_unit()
    {
        $device_type=$this->input->post('device_type');
        $data=$this->laporan->nama_unit($device_type);
        echo json_encode($data);
	}
	
	function get_data_unit_final()
    {
		$id_unit=$this->input->post('nama_unit');
		$level = $this->input->post('level');
        $data=$this->laporan->nama_unit_final($id_unit,$level);
        echo json_encode($data);
    }

    //JADWAL HAR
	public function jadwal_har_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['jadwal_harnya'] = $this->laporan->tampil_jadwal_har();
			$data['unitnya'] = $this->admin->tampil_unit();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/jadwal_har_view', $data);
			$this->load->view('footer');
		}
	}

	public function jadwal_har_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			//$data['list_level1'] = $this->admin->unit_level1();
			$data['hasil']=$this->laporan->kantor_induk();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/jadwal_har_add', $data);
			$this->load->view('footer');
		}
	}

	function get_unit_level2()
    {
        $id_kantor_induk=$this->input->post('id_kantor_induk');
        $data=$this->laporan->unit_level2($id_kantor_induk);
        echo json_encode($data);
    }

    function get_unit_level3()
    {
        $id_unit_level2=$this->input->post('id_unit_level2');
        $data=$this->laporan->unit_level3($id_unit_level2);
        echo json_encode($data);
	}
	
	function getUnitLevel3()
    {
		$type=$this->input->post('type');
        $data=$this->laporan->get_unit_level3($type);
        echo json_encode($data);
    }

    public function action_jadwal_har_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('tanggal_pergi', 'Tanggal Pergi', 'required|date', [
				'required' => 'Tanggal pergi harus di isi!'
			]);
			$this->form_validation->set_rules('tanggal_pulang', 'Tanggal Pulang', 'required|date', [
				'required' => 'Tanggal pulang harus di isi!'
			]);
			$this->form_validation->set_rules('petugas', 'Petugas', 'required', [
				'required' => 'Petugas harus di isi!'
			]);
			$this->form_validation->set_rules('kantor_induk', 'Kantor Induk', 'required', [
				'required' => 'Kantor Induk harus di isi!'
			]);
			$this->form_validation->set_rules('unit_level2', 'Unit Level 2', 'required', [
				'required' => 'Unit level 2 harus di isi!'
			]);
			$this->form_validation->set_rules('unit_level3', 'Unit Level 3', 'required', [
				'required' => 'Unit level 3 harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					Pastikan seluruh data terisi
					</div>');
				redirect(base_url() . "laporan/jadwal_har_add");
			} else {
				$data = array(
					'tanggal_pergi' => $this->input->post('tanggal_pergi'),
					'tanggal_pulang' => $this->input->post('tanggal_pulang'),
					'petugas' => $this->input->post('petugas'),
					'tujuan_level2' => $this->input->post('unit_level2'),
					'tujuan_level3' => $this->input->post('unit_level3')
				);
				$insert = $this->laporan->add_jadwal_har_data($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/jadwal_har_view>";
				} else {
					echo "<script>alert('Gagal Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/jadwal_har_view>";
				}
			}
		}
	}

	function jadwal_har_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data_id = $this->input->get('data_id');
			$data['jadwal_harnya'] = $this->laporan->get_jadwal_har($data_id, "id_jadwal");
			$data['unitnya'] = $this->admin->tampil_unit();
			$data['hasil']=$this->laporan->kantor_induk();
			$this->data['title'] = 'Update Jadwal HAR :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('laporan/jadwal_har_edit', $data);
			$this->load->view('footer');
		}
	}

	function action_jadwal_har_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_jadwal = $this->input->post('id_jadwal');
			$this->form_validation->set_rules('tanggal_pergi', 'Tanggal Pergi', 'required|date', [
				'required' => 'Tanggal pergi harus di isi!'
			]);
			$this->form_validation->set_rules('tanggal_pulang', 'Tanggal Pulang', 'required|date', [
				'required' => 'Tanggal pulang harus di isi!'
			]);
			$this->form_validation->set_rules('petugas', 'Petugas', 'required', [
				'required' => 'Petugas harus di isi!'
			]);
			$this->form_validation->set_rules('unit_level2', 'Lokasi Tujuan Unit Level 2', 'required', [
				'required' => 'Lokasi Tujuan Unit Level 2 harus di isi!'
			]);
			$this->form_validation->set_rules('unit_level3', 'Lokasi Tujuan Unit Level 3', 'required', [
				'required' => 'Lokasi Tujuan Unit Level 3 harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					Pastikan seluruh data terisi
					</div>');
				redirect(base_url() . "laporan/jadwal_har_edit?data_id=" . $id_jadwal);
			} else {
				$data = array(
					'tanggal_pergi' => $this->input->post('tanggal_pergi'),
					'tanggal_pulang' => $this->input->post('tanggal_pulang'),
					'petugas' => $this->input->post('petugas'),
					'tujuan_level2' => $this->input->post('unit_level2'),
					'tujuan_level3' => $this->input->post('unit_level3')
				);
				
				$update = $this->laporan->update_jadwal_har($data, $id_jadwal);
				if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/jadwal_har_view>";
				}
			}
		}
	}

	function jadwal_har_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data_id = $this->input->get('data_id');
			$delete = $this->laporan->jadwal_har_delete($data_id);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/jadwal_har_view>";
			}
		}
	}

	function get_data_device_name()
    {
		$nama_device=$this->input->post('nama_perangkat');
        $data=$this->laporan->filter_device($nama_device);
        echo json_encode($data);
	}
	
	function get_data_device_type()
    {
		$type=$this->input->post('type');
        $data=$this->laporan->filter_type($type);
        echo json_encode($data);
	}
	
	function get_data_serial()
    {
		$serial=$this->input->post('serial_number');
        $data=$this->laporan->filter_serial($serial);
        echo json_encode($data);
    }

}

?>