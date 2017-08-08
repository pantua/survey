<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index() {
		$this->load->view('head');
		$this->load->view('admin/widget/list');
		$this->load->view('footer');
	}
}
