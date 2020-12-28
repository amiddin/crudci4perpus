<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
  protected $table = 'buku';

  public function getBuku($id = false)
  {
    if ($id === false) {
      return $this->table('buku')
        ->get()
        ->getResultArray();
    } else {
      return $this->table('buku')
        ->where('id', $id)
        ->get()
        ->getRowArray();
    }
  }

  public function hapus_buku($id)
  {
    return $this->db->table($this->table)->delete(['id' => $id]);
  }

  public function tambah_buku($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function ubah_buku($data, $id)
  {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
  }

  public function search($keyword)
  {
    return $this->table('buku')->like('judul', $keyword);
  }
}
