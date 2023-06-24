<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AnggotaModel;

class Anggota extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->model = new AnggotaModel();
    }
    public function index()
    {
        $dataAnggota = $this->model->findAll();
        return view('pages/anggota', ['anggota' => $dataAnggota]);
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
        return view('form/add_anggota');
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
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'telepon' => 'required|min_length[10]',
            'alamat' => 'required|min_length[5]',
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'nama' => $getData->getPost('nama'),
            'email' => $getData->getPost('email'),
            'telepon' => $getData->getPost('telepon'),
            'alamat' => $getData->getPost('alamat'),
        ];
        $anggotaModel = new AnggotaModel;
        $anggotaModel->insert($data);
        return redirect()->to('anggota')->with('success', 'Data Berhasil ditambahkan');
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
