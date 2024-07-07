<?php

class Quota_model extends CI_Model {
    public function get_leave_quota($employee_id, $year){
        $this->db->where('employee_id', $employee_id);
        $this->db->where('year', $year);
        return $this->db->get('leave_quotas')->result_array();
    }

    public function update_used_days($employee_id, $year, $used_days)
    {
        $this->db->where('employee_id', $employee_id);
        $this->db->where('year', $year);
        $this->db->update('leave_quotas', array('used_days' => $used_days));
    }

    public function get_all_quota()
    {
        $this->db->select('leave_quotas.*, employees.first_name, employees.last_name');
        $this->db->from('leave_quotas');
        $this->db->join('employees', 'leave_quotas.employee_id = employees.id');
        return $this->db->get()->result_array();
    }

    public function checkQuota()
    {
        $this->db->select('leave_quotas.*, employees.first_name, employees.last_name');
        $this->db->from('leave_quotas');
        $this->db->join('employees', 'leave_quotas.employee_id = employees.id');
        return $this->db->get()->result_array();
    }
}