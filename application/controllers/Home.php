<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('datatagihan', 'datatagihan.id = RIGHT(LEFT(mahasiswa.nrp, 4), 2)');
		$this->db->join('lolos_magang', 'lolos_magang.id = LEFT(mahasiswa.nrp, 2)');
		$query = $this->db->get();

		$data["mahasiswa"] = $query->result_array();



		$this->load->view('templates/header');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}
}