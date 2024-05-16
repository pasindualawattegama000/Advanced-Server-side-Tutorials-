<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AgeModel extends CI_Model {

    public function calculateAge($dateOfBirth){
        $today = date("Y-m-d");
        $age = date_diff(date_create($dateOfBirth),date_create($today));
        $age = $age->format('%y');
        return $age;
    }
}