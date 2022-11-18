<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Training extends BaseController
{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }
    
    function url_get_contents($url) {
        if (!function_exists('curl_init')){ 
            die('CURL is not installed!');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    
    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Pelatihan',
            'category' => $category,
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/training/training', $data);
    }

    public function detailTraining($id)
    {
        $data = [
            'title' => 'Detail Pelatihan',
            'rincian' => json_decode($this->url_get_contents('https://stufast.id/api/course/detail/'.$id)),
            'pelatihan' => json_decode($this->url_get_contents('https://stufast.id/api/course/filter/training/2')),
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/training/detail_training', $data);
    }
}
