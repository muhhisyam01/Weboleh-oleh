<?php

namespace App\Models;
use CodeIgniter\Model;

class ProfilModel extends Model
{

    protected $table = 'tb_profil';
    protected $allowedFields = ['nama_umkm', 'logo','slide_1','slide_2','slide_3'];

    public function get_profil()
    {
        return $this->db->table('tb_profil')->get()->getResultArray();
        
    }

    public function edit_profil($id_profil)
    {
        return $this->db->table('tb_profil')->where('id_profil',$id_profil)->get()->getRowArray();       
    }

    public function hapus($id_profil)
    {
        $this->db->table('tb_profil')->where('id_profil',$id_profil)->delete();       
    }

    public function update_profil($id_profil, $data)
    {
        return $this->db->table('tb_profil')->where(['id_profil' => $id_profil])->set($data)->update();       
    }
}