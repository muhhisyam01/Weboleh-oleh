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
        'gambar_dp' => [
          'rules' => 'uploaded[gambar_dp]|is_image[gambar_dp]|mime_in[gambar_dp,image/jpg,image/jpeg,image/png]',
          'errors' => [
            'uploaded' => 'pilih gambar terlebih dahulu',
            'is_image' => 'yang anda pilih buka gambar',
            'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
            ]
          ],
          
        // 'gambar_dp' => 'uploaded[gambar_dp]',
         
      ])) {
        // $validation = \Config\Services::validation();
        // dd($validation);
        return redirect()->back()->withInput(); 
      }
      // dd('berhasil');

      // ambil gambar

      $gambar_dp = $this->request->getFile('gambar_dp');
      // $gambar_bk = $this->request->getFile('gambar_bk');
      // dd($gambar_bk);

      // pindahkan file kefolder img
      $gambar_dp->move('img');
      // $gambar_bk->move('img');
      // ambil nama file 
      $gambar_dp = $gambar_dp->getName();
      // $gambar_bk = $gambar_bk->getName();

      $this->ProdukModel->save([
        'nama_produk' => $this->request->getVar('nama_produk'),
        'jenis_produk' => $this->request->getVar('jenis_produk'),
        'stock' => $this->request->getVar('stock'),
        'harga' => $this->request->getVar('harga'),
        'keterangan' => $this->request->getVar('keterangan'),
        'gambar_dp' => $gambar_dp,
        // 'gambar_bk' => $gambar_bk,
        // 'gambar_bk' => $this->request->getFile('gambar_bk'),
        // 'gambar_kr' => $this->request->getFile('gambar_kr'),
        // 'gambar_kn' => $this->request->getFile('gambar_kn'),
        // 'gambar_isi' => $this->request->getFile('gambar_isi'),
      ]);
      session()->setFlashdata('pesan', 'Data Produk berhasil ditambahkan');
      return redirect()->to('/produk');
    }

    public function edit_produk($id_produk)
    {
      $data = [
        'title' => 'Halaman Edit Produk',
        // 'produk' => $this->ProdukModel->edit_produk($id_produk),
        'produk_edit' => $this->ProdukModel->edit_produk($id_produk),
        'buka' => 'layout_admin/edit_produk',
        'validation' => \Config\Services::validation()
      ];
      echo view('layout_admin/wrapper.php',$data);
     
    }

    public function delete($id_produk)
    {
      $this->ProdukModel->hapus($id_produk);
      return redirect()->to('/produk');
     
    }



}
