<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        $this->load->model('Student_model');
    }

	public function index()
	{
        $data['student'] = $this->Student_model->get();

        $data['page'] = 'student/list';
		$this->load->view('layout', $data);
	}
}
