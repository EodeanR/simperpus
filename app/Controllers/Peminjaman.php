<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\PeminjamanModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;

class Peminjaman extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->model = new PeminjamanModel();
    }
    public function rules()
    {
        $rules = [
            'anggota' => 'required',
            'buku' => 'required',
            'pinjam' => 'required',
            'kembali-asli' => 'required',
        ];
        return $rules;
    }
    public function index()
    {
        $dataPeminjaman = new PeminjamanModel;
        $peminjaman = $dataPeminjaman->getPeminjaman();
        return view('pages/peminjaman', ['peminjaman' => $peminjaman]);
    }

    /*
     *
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $dataPeminjaman = new PeminjamanModel;
        $peminjaman = $dataPeminjaman->where('id', $id)->getPeminjaman()[0];
        return view('pages/peminjaman-detail', ['peminjaman' => $peminjaman]);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $anggota = new AnggotaModel;
        $buku = new BukuModel;

        $dataAnggota = $anggota->findAll();
        $dataBuku = $buku->findAll();

        return view('form/_peminjaman', [
            'anggota' => $dataAnggota,
            'buku' => $dataBuku,
        ]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $getData = $this->request->getPost();
        $validation = Services::validation();
        $validation->setRules($this->rules());
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/peminjaman/new')->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'id_anggota' => $getData['anggota'],
            'id_buku' => $getData['buku'],
            'tanggal_peminjaman' => $getData['pinjam'],
            'tanggal_pengembalian' => $getData['kembali-asli'],
        ];
        $this->model->insert($data);
        return redirect()->to('/peminjaman')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $dataAnggota = new AnggotaModel;
        $dataBuku = new BukuModel;

        $anggota = $dataAnggota->findAll();
        $buku = $dataBuku->findAll();

        $dataPeminjaman = new PeminjamanModel;
        $peminjaman = $dataPeminjaman->where('id', $id)->getPeminjaman()[0];
        return view('form/_peminjaman', [
            'data' => $peminjaman,
            'anggota' => $anggota,
            'buku' => $buku,
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
