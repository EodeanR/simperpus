<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function auth()
    {
        $userModel = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $userModel->where('email', $email)->first();

        // if (!$user) {
        //     return redirect()->to(base_url('/login'))->with('error', 'Email tidak ditemukan!');
        // }
        // if (!password_verify($password, $user['password'])) {
        //     return redirect()->to(base_url('/login'))->with('error', 'Password Salah!');
        // }
        // session()->set([
        //     'user_id' => $user['id'],
        //     'email' => $user['email'],
        //     'logged_in' => true,
        // ]);
        if ($user['email'] == $email && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'email' => $user['email'],
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to(base_url('/login'))->with('error', 'Email/password salah!');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
