<?php

namespace App\Controllers;
// use App\Models\ServicesModel;
use App\Models\ServicesModel;

class Services_admin extends BaseController
{
  protected $ServicesModel;
  
  public function __construct()
  {
    $this->ServicesModel = new ServicesModel();
  }

    public function Services_admin()
    {
      // echo 'halaman services';
       $data = [
            'title' => 'Halaman Services',
            'buka' => 'layout_admin/Services/v_services',
            'Services' => $this->ServicesModel->get_Services()
       ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function add_Services()
    {
       $data = [
        'title' => 'Halaman Services',
        'buka' => 'layout_admin/Services/add_Services',
          ];
        echo view('layout_admin/wrapper.php',$data);
    }

    public function proses_Services ()
    {
      // dd($this->request->getVar());
      // dd($this->request->getFile('foto'));
      // dd($this->request->getFile('foto_2'));
      // dd($this->request->getFile('foto_3'));

      // if(!$this->validate([
      //   'nama_Services' => 'required',
      //   'deskripsi' => 'required',
      //     'foto' => [
      //     'rules' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
      //     'errors' => [
      //       'uploaded' => 'pilih gambar terlebih dahulu',
      //       'is_image' => 'yang anda pilih buka gambar',
      //       'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
      //       ]
      //     ],
      //     'foto_2' => [
      //       'rules' => 'uploaded[foto_2]|is_image[foto_2]|mime_in[foto_2,image/jpg,image/jpeg,image/png]',
      //       'errors' => [
      //         'is_image' => 'yang anda pilih buka gambar',
      //         'mime_in' => ' yang anda pilih bukan jpg,jpeg,png',
      //         'uploaded' => 'gambar harus di pilih',
      //       ]
      //     ],
          
      //   // 'gambar_dp' => 'uploaded[gambar_dp]',
         
      // ])) {
      //   $validation = \Config\Services::validation();
      //   dd($validation);
      //   return redirect()->back()->withInput(); 
      // }
      // dd('berhasil');
      $foto = $this->request->getFile('foto');
      // $foto_2 = $this->request->getFile('foto_2');
      // $gambar_bk = $this->request->getFile('gambar_bk');
      // dd($gambar_bk);

      // pindahkan file kefolder img
      $foto->move('img/services');
      // $foto_2->move('img/Services');
      // ambil nama file 
      $foto = $foto->getName();


      $this->ServicesModel->save([
        'nama_services' => $this->request->getVar('nama_services'),
        'deskripsi_services' => $this->request->getVar('deskripsi_services'),
        'foto' => $foto,
      ]);
      session()->setFlashdata('pesan', 'Data Services berhasil ditambahkan');
      return redirect()->to('/Services_admin');
    }

    public function detail_services($id_services)
    {
      $data = [
        'title' => 'Halaman Detail',
        'buka' => 'layout_admin/Services/detail_services',
        'detail_Services' => $this->ServicesModel->edit_Services($id_services),
   ];
    echo view('layout_admin/wrapper.php',$data);
    }

    public function delete_services($id_services)
    {

      $this->ServicesModel->hapus($id_services);
      session()->setFlashdata('pesan', 'Data Services berhasil di Hapus');
      return redirect()->to('/Services_admin');

      // $ServicesModel = new ServicesModel();

      // $data = $ServicesModel->find($id_Services);
      // echo $data['foto'];
      // $ambilFile = $data['foto'];
      // if(file_exists("img/Services".$ambilFile)){
      //   unlink("img/Services".$ambilFile);
      // }
      // $ServicesModel->delete($id_Services);
      // session()->setFlashdata('pesan', 'Data Services berhasil di Hapus');
      // return redirect()->to('/Services');
    }
    
}
