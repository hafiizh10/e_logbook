<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fitur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'E-Logbook';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['logbookuser'] = $this->Logbook_model->getLogbook();
        $data['logbook'] = $this->Logbook_model->getLog();
        $data['unit'] = $this->User_model->getUnitbyNip();

        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('kejadian', 'Kejadian', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('tindakan', 'Tindakan', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('logbook/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Logbook_model->addLogbook();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('fitur');
        }
    }

    public function hapus_book($id)
    {
        $this->Logbook_model->hapus_book($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('fitur');
    }

    public function edit_book($id)
    {
        $data['title'] = 'Edit E-Logbook';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['elogbook'] = $this->Logbook_model->getBookById($id);
        $data['listresiko'] = ['High', 'Medium', 'Low'];

        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('kejadian', 'Kejadian', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('tindakan', 'Tindakan', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('logbook/edit_book', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Logbook_model->editBook();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('fitur');
        }
    }

    public function logbook($nip)
    {
        $data['title'] = 'My E-Logbook';
        $data['user'] = $this->db->get_where('tb_user', ['nip' => $nip])->row_array();

        $data['logbookuser'] = $this->Logbook_model->getBookByNip($nip);
        $data['unit'] = $this->Logbook_model->getUnitbyNip($nip);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('logbook/view_book', $data);
        $this->load->view('templates/footer');
    }
}
