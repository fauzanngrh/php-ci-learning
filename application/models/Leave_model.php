<?php

class Leave_model extends CI_Model {
    public function get_leave_by_id($id) {
        return $this->db->get_where('leaves', array('id' => $id))->row();
    }

    public function get_leaves_by_employee($employee_id) {
        return $this->db->get_where('leaves', array('employee_id' => $employee_id))->result();
    }

    public function create_leave($data) {
        return $this->db->insert('leaves', $data);
    }

    public function update_leave($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('leaves', $data);
    }

    public function delete_leave($id) {
        $this->db->where('id', $id);
        $this->db->delete('leaves');
        return;
    }
}

?>
