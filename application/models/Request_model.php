<?php

class Request_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Request_model');
        $this->load->model('Quota_model');
    }
    public function create_request_leave(){
        $data = [
            'employee_id' => $this->input->post('employee_id', true),
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
            'location' => $this->input->post('location', true),  
        ];
        $this->db->insert('leaves', $data);
    }
}