<?php
class Movies extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Moviemodel');
    }

    public function index(){
        $this->load->view('MovieSearchView');
    }

    public function search(){
        
        $this->load->view('templates/header');

        $selectecGenre = $this->input->post('genre');

        $data['movies'] = $this->Moviemodel->getMoviesByGenre($selectecGenre);

        $selectecGenre = ucfirst($selectecGenre);
        $data['title'] ="All The Movies With A Genre Of: $selectecGenre";
        $this->load->view('SearchedMoviesView',$data);

        $this->load->view('templates/footer');
    }

    public function allmovies(){
        $this->load->view('templates/header');

        $data['movies'] = $this->Moviemodel->getAllMovies();
        $data['title'] = 'All The Movies';
        $this->load->view('SearchedMoviesView',$data);

        $this->load->view('templates/footer');
    }
}