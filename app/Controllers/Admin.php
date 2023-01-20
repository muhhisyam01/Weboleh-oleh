<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function awal()
    {
          $data = [
            'title' => 'Halaman Awal admin',
            'buka' => 'layout_admin/admin',
      ];
          echo view('layout_admin/wrapper.php',$data);
    } 

    public function produk()
    {

      $data = [
        'title' => 'Halaman Awal produk',
        'buka' => 'layout_admin/produk',
      ];
      echo view('layout_admin/wrapper.php',$data);
    }
    
    public function tambah_produk()
    {
      $data = [
        'title' => 'Halaman Tambah Produk',
        'buka' => 'layout_admin/tambah_produk',
      ];
      echo view('layout_admin/wrapper.php',$data);
    }
}
