<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_anggota', 'id_buku', 'tanggal_peminjaman', 'tanggal_pengembalian'];
    public function getPeminjaman()
    {
        return $this->db->table('peminjaman')
            ->join('anggota', 'anggota.id=peminjaman.id_anggota')
            ->join('buku', 'buku.id=peminjaman.id_buku')
            ->get()->getResultArray();
    }
}
