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
            'title' => 'Implementasi',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/Implementasi/konsultasi', $data);
    }

    //     public function detailkonsultasi()
    //     {
    //         $data = [
    //             'title' => 'Detail Konsultasi',
    //             'konsultasi' => $this->KonsultasiModel->findAll(),
    //         ];
    //         return view('swevel/konsultasi/detail_konsultasi', $data);
    //     }
}
