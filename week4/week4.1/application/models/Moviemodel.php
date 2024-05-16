<?php
class MovieModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function getMoviesByGenre($genre){
        $this->db->where('genre' , $genre);
        $query1 = $this->db->get('films');
        return $query1->result_array();
    }

    public function getAllMovies(){
        // $names = array();
        // $result = $this->db->get('films');
        // foreach($result->results() as $row){
        //     $names[] = $row->name;
        // }
        $query = $this->db->get('films');
        return $query->result_array();
    }
}