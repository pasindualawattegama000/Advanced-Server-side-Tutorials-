<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Dino extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DinoModel');
    }

    public function index(){
        $this->load->view('periodView');
    }

    public function getInfo($period){
        $periodInfo = array('periodDetails' => $this->DinoModel->getPeriodDetails($period));
        $this->load->view('periodDetailsView',$periodInfo);
    }
}

?>