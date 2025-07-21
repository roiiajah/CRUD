<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nim', 'nama', 'prodi'];
    protected $useTimestamps    = true;
}