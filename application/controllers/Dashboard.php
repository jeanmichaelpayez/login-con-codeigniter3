<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Middleware');
        $this->middleware->check_login();
    }

    public function index() {
        $data = [
            'nombre' => $this->session->userdata('nombre'),
            'rol' => $this->session->userdata('rol')
        ];
        $this->load->view('dashboard_view', $data);
    }
}
