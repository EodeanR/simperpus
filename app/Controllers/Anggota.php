<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AnggotaModel;
use CodeIgniter\HTTP\Request;
use Config\Services;

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
    public function rules()
    {
        $rules = [
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'telepon' => 'required|min_length[10]',
            'alamat' => 'required|min_length[5]',
        ];
        return $rules;
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
        return view('form/_anggota');
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
            return redirect()->to('/anggota/new')->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'nama' => $getData['nama'],
            'email' => $getData['email'],
            'telepon' => $getData['telepon'],
            'alamat' => $getData['alamat'],
        ];
        $anggotaModel = new AnggotaModel;
        $anggotaModel->insert($data);
        return redirect()->to('/anggota')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->model->where('id', $id)->first();
        return view('form/_anggota', ['data' => $data]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $anggota = $this->model;
        $getData = $this->request->getPost();
        $validation = Services::validation();
        $validation->setRules($this->rules());
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $anggota->where('id', $id)->set($getData)->update();
        return redirect()->to('/anggota')->with('success', 'Data berhasil diubah');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/anggota')->with('success', 'Data berhasil dihapus');
    }
}
