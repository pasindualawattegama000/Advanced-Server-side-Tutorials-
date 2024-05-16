<?php
class Moviemodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function searchMovieByGenre($genre){
        $this->db->where('genre', $genre);
        $query = $this->db->get('films');
        return $query->result_array();
    }

    public function searchAllMovies(){
        $query = $this->db->get('films');
        return $query->result_array();
    }
}