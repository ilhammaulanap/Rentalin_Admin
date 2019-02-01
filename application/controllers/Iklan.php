    <?php


Class Iklan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_iklan_admin');
    }

    public function index()
    {
        $data['data']=$this->M_iklan_admin->get_all();        
        $this->load->view('Template/Header');
        $this->load->view('Iklan/Tb_iklan_list',$data);
        $this->load->view('Template/Footer');
    } 


    public function read($id) 
    {
        $row = $this->M_iklan_admin->get_by_id($id);
        
        if ($row) {
            $data = array(
                'id_iklan' => $row->id_iklan,
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
            $this->load->view('Iklan/Tb_iklan_read', $data);
            $this->load->view('Template/Footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Iklan'));
        }
    }


     public function update($id) 
    {
        $row = $this->M_iklan_admin->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('Iklan/update_action'),
                'id_iklan' => set_value('id_iklan', $row->id_iklan),
                'judul_iklan' => set_value('judul_iklan', $row->id_iklan),
                'type_mobil' => set_value('type_mobil', $row->type_mobil),
                'merk' => set_value('merk', $row->merk),
                'transmisi' => set_value('transmisi', $row->transmisi),
                'tahun_mobil' => set_value('tahun_mobil', $row->tahun_mobil),
                'no_telp' => set_value('no_telp', $row->no_telp),
                'alamat' => set_value('alamat', $row->alamat),
                'harga' => set_value('harga', $row->harga),
                'status_iklan' => set_value('status_iklan', $row->status_iklan),
                'deskripsi' => set_value('deskripsi', $row->deskripsi),
                'tgl_iklan' => set_value('tgl_iklan', $row->tgl_iklan),
                'verifikasi_iklan' => set_value('verifikasi_iklan', $row->verifikasi_iklan),
                'photo1' => set_value('photo1', $row->photo1),
            );


            $this->load->view('Template/Header');
            $this->load->view('Iklan/Tb_mobil_form', $data);
            $this->load->view('Template/Footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Iklan'));
        }
    }

   
}