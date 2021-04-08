<?php
class Nominatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Memamnggil Model
        $this->load->model('M_Nominatif');
        // Cek Status Login
        if ($this->session->userdata('status') != "login") {
            redirect("Login");
        }
    }
    // Halaman Daftar Nominatif
    function index()
    {
        $data = array(
            'title' => 'Daftar Nominatif',
            'Proposal'     => $this->M_Nominatif->getAll()
        );
        $this->template->display('Nominatif/Daftar', $data);
    }
    // Halaman Tambah Nominatif
    function tambah()
    {
        $data = array('title' => 'Tambah Nominatif');
        $this->template->display('Nominatif/Tambah', $data);
    }
    // Fungsi Untuk menambah Nominatif
    function add()
    {
        $data = [
            'nomor'             => $this->input->post('nomor'),
            'nip'             => $this->input->post('nip'),
            'tgl'               => $this->input->post('tgl'),
            'tmpt'              => $this->input->post('tmpt'),
            'almt'              => $this->input->post('almt'),
            'jenis'             => $this->input->post('jenis'),
            'jumlah'            => $this->input->post('jumlah'),
            'nm_usaha'          => $this->input->post('nm_usaha'),
            'posisi'            => $this->input->post('posisi'),
            'nm_perusahaan'     => $this->input->post('nm_perusahaan'),
            'jn_usaha'          => $this->input->post('jn_usaha'),
            'ket'               => $this->input->post('ket')
        ];
        //kalau form diisi dengan benar maka simpan data ke table Nominatif
        $this->M_Nominatif->create($data);
        redirect('Nominatif');
    }
    // Update Nominatif
    function update()
    {
        $data = [
            'nama'         => $this->input->post('nama'),
            'nip'        => $this->input->post('nip'),
            'email'        => $this->input->post('email'),
            'jabatan'     => $this->input->post('jabatan'),
            'password'    => md5($this->input->post('password'))
        ];
        $where = ['nip'    => $this->input->post('nip')];
        //kalau form diisi dengan benar maka simpan data ke table user
        $this->M_Nominatif->update($data, $where);
        redirect('Nominatif');
    }
    // Menampilkan Halaman Detail Nominatif
    function edit($nomor = 0)
    {
        $data = array(
            'title' => 'Edit Nominatif',
            'akun' => $this->M_Nominatif->edit($nomor)
        );
        $this->template->display('Nominatif/Edit', $data);
    }
    // Menampilkan Halaman Detail Nominatif
    function cetak($nomor = 0)
    {
        $data = array(
            'title' => 'Edit Nominatif',
            'Nominatif' => $this->M_Nominatif->cetak($nomor)
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Daftar-Nominatif.pdf";
        $this->pdf->load_view('Nominatif/cetak', $data);
    }
    // Menghapus Nominatif
    public function delete($nomor)
    {
        $this->M_Nominatif->delete($nomor);
        redirect('Nominatif');
    }
}
