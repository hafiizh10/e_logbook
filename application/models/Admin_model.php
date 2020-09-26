<?php

class Admin_model extends CI_Model
{
    public function mylog()
    {
        $nip = $this->session->userdata('nip');
        $data = $this->db->query("SELECT * FROM tb_logbook WHERE nip=$nip");
        return $data->num_rows();
    }

    public function high()
    {
        $data = $this->db->query("SELECT * FROM tb_logbook WHERE resiko='High'");
        return $data->num_rows();
    }

    public function medium()
    {
        $data = $this->db->query("SELECT * FROM tb_logbook WHERE resiko='Medium'");
        return $data->num_rows();
    }

    public function low()
    {
        $data = $this->db->query("SELECT * FROM tb_logbook WHERE resiko='Low'");
        return $data->num_rows();
    }

    public function getAllRole()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function hapusDataRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function editDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function addUser()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            "jabatan" => $this->input->post('jabatan', true),
            "kode" => $this->input->post('kode', true),
            "role_id" => 2
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('tb_user', $data);
    }

    public function hapusUser($id)
    {
        $this->db->delete('tb_user', ['id' => $id]);
    }

    public function addUnit()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "unit" => $this->input->post('unit', true),
        ];
        $this->db->where('id_unit', $this->input->post('id_unit'));
        $this->db->insert('tb_unit', $data);
    }

    public function hapusUnit($id_unit)
    {
        $this->db->delete('tb_unit', ['id_unit' => $id_unit]);
    }
}
