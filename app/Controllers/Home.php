<?php

namespace App\Controllers;
use App\Models\KegiatanModel;
use App\Models\ProfilModel;
use App\Models\ProdukModel;


class Home extends BaseController
{
    protected $KegiatanModel;
    protected $ProfilModel;
    protected $ProdukModel;

    public function __construct()
     {
          $this->KegiatanModel = new KegiatanModel();
          $this->ProfilModel = new ProfilModel();
          $this->ProdukModel = new ProdukModel();
     }

    public function index()
    {
       $data = [
          'profil' => $this->ProfilModel->get_profil(),
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
            'isi' => 'layout_user/menu/Services.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }
    public function Kegiatan_Home()
    {
       $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $this->KegiatanModel->get_kegiatan(),
            'isi' => 'layout_user/menu/Kegiatan.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }


    public function Shop()
    {
       $data = [
            'title' => 'Shop',
            'produk' => $this->ProdukModel->get_produk(),
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