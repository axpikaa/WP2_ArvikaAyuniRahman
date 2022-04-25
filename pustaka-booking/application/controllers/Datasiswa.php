<?php
class Datasiswa extends CI_Controller
{
	public function index ()
	{
		$this->load->view('view-form-datasiswa');
	}
	public function cetak()
	{
		$this-> form_validation->set_rules(
			'nis',
			'NIS',
			'required|min_length[3]',
			[
				'required'=>'NIS Harus diisi', 
				'min_length'=> 'NIS terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'nama',
			'Nama Siswa',
			'required|min_length[3]',
			[
				'required'=>'Nama Siswa Harus diisi dong', 
				'min_length'=> 'Nama Siswa Terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'kelas',
			'Kelas',			
			'required|min_length[3]',
			[
				'required'=>'Kelas Harus diisi dong', 
				'min_length'=> 'Kelas terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'tl',
			'Tempat Lahir',			
			'required|min_length[3]',
			[
				'required'=>'Tempat Lahir Harus diisi dong', 
				'min_length'=> 'Terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'tgl',
			'Tanggal Lahir',			
			'required|min_length[3]',
			[
				'required'=>'Tanggal Lahir Harus diisi dong', 
				'min_length'=> 'Terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'alamat',
			'Alamat',			
			'required|min_length[3]',
			[
				'required'=>'Alamat Harus diisi dong', 
				'min_length'=> 'Alamat Terlalu pendek'
		]);
if ($this-> form_validation->run() != true){
			$this->load->view('view-form-datasiswa');
		} else {
		 $data = [
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jk' => $this->input->post('jk'),
			'tl' => $this->input->post('tl'),
			'tgl' => $this->input->post('tgl'),
			'alamat' => $this->input->post('alamat'),
			'agama' => $this->input->post('agama') 
			];
		$this->load->view('view-data-siswa', $data);
	}
}
}