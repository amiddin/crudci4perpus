<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\HTTP\Request;

class BukuController extends BaseController
{
  protected $BukuModel;
  public function __construct()
  {
    $this->BukuModel = new BukuModel();
  }
  public function index()
  {
    // Cari
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $this->BukuModel->search($keyword);
    } else {
      $this->BukuModel->getBuku();
    }

    $data = [
      'title' => 'Data Buku',
      'buku' => $this->BukuModel->getBuku()
    ];
    return view('BukuViews/index', $data);
  }

  public function delete($id)
  {
    $hapus = $this->BukuModel->hapus_buku($id);

    if ($hapus) {
      session()->setFlashdata('warning', 'Hapus Data Buku Berhasil');
      return redirect()->to('/BukuController/index');
    }
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah data',
    ];
    return view('BukuViews/create', $data);
  }

  public function store()
  {
    $judul = $this->request->getPost('judul');
    $penulis = $this->request->getPost('penulis');
    $tahunterbit = $this->request->getPost('tahunterbit');

    $data = [
      'judul' => $judul,
      'penulis' => $penulis,
      'tahunterbit' => $tahunterbit
    ];

    $simpan = $this->BukuModel->tambah_buku($data);

    if ($simpan) {
      session()->setFlashdata('success', 'Tambah Data Berhasil');

      return redirect()->to('/BukuController/index');
    }
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Edit Buku',
      'buku' => $this->BukuModel->getBuku($id)
    ];
    return view('BukuViews/edit', $data);
  }

  public function update($id)
  {
    $judul = $this->request->getPost('judul');
    $penulis = $this->request->getPost('penulis');
    $tahunterbit = $this->request->getPost('tahunterbit');

    $data = [
      'judul' => $judul,
      'penulis' => $penulis,
      'tahunterbit' => $tahunterbit
    ];

    $ubah = $this->BukuModel->ubah_buku($data, $id);

    if ($ubah) {
      session()->setFlashdata('info', 'Ubah Buku Berhasil');
      return redirect()->to('/BukuController/index');
    }
  }
  //--------------------------------------------------------------------
}
