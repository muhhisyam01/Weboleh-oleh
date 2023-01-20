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
    
}
