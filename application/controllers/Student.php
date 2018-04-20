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

        $data['main'] = 'student/list';
        $this->load->view('layout', $data);
    }

	public function add()
	{

        $data['main'] = 'student/add';
		$this->load->view('layout', $data);
	}
}
