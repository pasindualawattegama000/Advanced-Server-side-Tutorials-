<?php 

defined("BASEPATH") OR exit("No direct script access allowed");

class Age extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load URL helper
        $this->load->model('AgeModel');
    }

    public function index(){
        $this->load->view('ageInputForm');
    }

    public function calculate_age(){
        $dateOfBirth = $this->input->post('dob');
        // $dateOfBirth = "17-10-1985";
        $data = array('age' => $this->AgeModel->calculateAge($dateOfBirth));

        $this->load->view('displayAge',$data);
    }
}





?>