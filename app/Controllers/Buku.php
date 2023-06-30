<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;

class Buku extends ResourceController
{

    public function __construct()
    {
        $this->model = new BukuModel();
    }
    public function rules()
    {
        $rules = [
            'judul' => 'required|min_length[1]',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|max_length[4]',
            'jumlah_halaman' => 'required|numeric|min_length[1]',
            'sinopsis' => 'required|min_length[5]',
        ];
        return $rules;
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
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
        return view('form/_buku');
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
            return redirect()->to('/buku/new')->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'judul' => $getData['judul'],
            'pengarang' => $getData['pengarang'],
            'penerbit' => $getData['penerbit'],
            'tahun_terbit' => $getData['tahun_terbit'],
            'jumlah_halaman' => $getData['jumlah_halaman'],
            'sinopsis' => $getData['sinopsis'],
        ];
        $bukuModel = new BukuModel;
        $bukuModel->insert($data);
        return redirect()->to('/buku')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->model->where('id', $id)->first();
        return view('form/_buku', ['data' => $data]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $buku = $this->model;
        $getData = $this->request->getPost();
        $validation = Services::validation();
        $validation->setRules($this->rules());

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $buku->where('id', $id)->set($getData)->update();
        return redirect()->to('/buku')->with('success', 'Data berhasil diubah');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/buku')->with('success', 'Data berhasil dihapus');
    }
}
