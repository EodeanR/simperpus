<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('welcome');
        // return view('dashboard/index.php');
    }
}