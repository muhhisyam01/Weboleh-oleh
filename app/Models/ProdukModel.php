<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{

    protected $table = 'produk';
    protected $allowedFields = ['nama_produk', 'jenis_produk','stock', 'harga','gambar'];

    public function get_produk()
    {
        return $this->db->table('produk')->get()->getResultArray();
        
    }
}