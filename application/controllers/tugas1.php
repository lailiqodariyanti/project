<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugas1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tugas1home');
	
    }
	public function index1()
	{
		$this->load->view('tugas1biodata');
		}
		public function index2()
		{
			$this->load->view('tugas1galery');
			}
}
