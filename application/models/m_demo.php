<?php
class M_demo extends CI_Model
{
    function getRows($page)
    {
        $this->load->database();
        $query = $this->db->query("select * from category");
        return $query->result_array();
    }
}
