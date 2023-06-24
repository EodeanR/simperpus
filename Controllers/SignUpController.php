<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class SignUpController extends BaseController
{
    public function index()
    {
        return view('signup');
    }
    public function signup()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'agreement' => 'required',
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $adminModel = new AdminModel;
        $adminModel->insert($data);
        return redirect()->to('success');
    }
    public function success()
    {
        return view('signup_success');
    }
}
