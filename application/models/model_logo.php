<?php

class Model_logo extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_brand');
    }
    public function logo($id)
    {
        $result = $this->db->where('id', $id)->get('tb_brand');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
