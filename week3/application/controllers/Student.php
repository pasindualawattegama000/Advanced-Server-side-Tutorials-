<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        // Data to be passed to the view
        $data = array(
            'student_name' => 'John Doe',
            'course' => 'Computer Science',
            'picture_url' => 'https://th.bing.com/th/id/OIP.ZlK3OrVeW2TsQqNqza3vawHaNR?w=115&h=200&c=7&r=0&o=5&dpr=1.3&pid=1.7'
            
        );

		$this->load->view('studentd',$data);
	}
}