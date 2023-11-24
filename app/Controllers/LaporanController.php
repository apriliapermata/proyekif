<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class LaporanController extends BaseController
{
    public function keuangan()
    {
        // Instansiasi model
        $LaporanModel = new LaporanModel();

        // Ambil total pendapatan dari model
        $total_pendapatan = $LaporanModel->getTotalPendapatan();

        // Kirim data ke view
        $data = [
            'total_pendapatan' => $total_pendapatan
        ];

        return view('pageskaryawan/laporan', $data);
    }
}
