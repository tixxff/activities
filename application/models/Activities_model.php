<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_model extends CI_Model {

    public function get_all()
    {
        //select * from tbl_activities where activity_id = 12
        // $this->db->select('*');
         $this->db->from('tbl_activities');
        //$this->db->where('activity_id', 12); //ทำต่อmethod ได้  $this->db->where('activity_id', 12) -> $this->db->join('', '.. == ..');
        // $this->db->join('', '.. == ..');
        // $this->db->order_by('', 'asc|desc');
        // $this->db->limit('');

        $result = $this->db->get(); //<-- ==select * from tbl_activities
        return $result->result();
    }
}