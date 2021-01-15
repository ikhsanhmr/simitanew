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
	
	$data['list_merek_printer'] = $this->admin->list_merek_printer();
	
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
            $data['data_har'] = $this->laporan->getDataHar();
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
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/har_add');
			$this->load->view('footer');
		
        }

	}
	
	public function addDataHar_action(){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
		
			$config['upload_path']         =  './public/images/har_network/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 3000;
           
			$this->load->library('upload', $config);

			
				$nama_unit = $this->input->post('nama_unit');
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
				$pengawas_pekerjaan = $this->input->post('pengawas_pekerjaan');
				$pelaksana_pekerjaan = $this->input->post('pelaksana_pekerjaan');
				
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
				
				$data = array(
				'nama_unit' => $nama_unit
				,'lokasi' => $lokasi
				,'waktu_pelaksanaan' => $waktu_pelaksanaan
				,'nama_perangkat' => $nama_perangkat,
				'serial_number' => $serial_number,
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
				'catatan' => $catatan,
				'pengawas_pekerjaan' => $pengawas_pekerjaan,
				'pelaksana_pekerjaan' => $pelaksana_pekerjaan,
				'foto_sebelum_pengerjaan' => $foto_sebelum_pengerjaan,
				'foto_sesudah_pengerjaan' => $foto_sesudah_pengerjaan,
			
				
			);
				$insert = $this->laporan->addDataHar($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/getDataHar>";
				}
			
			

		
		}

	}
	public function editDataHar($id){
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

	
		$data['laporan'] = $this->laporan->getDataEditHar($id);
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
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/har_info',$data);
			$this->load->view('footer');
		
        }
	}
}

?>