<?php

namespace App\Models;
use CodeIgniter\Model;

class ServicesModel extends Model
{

    protected $table = 'tb_Services';
    protected $allowedFields = ['nama_services', 'deskripsi_services','foto'];

    public function get_Services()
    {
        return  $this->db->table('tb_Services')->orderBy('id_Services','desc')->get()->getResultArray();
    }

    public function edit_Services($id_services)
    {
        return $this->db->table('tb_Services')->where('id_services',$id_services)->get()->getRowArray();       
    }

    public function hapus($id_services)
    {
        $this->db->table('tb_Services')->where('id_Services',$id_services)->delete();
        // $this->db->table('tb_Services')->where('id_services',$id_services);       
         
    }

    
}