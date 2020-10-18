<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
        //$this->load->view('welcome_message');
        $this->getRecords();
    }
    
    public function getRecords(){
        $this->load->model('Records_Model');
        $aRecords = $this->Records_Model->getRecordsfromDB();
        $data["aRecords"] = $aRecords;
        $this->load->view('master_view', $data);
    }
}
