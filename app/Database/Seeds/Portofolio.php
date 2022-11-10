<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Portofolio extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'Frame 57.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'Frame 58.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'Frame 69.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'image 9.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'Gambar.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'poster.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'perpustakaan',
                'gambar' => 'poster2.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('portofolio')->insertBatch($data);
    }
}
