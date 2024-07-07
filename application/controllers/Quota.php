<?php

class Quota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Quota_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Leave Quota';
        $data['leave_quota'] = $this->Quota_model->get_all_quota();
        $this->load->view('templates/header', $data);
        $this->load->view('quota/index');
        $this->load->view('templates/footer');
    }

    public function checkQuota()
    {
        $data['title'] = 'Check Quota';

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('check/check');
            $this->load->view('templates/footer');
        }
        else {
            $this->Quota_model->check_Quota();
            $this->session->set_flashdata('flash', 'Submitted');
            redirect('app');
        }
    }

}