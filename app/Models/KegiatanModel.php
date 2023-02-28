<?php

namespace App\Models;
use CodeIgniter\Model;

class KegiatanModel extends Model
{

    protected $table = 'tb_kegiatan';
    protected $allowedFields = ['nama_kegiatan', 'deskripsi','tanggal','foto_1','foto_2'];

    public function get_kegiatan()
    {
        return  $this->db->table('tb_kegiatan')->orderBy('id_kegiatan','desc')->get()->getResultArray();
    }

    public function edit_kegiatan($id_kegiatan)
    {
        return $this->db->table('tb_kegiatan')->where('id_kegiatan',$id_kegiatan)->get()->getRowArray();       
    }

    public function hapus($id_kegiatan)
    {
        // $this->db->table('tb_kegiatan')->where('id_kegiatan',$id_kegiatan)->delete();
        $this->db->table('tb_kegiatan')->where('id_kegiatan',$id_kegiatan);       
         
    }

    
}