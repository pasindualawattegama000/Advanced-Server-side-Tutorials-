<?php
class Movies extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Moviemodel');
    }

    public function index(){
        $this->load->view('templates/header');

        $this->load->view('searchMoviesView');
    
        $this->load->view('templates/footer');
    
    }

    public function search(){
        $this->load->view('templates/header');

        $genre = $this->input->post('genre');
        $data['movies'] = $this->Moviemodel->searchMovieByGenre($genre);
        $genre = ucfirst($genre);
        $data['title'] = "$genre Movies";
        $this->load->view('searchResultsView', $data);

        $this->load->view('templates/footer');
    }

    public function searchAll(){
        $this->load->view('templates/header');

        $data['title'] = "All The Movies";
        $data['movies'] = $this->Moviemodel->searchAllMovies();
        $this->load->view('searchResultsView',$data);

        $this->load->view('templates/footer');
    }
}