<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $data = [
            'title' => 'home',
            'isi' => 'home',
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
            'isi' => 'layout_user/menu/ShopDetail.php',
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
    
}
