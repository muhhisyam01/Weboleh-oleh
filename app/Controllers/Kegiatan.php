<?php

namespace App\Controllers;
// use App\Models\kegiatanModel;
use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
  protected $KegiatanModel;
  

  public function __construct()
  {
    $this->KegiatanModel = new KegiatanModel();
  }

    public function Kegiatan()
    {
       $data = [
            'title' => 'Halaman Kegiatan',
            'buka' => 'layout_admin/kegiatan/v_kegiatan',
            'kegiatan' => $this->KegiatanModel->get_kegiatan()
       ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function add_kegiatan()
    {
       $data = [
        'title' => 'Halaman Kegiatan',
        'buka' => 'layout_admin/kegiatan/add_kegiatan',
          ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function proses_Kegiatan ()
    {
      // dd($this->request->getVar());
      // dd($this->request->getFile('foto_1'));
      // dd($this->request->getFile('foto_2'));
      // dd($this->request->getFile('foto_3'));

      if(!$this->validate([
        'nama_kegiatan' => 'required',
        'deskripsi' => 'required',
          'foto_1' => [
          'rules' => 'uploaded[foto_1]|is_image[foto_1]|mime_in[foto_1,image/jpg,image/jpeg,image/png]',
          'errors' => [
            'uploaded' => 'pilih gambar terlebih dahulu',
            'is_image' => 'yang anda pilih buka gambar',
            'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
            ]
          ],
          'foto_2' => [
            'rules' => 'uploaded[foto_2]|is_image[foto_2]|mime_in[foto_2,image/jpg,image/jpeg,image/png]',
            'errors' => [
              'is_image' => 'yang anda pilih buka gambar',
              'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
              'uploaded' => 'gambar harus di pilih',
            ]
          ],
          
        // 'gambar_dp' => 'uploaded[gambar_dp]',
         
      ])) {
        // $validation = \Config\Services::validation();
        // dd($validation);
        return redirect()->back()->withInput(); 
      }
      // dd('berhasil');
      $foto_1 = $this->request->getFile('foto_1');
      $foto_2 = $this->request->getFile('foto_2');
      // $gambar_bk = $this->request->getFile('gambar_bk');
      // dd($gambar_bk);

      // pindahkan file kefolder img
      $foto_1->move('img/kegiatan');
      $foto_2->move('img/kegiatan');
      // ambil nama file 
      $foto_1 = $foto_1->getName();
      $foto_2 = $foto_2->getName();


      $this->KegiatanModel->save([
        'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
        'deskripsi' => $this->request->getVar('deskripsi'),
        'foto_1' => $foto_1,
        'foto_2' => $foto_2,
      ]);
      session()->setFlashdata('pesan', 'Data Kegiatan berhasil ditambahkan');
      return redirect()->to('/kegiatan');
    }

    public function detail_kegiatan($id_kegiatan)
    {
      $data = [
        'title' => 'Halaman Detail',
        'buka' => 'layout_admin/kegiatan/detail_kegiatan',
        'detail_kegiatan' => $this->KegiatanModel->edit_kegiatan($id_kegiatan),
   ];
    echo view('layout_admin/wrapper.php',$data);
    }

    public function delete_kegiatan($id_kegiatan)
    {
      $this->KegiatanModel->hapus($id_kegiatan);
      session()->setFlashdata('pesan', 'Data Kegiatan berhasil di Hapus');
      return redirect()->to('/kegiatan');
    }
    



    
    
}
