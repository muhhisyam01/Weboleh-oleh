<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{

    protected $table = 'produk';
    protected $allowedFields = ['nama_produk', 'jenis_produk','stock','harga','keterangan','gambar_1','gambar_2','gambar_3','gambar_4'];

    public function get_produk()
    {
        // return $this->db->table('produk')->get()->getResultArray();
        return  $this->db->table('produk')->orderBy('id_produk','desc')->get()->getResultArray();
        
    }

    public function edit_produk($id_produk)
    {
        return $this->db->table('produk')->where('id_produk',$id_produk)->get()->getRowArray();       
    }

    public function hapus($id_produk)
    {
        return $this->db->table('produk')->where('id_produk',$id_produk)->delete();       
    }

    public function update_produk($id_produk, $data)
    {
        return $this->db->table('produk')->where(['id_produk' => $id_produk])->set($data)->update();       
    }
}