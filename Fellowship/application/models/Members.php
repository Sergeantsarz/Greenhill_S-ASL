<?php

class Members extends CI_Model {

    function Show_all_members()
    {

        return $this->db->get('users')->result();

    }

}
?>