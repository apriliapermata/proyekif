<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'data_penjualan'; // Sesuaikan dengan nama tabel di database

    public function getTotalPendapatan()
    {
        $query = $this->db->query('SELECT SUM(hargaTotal) AS total_pendapatan FROM data_penjualan');
        return $query->getRow()->total_pendapatan;
    }
}
