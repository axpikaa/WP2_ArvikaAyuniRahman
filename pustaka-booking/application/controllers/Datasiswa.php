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
			'nama'
			'Nama Siswa',
			'required|min_length[3]',
			[
				'required'=>'Nama Siswa Harus diisi', 
				'min_length'=> 'Nama Siswa Terlalu pendek'
		]);
		$this-> form_validation->set_rules(
			'kelas',
			'Kelas',			
			'required|min_length[3]',
			[
				'required'=>'Kelas Harus diisi', 
				'min_length'=> 'Kelas terlalu pendek'
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