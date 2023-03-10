<?php

namespace App\Controllers;
use App\Models\KegiatanModel;
use App\Models\ProfilModel;
use App\Models\ProdukModel;
use App\Models\ServicesModel;


class Home extends BaseController
{
    protected $KegiatanModel;
    protected $ProfilModel;
    protected $ProdukModel;
    protected $ServicesModel;
    

    public function __construct()
     {
          $this->KegiatanModel = new KegiatanModel();
          $this->ProfilModel = new ProfilModel();
          $this->ProdukModel = new ProdukModel();
          $this->ServicesModel = new ServicesModel();
          
     }

    public function index()
    {
       $data = [
          'profil' => $this->ProfilModel->get_profil(),
          'Services' => $this->ServicesModel->get_Services(),
          'title' => 'home',
          'isi' => 'home',
            
       ];
        echo view('layout_user/wrapper.php',$data);
    }

    public function login()
    {
       
        return view('login.php');
    }

   
    public function About()
    {
       $data = [
            'title' => 'About',
            'isi' => 'layout_user/menu/About.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }

    public function Services()
    {
       $data = [
            'title' => 'Services',
            'Services' => $this->ServicesModel->get_Services(),
            'isi' => 'layout_user/menu/Services.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }

    public function  detail_services_user($id_services)
    {
       $data = [
            'title' => 'Services Detail',
            'services_detial' => $this->ServicesModel->edit_Services($id_services),
            'isi' => 'layout_user/menu/Services_detail.php',
       ];
        echo view('layout_user/wrapper.php',$data);

     echo 'hallow halaman services detail';
    }

    public function Kegiatan_Home()
    {
       $data = [
            'title' => 'Kegiatan',
            'kegiatan' =>$this->KegiatanModel->paginate(6, 'tb_kegiatan'),
            'pager' =>$this->KegiatanModel->pager,

            'tampil_kegiatan' => $this->KegiatanModel->get_kegiatan(),

            'isi' => 'layout_user/menu/Kegiatan.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }

    public function KegiatanDetail($id_kegiatan)
    {
       $data = [
            'title' => 'Kegiatan Detail',
            'kegiatan_detial' => $this->KegiatanModel->edit_kegiatan($id_kegiatan),
            'isi' => 'layout_user/menu/KegiatanDetail.php',
       ];
        echo view('layout_user/wrapper.php',$data);

     // echo 'Halaman Detail';
    }

    public function Shop()
    {
          
       $data = [
            'title' => 'Shop',
            'produk' =>$this->ProdukModel->paginate(9, 'produk'),
            'pager' =>$this->ProdukModel->pager,
            'isi' => 'layout_user/menu/Shop.php',
            
       ];
        echo view('layout_user/wrapper.php',$data);
    }


    public function ShopDetail($id_produk)
    {
       $data = [
            'title' => 'Shop Detail',
            'produk_detial' => $this->ProdukModel->edit_produk($id_produk),
            'isi' => 'layout_user/menu/ShopDetail.php',
       ];
        echo view('layout_user/wrapper.php',$data);

     // echo 'Halaman Detail';
    }
    public function Contact()
    {
       $data = [
            'title' => 'Contact',
            'isi' => 'layout_user/menu/Contact.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }
     
    // untuk tampilan Home
      
    
}