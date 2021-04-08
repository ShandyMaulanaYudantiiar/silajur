<?php
class M_Nominatif extends CI_Model
{
    // Ambil semua data di akun kecuali divisi IT
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('nominatif');
        $query = $this->db->get()->result();
        return $query;
    }

    // Simpan nominatif ke database
    public function create($data)
    {
        return $this->db->insert('nominatif', $data);
    }

    // Menampilkan data Nominatif di detail
    public function edit($nomor)
    {
        return $this->db->get_where('nominatif', ['nomor' => $nomor])->row();
    }

    // Update Nominatif
    public function update($data, $where)
    {
        return $this->db->where($where)->replace('nominatif', $data);
    }

    // Menampilkan data Nominatif di detail
    public function cetak($nomor)
    {
        return $this->db->get_where('nominatif', ['nomor' => $nomor])->row();
    }

    // delete Nominatif
    public function delete($nomor)
    {
        return $this->db->where('nomor', $nomor)->delete('nominatif');
    }
}
