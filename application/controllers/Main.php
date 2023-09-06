<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
		if (isset($_SESSION['user']['USER_EMAIL'])) {
            $user_id = $_SESSION['user']['USER_PRIV_ID'];
            $data['user_id'] = $user_id;
            $data['first_name'] = $_SESSION['user']['FIRST_NAME'];
            $data['middle_name'] = $_SESSION['user']['MIDDLE_NAME'];
            $data['last_name'] = $_SESSION['user']['LAST_NAME'];
            $data['email'] = $_SESSION['user']['USER_EMAIL'];
            $data['sex'] = $_SESSION['user']['USER_SEX'];
            $data['age'] = $_SESSION['user']['USER_AGE'];
            $data['address'] = $_SESSION['user']['USER_ADDRESS'];
            $data['contact'] = $_SESSION['user']['USER_CONTACT'];
            $data['password'] = $_SESSION['user']['USER_PASSWORD'];
            $data['role'] = $_SESSION['user']['USER_ROLE'];

            // print_r($_SESSION);
        } else {
            $data = array();
            $user_id = '';
        }

        $data['page'] = "main";
            
        $data['header'] = $this->load->view('header', $data, true);
        $data['footer'] = $this->load->view('footer', $data, true);

        $data['countries'] = $this->mainmodel->get_all_country();
        
        $this->load->view('main_index', $data);
	}
}
