<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['students'] = $this->Student_model->get();

        $data['main'] = 'student/list';
        $this->load->view('layout', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('student_name', 'Nama', 'trim|required');
        if ($_POST AND $this->form_validation->run() == TRUE) {

            $params['student_name'] = $this->input->post('student_name');
            $params['student_address'] = $this->input->post('student_address');
            $status = $this->Student_model->add($params);
            redirect('student');
        }else{

        $data['main'] = 'student/add';
        $this->load->view('layout', $data);

        }
    }

    public function detail($id =  null)
    {
        $data['student'] = $this->Student_model->get(array('student_id' => $id));

        $data['main'] = 'student/detail';
        $this->load->view('layout', $data);
    }
}
