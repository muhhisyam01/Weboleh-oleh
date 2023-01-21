<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Admin extends BaseController
{

  protected $ProdukModel;

  public function __construct()
  {
    $this->ProdukModel = new ProdukModel();
  }


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
        'title' => 'Halaman Produk',
        'produk' => $this->ProdukModel->get_produk(),
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
