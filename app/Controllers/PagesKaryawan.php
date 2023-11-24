<?php

namespace App\Controllers;

class PagesKaryawan extends BaseController
{
  

    public function menu()
    {
        $data = [
            'title' => 'Daftar Menu',
        ];

        return view('pageskaryawan/menu', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('pageskaryawan/laporan', $data);
    }

    public function pelanggan()
    {
        $data = [
            'title' => 'Daftar Pelanggan'
        ];
        return view('pageskaryawan/pelanggan', $data);
    }
}
