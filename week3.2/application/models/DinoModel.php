<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DinoModel extends CI_Model{
    public function getPeriodDetails($period){
        $periodDetails = array('Triassic' => 'This is the triassic period...',
    'Jurassic' => 'This is the jurassic period...' );

    return $periodDetails[$period];
    }
}