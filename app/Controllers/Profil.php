<?php

namespace App\Controllers;
// use App\Models\ProdukModel;
use App\Models\ProfilModel;

class Profil extends BaseController
{
  protected $ProfilModel;
  

  public function __construct()
  {
    $this->ProfilModel = new ProfilModel();
  }

    public function profil()
    {
       $data = [
            'title' => 'Halaman Profil',
            'buka' => 'layout_admin/profil/v_profil',
            'profil' => $this->ProfilModel->get_profil()
       ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function add_profil()
    {
       $data = [
            'title' => 'Halaman Profil',
            'buka' => 'layout_admin/profil/add_profil',
            
       ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function proses_profil()
    {
      // dd($this->request->getFile('logo'));
      // dd($this->request->getFile('slide_1'));

        // if(!$this->validate([
        //     'nama_umkm' => 'required',
        //     'logo' => [
        //       'rules' => 'uploaded[logo]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
        //       'errors' => [
        //         'uploaded' => 'pilih gambar terlebih dahulu',
        //         'is_image' => 'yang anda pilih buka gambar',
        //         'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
        //         ]
        //       ],
        //       'slide_1' => [
        //         'rules' => 'uploaded[slide_1]|is_image[slide_1]|mime_in[slide_1,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //           'is_image' => 'yang anda pilih buka gambar',
        //           'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
        //           'uploaded' => 'gambar harus di pilih',
        //         ]
        //       ],
        //       'slide_2' => [
        //         'rules' => 'uploaded[slide_2]|is_image[slide_2]|mime_in[slide_2,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //           'is_image' => 'yang anda pilih buka gambar',
        //           'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
        //           'uploaded' => 'gambar harus di pilih',
        //         ]
        //       ],
        //       'slide_3' => [
        //         'rules' => 'uploaded[slide_3]|is_image[slide_3]|mime_in[slide_3,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //           'is_image' => 'yang anda pilih buka gambar',
        //           'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
        //           'uploaded' => 'gambar harus di pilih',
        //         ]
        //       ],
              
        //     // 'gambar_dp' => 'uploaded[gambar_dp]',
             
        //   ])) {
        //     $validation = \Config\Services::validation();
        //     dd($validation);
        //     return redirect()->back()->withInput(); 
        //   }
          // dd('berhasil');
    
          // ambil gambar
    
          $logo = $this->request->getFile('logo');
          $slide_1 = $this->request->getFile('slide_1');
          $slide_2 = $this->request->getFile('slide_2');
          $slide_3 = $this->request->getFile('slide_3');
          // $gambar_bk = $this->request->getFile('gambar_bk');
          // dd($gambar_bk);
    
          // pindahkan file kefolder img
          $logo->move('img/profil');
          $slide_1->move('img/profil');
          $slide_2->move('img/profil');
          $slide_3->move('img/profil');
          // ambil nama file 
          $logo = $logo->getName();
          $slide_1 = $slide_1->getName();
          $slide_2 = $slide_2->getName();
          $slide_3 = $slide_3->getName();
    
          $this->ProfilModel->save([
            'nama_umkm' => $this->request->getVar('nama_umkm'),
            'logo' => $logo,
            'slide_1' => $slide_1,
            'slide_2' => $slide_2,
            'slide_3' => $slide_3,
          ]);
          session()->setFlashdata('pesan', 'Data Produk berhasil ditambahkan');
          return redirect()->to('/profil');
    }
    // edit
    public function edit_profil($id_profil)
    {
       $data = [
            'title' => 'Halaman Edit',
            'buka' => 'layout_admin/profil/detail_profil',
            'profil_edit' => $this->ProfilModel->edit_profil($id_profil),
       ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function proses_ubah($id_profil)
    {
      // echo 'proses berhasil';

      // $logo = $this->request->getFile('logo');
      // $slide_1 = $this->request->getFile('slide_1');

      // $logo->move('img');
      // $slide_1->move('img');

      // $logo = $logo->getName();
      // $slide_1 = $slide_1->getName();

      // $data = [
      //   'nama_umkm' => $this->request->getVar('umkm'),
      //   'logo' => $logo,
      //   'slide_1' => $slide_1,
      // ];
      // $this->ProfilModel->update_profil($id_profil, $data);
      // session()->setFlashdata('pesan', 'Data Profil Berhasil Di Ubah');
      // return redirect()->to('/profil');
      
      
    }

    // hapus
    public function delete_profil($id_profil)
    {
      $this->ProfilModel->hapus($id_profil);
      session()->setFlashdata('pesan', 'Data Profil berhasil di Hapus');
      return redirect()->to('/profil');
     
    }



    
    
}
