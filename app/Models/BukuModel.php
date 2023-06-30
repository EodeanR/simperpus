<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_halaman', 'sinopsis'];
}
