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
    public function edit($nip)
    {
        return $this->db->get_where('nominatif', ['nip' => $nip])->row();
    }

    // Update Nominatif
    public function update($data, $where)
    {
        return $this->db->where($where)->replace('nominatif', $data);
    }

    // delete Nominatif
    public function delete($nip)
    {
        return $this->db->where('nip', $nip)->delete('nominatif');
    }
}
