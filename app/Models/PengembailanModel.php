<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembailanModel extends Model
{
    protected $table            = 'pengembalian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_peminjaman', 'tanggal_pengembalian', 'denda'];
}
