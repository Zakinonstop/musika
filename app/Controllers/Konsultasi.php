<?php

namespace App\Controllers;

use App\Models\KonsultasiModel;
use App\Models\KontakModel;

class Konsultasi extends BaseController
{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Pendampingan',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/pendampingan/pendampingan', $data);
    }
}
