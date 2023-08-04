<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        $menu = [
            'berenda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
            ],
            'karyawan' => [
                'title' => 'karyawan',
                'link' => base_url() . '/karyawan',
                'icon' => 'fa-solid fa-users',
                'aktif' => '',
            ],
            'Buku' => [
                'title' => 'Buku',
                'link' => base_url() .'/Buku',
                'icon' => 'fa-solid fa-table-list',
                'aktif' => '',
            ],
            'Transaksi' => [
                'title' => 'Transaksi',
                'link' => base_url() . '/Transaksi',
                'icon' => 'fa-solid fa-money-check',
                'aktif' => 'active',
            ],
            'Penulis' => [
                'title' => 'Penulis',
                'link' => base_url() . '/Penulis',
                'icon' => 'fa-solid fa-pencil',
                'aktif' => '',
            ],
            'Kategori' => [
                'title' => 'Kategori',
                'link' => base_url() . '/Kategori',
                'icon' => 'fa-solid fa-check-to-slot',
                'aktif' => '',
            ],
            'Penerbit' => [
                'title' => 'Penerbit',
                'link' => base_url() . '/Penerbit',
                'icon' => 'fa-solid fa-images',
                'aktif' => '',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Kategori</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="' . base_url() .'">Beranda</a></li>
                                <li class="breadcrumb-item active">Kategori</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data Kategori";
            return view('Kategori/content', $data);
    
    }
}