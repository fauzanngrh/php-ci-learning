<?php

class Request extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Request_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Leave Request';

        $this->form_validation->set_rules('employee_id', 'Employee ID', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('request/index');
            $this->load->view('templates/footer');
        }
        else {
            $this->Request_model->create_request_leave();
            $this->session->set_flashdata('flash', 'Submitted');
            redirect('app');
        }

    }

}