<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // Read: Menampilkan semua data
    public function index()
    {
        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->findAll()
        ];
        return view('mahasiswa/index', $data);
    }

    // Create: Menampilkan form tambah data
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Mahasiswa'
        ];
        return view('mahasiswa/create', $data);
    }

    // Create: Menyimpan data baru
    public function store()
    {
        $this->mahasiswaModel->save([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/mahasiswa');
    }

    // Update: Menampilkan form edit data
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->find($id)
        ];
        return view('mahasiswa/edit', $data);
    }

    // Update: Memperbarui data
    public function update($id)
    {
        $this->mahasiswaModel->update($id, [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/mahasiswa');
    }

    // Delete: Menghapus data
    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/mahasiswa');
    }
}