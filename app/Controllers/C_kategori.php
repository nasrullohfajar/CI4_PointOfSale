<?php

namespace App\Controllers;
use App\Models\M_kategori;

class C_kategori extends BaseController
{

    public function __construct(){

        $this->kategori = new M_kategori();
    }

    public function index()
    {
        $tombolCari = $this->request->getPost('tombolkategori');
        if (isset($tombolCari)) {
            $cari = $this->request->getPost('carikategori');
            session()->set('carikategori', $cari);
            redirect()->to('/kategori/V_datakategori');
        } else {
            $cari = session()->get('carikategori');
        }
       
        $dataKategori = $cari ? $this->kategori->cariData($cari) : $this->kategori;

        $noHalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'datakategori' => $dataKategori->paginate(10, 'kategori'),
            'pager' => $this->kategori->pager,
            'nohalaman' => $noHalaman,
            'cari' => $cari
        ];
        
        return view('kategori/V_datakategori', $data);
    }

    function formTambah()
    {
        if ($this->request->isAJAX()) {
            $aksi = $this->request->getPost('aksi');
            $msg = [
                'data' => view('kategori/modalformtambah', ['aksi' => $aksi])
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }

    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $namakategori = $this->request->getVar('namakategori');

            $this->kategori->insert([
                'kategori_nama' => $namakategori
            ]);

            $msg = [
                'sukses' => 'Kategori berhasil ditambahkan'
            ];
            echo json_encode($msg);
        }
    }

    function hapus()
    {
        if ($this->request->isAJAX()) {
            $idKategori = $this->request->getVar('idkategori');

            $this->kategori->delete($idKategori);

            $msg = [
                'sukses' => 'Kategori berhasil dihapus'
            ];
            echo json_encode($msg);
        }
    }

    function formEdit()
    {
        if ($this->request->isAJAX()) {
            $idKategori =  $this->request->getVar('idkategori');

            $ambildatakategori = $this->kategori->find($idKategori);
            $data = [
                'idkategori' => $idKategori,
                'namakategori' => $ambildatakategori['kategori_nama']
            ];

            $msg = [
                'data' => view('kategori/modalformedit', $data)
            ];
            echo json_encode($msg);
        }
    }

    function updatedata()
    {
        if ($this->request->isAJAX()) {
            $idKategori = $this->request->getVar('idkategori');
            $namaKategori = $this->request->getVar('namakategori');

            $this->kategori->update($idKategori, [
                'kategori_nama' => $namaKategori
            ]);

            $msg = [
                'sukses' =>  'Data kategori berhasil diupdate'
            ];
            echo json_encode($msg);
        }
    }
}