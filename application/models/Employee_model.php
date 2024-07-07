<?php

class Employee_model extends CI_Model {
    public function get_employee_by_id($id) {
        return $this->db->get_where('employees', array('id' => $id))->row();
    }

    public function get_all_employees() {
        return $this->db->get('employees')->result();
    }
    
    public function create_employee() {
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'hire_date' => $this->input->post('hire_date'),
            'job_tittle' => $this->input->post('job_tittle'),
            'department_id' => $this->input->post('department_id'),
        ];
        $this->db->insert('employees', $data);
    }
    
    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('employees', $data);
    }
    
    public function delete_employee($id) {
        $this->db->where('id', $id);
        return $this->db->delete('employees');
    }
}

?>
