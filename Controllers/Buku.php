<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BukuModel;

class Buku extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->model = new BukuModel();
    }
    public function index()
    {
        $dataBuku = $this->model->findAll();
        return view('pages/buku', ['buku' => $dataBuku]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('form/add_buku');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $getData = $this->request;
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|min_length[3]',
            'pengarang' => 'required|min_length[3]',
            'penerbit' => 'required|min_length[5]',
            'tahun' => 'required|min_length[4]|max_length[4]',
            'jumlah' => 'required|min_length[1]',
            'sinopsis' => 'required|min_length[10]',
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'judul' => $getData->getPost('judul'),
            'pengarang' => $getData->getPost('pengarang'),
            'penerbit' => $getData->getPost('penerbit'),
            'tahun_terbit' => $getData->getPost('tahun'),
            'jumlah_halaman' => $getData->getPost('halaman'),
            'sinopsis' => $getData->getPost('sinopsis'),
        ];
        $bukuModel = new BukuModel;
        $bukuModel->insert($data);
        return redirect()->to('buku')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
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
