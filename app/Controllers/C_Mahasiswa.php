<?php

namespace App\Controllers;

use App\Models\M_Mahasiswa;

class C_Mahasiswa extends BaseController
{
    public function index(): string
    {
        return view('view_display_mahasiswa');
    }

    public function display(): string
    {

        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->fetch();
        return view('view_display_mahasiswa', $data);
    }
}