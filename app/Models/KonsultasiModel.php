<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table            = 'konsultasi';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'kontak', 'deskripsi', 'status'];
    protected $useTimestamps = true;
}
