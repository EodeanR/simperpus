<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ViewController extends BaseController
{
    public function v_dashboard()
    {
        return view('pages/dashboard');
    }
    public function v_admin()
    {
        return view('pages/admin');
    }
    public function v_kategori()
    {
        return view('pages/kategori');
    }
}
