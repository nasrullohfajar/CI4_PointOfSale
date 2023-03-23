<?php

namespace App\Controllers;

class C_beranda extends BaseController
{
    public function index()
    {
        return view('layout/V_beranda');
    }
}
