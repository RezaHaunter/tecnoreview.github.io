<?php

class Model_brand extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('homepage');
    }
    public function detail_brand($id)
    {
        $result = $this->db->where('id', $id)->get('homepage');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function tambah_komentar($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
