<?php

class All_Members extends CI_Model {

    function Show_all_members()
    {

        return $this->db->get('users')->result();
        $this->db->order_by("fName", "asc");
    }

}
?>