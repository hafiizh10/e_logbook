<?php

class Logbook_model extends CI_Model
{
    public function addLogbook()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "tgl" => $this->input->post('tgl', true),
            "kejadian" => $this->input->post('kejadian', true),
            "lokasi" => $this->input->post('lokasi', true),
            "resiko" => $this->input->post('resiko', true),
            "tindakan" => $this->input->post('tindakan', true),
            "ket" => $this->input->post('ket', true),
            "nama" => $this->input->post('nama', true),
            "level" => $this->input->post('level', true),
            "kode" => $this->input->post('kode', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('tb_logbook', $data);
    }

    public function hapus_book($id)
    {
        $this->db->delete('tb_logbook', ['id' => $id]);
    }

    public function getLogbook()
    {
        $nip = $this->session->userdata('nip');
        $this->db->select('*');
        $this->db->from('tb_logbook');
        $this->db->where('tb_logbook.nip', $nip);
        $query = $this->db->get();
        return $query->result();
    }

    public function getLog()
    {
        return $this->db->get_where('tb_logbook', ['kode' => $this->session->userdata('kode')])->result_array();
    }

    public function getBookById($id)
    {
        return $this->db->get_where('tb_logbook', ['id' => $id])->row_array();
    }

    public function editBook()
    {
        $data = [
            "tgl" => $this->input->post('tgl', true),
            "kejadian" => $this->input->post('kejadian', true),
            "lokasi" => $this->input->post('lokasi', true),
            "resiko" => $this->input->post('resiko', true),
            "tindakan" => $this->input->post('tindakan', true),
            "ket" => $this->input->post('ket', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_logbook', $data);
    }

    public function getBookByNip($nip)
    {
        $this->db->select('*');
        $this->db->from('tb_logbook');
        $this->db->where('tb_logbook.nip', $nip);
        $query = $this->db->get();
        return $query->result();
    }

    public function getUnitbyNip($nip)
    {
        $this->db->select('tb_user.kode,tb_unit.kode AS kode, tb_unit.unit');
        $this->db->from('tb_user', 'tb_unit');
        $this->db->join('tb_unit', 'tb_unit.kode=tb_user.kode');
        $this->db->where('tb_user.nip', $nip);
        $query = $this->db->get();
        return $query->result();
    }
}
