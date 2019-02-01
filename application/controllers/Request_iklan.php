<?php


Class Request_iklan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $data['data']=$this->M_permintaan->get_all();        
        $this->load->view('Template/Header');
        $this->load->view('Iklan/Tb_reqiklan',$data);
        $this->load->view('Template/Footer');

    } 


    public function read($id) 
    {
        $row = $this->M_permintaan->get_by_id($id);
        
        if ($row) {
            $data = array(
                'id_iklan' => $row->id_iklan,
                'id_user' => $row->id_user,
                'id_admin' => $row->id_admin,
                'judul_iklan' => $row->judul_iklan,
                'type_mobil' => $row->type_mobil,
                'merk' => $row->merk,
                'transmisi' => $row->transmisi,
                'tahun_mobil' => $row->tahun_mobil,
                'no_telp' => $row->no_telp,
                'alamat' => $row->alamat,
                'harga' => $row->harga,
                'status_iklan' => $row->status_iklan,
                'deskripsi' => $row->deskripsi,
                'tgl_iklan' => $row->tgl_iklan,
                'photo1' => $row->photo1,
            );
            $this->load->view('Template/Header');
            $this->load->view('Iklan/Tb_reqiklan_read', $data);
            $this->load->view('Template/Footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Request_iklan'));
        }
    }

    public function update($id)
    {
      $row = $this->M_permintaan->get_by_id($id);
        
        if ($row) {
            $data = array(

                'button' => 'Update',
                'action' =>site_url('Request_iklan/update_action'),
                'id_iklan' =>set_value('id_iklan',$row->id_iklan),
                'id_user' =>set_value('id_user',$row->id_user),
                'id_admin' =>set_value('id_admin',$row->id_iklan),
                'judul_iklan' =>set_value('judul_iklan',$row->judul_iklan),
                'type_mobil' =>set_value('type_mobil',$row->type_mobil),
                'merk' =>set_value('merk',$row->merk),
                'transmisi' =>set_value('transmisi',$row->transmisi),
                'tahun_mobil' =>set_value('tahun_mobil',$row->tahun_mobil),
                'no_telp' =>set_value('no_telp',$row->no_telp),
                'alamat' =>set_value('alamat',$row->alamat),
                'harga' =>set_value('harga',$row->harga),
                'status_iklan' =>set_value('status_iklan',$row->status_iklan),
                'deskripsi' =>set_value('deskripsi',$row->deskripsi),
                'verifikasi_iklan' =>set_value('verifikasi_iklan',$row->verifikasi_iklan),
                'tgl_iklan' =>set_value('tgl_iklan',$row->tgl_iklan),
            );
            $this->load->view('Template/Header');
            $this->load->view('Iklan/Tb_iklan_form', $data);
            $this->load->view('Template/Footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Request_iklan'));
        }

    }

    public function update_action() 
    {
         $this->_rules();
             if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_iklan', TRUE));
        $data['data'] = array(
                'id_iklan' => $this->input->post('id_iklan',TRUE),
                'id_user' => $this->input->post('id_user',TRUE),
                'id_admin' => $this->input->post('id_admin',TRUE),
                'judul_iklan' => $this->input->post('judul_iklan',TRUE),
                'type_mobil' => $this->input->post('type_mobil',TRUE),
                'merk' => $this->input->post('merk',TRUE),
                'transmisi' => $this->input->post('transmisi',TRUE),
                'tahun_mobil' => $this->input->post('tahun_mobil',TRUE),
                'no_telp' => $this->input->post('no_telp',TRUE),
                'alamat' => $this->input->post('alamat',TRUE),
                'deskripsi' => $this->input->post('deskripsi',TRUE),
                'harga' => $this->input->post('harga',TRUE),
                'status_iklan' => $this->input->post('status_iklan',TRUE),
                'verifikasi_iklan' => $this->input->post('verifikasi_iklan',TRUE),
                'tgl_iklan' => $this->input->post('tgl_iklan',TRUE),
                
            );
            $this->M_permintaan->update($this->input->post('id_iklan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            
            redirect(site_url('Request_iklan'));
    }
}
   /*   

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_iklan', FALSE));
        } else {
            $data['data'] = array(
                'judul_iklan' => $this->input->post('judul_iklan',TRUE),
                'type_mobil' => $this->input->post('type_mobil',TRUE),
                'merk' => $this->input->post('merk',TRUE),
                'transmisi' => $this->input->post('transmisi',TRUE),
                'tahun_mobil' => $this->input->post('tahun_mobil',TRUE),
                'no_telp' => $this->input->post('no_telp',TRUE),
                'alamat' => $this->input->post('alamat',TRUE),
                'deskripsi' => $this->input->post('deskripsi',TRUE),
                'harga' => $this->input->post('harga',TRUE),
                'verifikasi_iklan' => $this->input->post('verifikasi_iklan',TRUE),
                'tgl_iklan' => $this->input->post('tgl_iklan',TRUE),
            );
            $this->m_permintaan->update($this->input->post('id_iklan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('request_iklan'));
        }
*/        
    


    public function _rules() 
    {
    $this->form_validation->set_rules('judul_iklan', 'judul_iklan', 'trim|required');
    $this->form_validation->set_rules('type_mobil', 'type_mobil', 'trim|required');
    $this->form_validation->set_rules('merk', 'merk', 'trim|required');
    $this->form_validation->set_rules('transmisi', 'transmisi', 'trim|required');
    $this->form_validation->set_rules('tahun_mobil', 'tahun_mobil', 'trim|required');
    $this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required|numeric');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
    $this->form_validation->set_rules('harga', 'harga', 'trim|required'|numeric);
    $this->form_validation->set_rules('verifikasi_iklan', 'verifikasi_iklan', 'trim|required');
    $this->form_validation->set_rules('tgl_iklan', 'tgl_iklan', 'trim|required');
    $this->form_validation->set_rules('id_iklan', 'id_iklan', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}