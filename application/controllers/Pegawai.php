<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Pegawai_model', 'pegawai');
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['pegawai'] = $this->pegawai->tampil_pegawai();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('pegawai/index', $data);
			$this->load->view('footer');
		}
	}

	public function table_pegawai()
	{
		$data = array();
		$query = $this->pegawai->tampil_pegawai();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $key => $row) {
				$row['no'] = $key + 1;
				$row['actions'] = "<a href=" . base_url('pegawai/editData/' . $row['pegawai_id']) . "><i class='fa fa-pencil bigger-130'></i> &nbsp;</a>
				<a href=" . base_url('pegawai/deleteData/' . $row['pegawai_id']) . "><i class='fa fa-trash-o bigger-130'></i> &nbsp;</a>
				";
				$data[] = $row;
			}
		}
		echo json_encode(array('data' => $data));
	}

	public function addData()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('nip', 'NIP', 'required', [
			'required' => 'NIP harus di isi!',
			'required' => 'NIP harus di isi dengan angka!'
		]);
			$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama harus di isi!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email harus di isi!',
			'required' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric', [
			'required' => 'Nomor Handphone harus di isi!',
			'required' => 'Nomor Handphone harus di isi dengan angka!'
		]);

		if($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('pegawai/add');
			$this->load->view('footer');
		} else {
			$data = [
				'nip' => htmlspecialchars($this->input->post('nip'), true),
				'nama' => htmlspecialchars($this->input->post('nama'), true),
				'email' => htmlspecialchars($this->input->post('email'), true),
				'no_hp' => htmlspecialchars($this->input->post('no_hp'), true)
			];
			 $this->pegawai->addData($data);
			 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data ditambahkan!
                  </div>');
            redirect('pegawai');
		}
		}
	}

	public function editData($id)
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
		$this->form_validation->set_rules('nip', 'NIP', 'required', [
			'required' => 'NIP harus di isi!',
			'required' => 'NIP harus di isi dengan angka!'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama harus di isi!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email harus di isi!',
			'required' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric', [
			'required' => 'Nomor Handphone harus di isi!',
			'required' => 'Nomor Handphone harus di isi dengan angka!'
		]);

		if($this->form_validation->run() == false) {
			$data['pegawai'] = $this->pegawai->getDataById($id);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('pegawai/edit', $data);
			$this->load->view('footer');
		} else {
			 $this->pegawai->editData();
			 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data diperbarui!
                  </div>');
            redirect('pegawai');
		}
		}
	}

	public function deleteData($id)
    {
    	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->pegawai->deleteData($id);
	        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	                    </button>
	                    Data dihapus!
	                  </div>');
	        redirect('pegawai');
		}
    }
}