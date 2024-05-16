<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dino extends CI_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->helper('url');
        $this->load->model('DinoDetailsModel');
    }

    public function index(){
        $this->load->view('dinoPeriods');
    }

    public function getInfo($period){
        $periodDetails = array("periodDetails" => $this->DinoDetailsModel->getPeriodDetails($period));
        $this->load->view('dinoPeriodDetails', $periodDetails);
    }
}