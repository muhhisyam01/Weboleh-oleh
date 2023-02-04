<?php

namespace App\Controllers;
use App\Models\KegiatanModel;
use App\Models\ProfilModel;


class Home extends BaseController
{
    protected $KegiatanModel;
    protected $ProfilModel;

    public function __construct()
     {
          $this->KegiatanModel = new KegiatanModel();
          $this->ProfilModel = new ProfilModel();
     }

    public function index()
    {
       $data = [
            'title' => 'home',
            'isi' => 'home',
            'profil' => $this->ProfilModel->get_profil()
       ];
        echo view('layout_user/wrapper.php',$data);
    }

    public function login()
    {
       
        return view('login.php');
    }

    // public function admin()
    // {
    //    echo 'halaman admin';
    // }
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
    public function Kegiatan()
    {
       $data = [
            'title' => 'Kegiatan',
            'isi' => 'layout_user/menu/Kegiatan.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }
    public function Shop()
    {
       $data = [
            'title' => 'Shop',
            'isi' => 'layout_user/menu/Shop.php',
       ];
        echo view('layout_user/wrapper.php',$data);
    }
    public function ShopDetail()
    {
       $data = [
            'title' => 'ShopDetail',
            'isi' => 'layout_user/menu/DetailShop.php',
       ];
        echo view('layout_user/wrapper.php',$data);
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
