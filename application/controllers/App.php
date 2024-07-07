<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Leave_model');
        $this->load->model('Employee_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'Leave Request';
        $data['leave'] = $this->db->get('leaves')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('check/index');
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Leave_model->delete_leave($id);
        redirect('app');
    }

    public function add_data()
    {
        $data['title'] = 'Add Employee';

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('request/add_employee');
            $this->load->view('templates/footer');
        }
        else {
            $this->Employee_model->create_employee();
            $this->session->set_flashdata('flash', 'Added');
            redirect('app');
        }
    }
 
}