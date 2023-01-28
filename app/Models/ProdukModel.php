<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{

    protected $table = 'produk';
    protected $allowedFields = ['nama_produk', 'jenis_produk','stock','harga','keterangan','gambar_dp','gambar_bk','gambar_kr','gambar_kn','gambar_isi'];

    public function get_produk()
    {
        return $this->db->table('produk')->get()->getResultArray();
        
    }

    public function edit_produk($id_produk)
    {
        return $this->db->table('produk')->where('id_produk',$id_produk)->get()->getRowArray();       
    }

    public function hapus($id_produk)
    {
        return $this->db->table('produk')->where('id_produk',$id_produk)->delete();       
    }
}