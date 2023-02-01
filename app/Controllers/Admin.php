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
      session();
      $data = [
        'title' => 'Halaman Tambah Produk',
        'buka' => 'layout_admin/tambah_produk',
        'validation' => \Config\Services::validation()
      ];
      echo view('layout_admin/wrapper.php',$data);
    }

    public function produk_proses()
    {
      // dd($this->request->getVar());
      // dd($this->request->getFile('gambar_bk'));
      
      if(!$this->validate([
        'nama_produk' => 'required',
        'jenis_produk' => 'required',
        'stock' => 'required',
        'harga' => 'required',
        'keterangan' => 'required',
        'gambar_1' => [
          'rules' => 'uploaded[gambar_1]|is_image[gambar_1]|mime_in[gambar_1,image/jpg,image/jpeg,image/png]',
          'errors' => [
            'uploaded' => 'pilih gambar terlebih dahulu',
            'is_image' => 'yang anda pilih buka gambar',
            'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
            ]
          ],
        'gambar_2' => [
            'rules' => 'uploaded[gambar_2]|is_image[gambar_2]|mime_in[gambar_2,image/jpg,image/jpeg,image/png]',
            'errors' => [
              'uploaded' => 'pilih gambar terlebih dahulu',
              'is_image' => 'yang anda pilih buka gambar',
              'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
              ]
            ],
        'gambar_3' => [
              'rules' => 'uploaded[gambar_3]|is_image[gambar_3]|mime_in[gambar_3,image/jpg,image/jpeg,image/png]',
              'errors' => [
                'uploaded' => 'pilih gambar terlebih dahulu',
                'is_image' => 'yang anda pilih buka gambar',
                'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
                ]
              ],
        'gambar_4' => [
                'rules' => 'uploaded[gambar_4]|is_image[gambar_4]|mime_in[gambar_4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                  'uploaded' => 'pilih gambar terlebih dahulu',
                  'is_image' => 'yang anda pilih buka gambar',
                  'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
                  ]
                ],
          
        // 'gambar_1' => 'uploaded[gambar_1]',
         
      ])) {
        // $validation = \Config\Services::validation();
        // dd($validation);
        return redirect()->back()->withInput(); 
      }
      // dd('berhasil');

      // ambil gambar

      $gambar_1 = $this->request->getFile('gambar_1');
      $gambar_2 = $this->request->getFile('gambar_2');
      $gambar_3 = $this->request->getFile('gambar_3');
      $gambar_4 = $this->request->getFile('gambar_4');
      // $gambar_bk = $this->request->getFile('gambar_bk');
      // dd($gambar_bk);

      // pindahkan file kefolder img
      $gambar_1->move('img/produk');
      $gambar_2->move('img/produk');
      $gambar_3->move('img/produk');
      $gambar_4->move('img/produk');
      // ambil nama file 
      $gambar_1 = $gambar_1->getName();
      $gambar_2 = $gambar_2->getName();
      $gambar_3 = $gambar_3->getName();
      $gambar_4 = $gambar_4->getName();

      $this->ProdukModel->save([
        'nama_produk' => $this->request->getVar('nama_produk'),
        'jenis_produk' => $this->request->getVar('jenis_produk'),
        'stock' => $this->request->getVar('stock'),
        'harga' => $this->request->getVar('harga'),
        'keterangan' => $this->request->getVar('keterangan'),
        'gambar_1' => $gambar_1,
        'gambar_2' => $gambar_2,
        'gambar_3' => $gambar_3,
        'gambar_4' => $gambar_4,
      ]);
      session()->setFlashdata('pesan', 'Data Produk berhasil ditambahkan');
      return redirect()->to('/produk');
    }

    public function detail_produk($id_produk)
    {
      $data = [
        'title' => 'Halaman Edit Produk',
        // 'produk' => $this->ProdukModel->edit_produk($id_produk),
        'produk_edit' => $this->ProdukModel->edit_produk($id_produk),
        'buka' => 'layout_admin/detail_produk',
        'validation' => \Config\Services::validation()
      ];
      echo view('layout_admin/wrapper.php',$data);
     
    }

    public function delete($id_produk)
    {
      $this->ProdukModel->hapus($id_produk);
      return redirect()->to('/produk');
     
    }

    // public function ubah($id_produk)
    // {
    //   $data = [
    //     'nama_produk' => $this->request->getVar('nama_produk'),
    //     'jenis_produk' => $this->request->getVar('jenis_produk'),
    //     'stock' => $this->request->getVar('stock'),
    //     'harga' => $this->request->getVar('harga'),
    //     'keterangan' => $this->request->getVar('keterangan'),
    //     'gambar_1' => $this->request->getVar('gambar_1'),
    //   ];
    //   $this->ProdukModel->update_produk($id_produk, $data);
    //   session()->setFlashdata('pesan', 'Data Produk berhasil ubah');
    //   return redirect()->to('/produk');
    // }

    



}
