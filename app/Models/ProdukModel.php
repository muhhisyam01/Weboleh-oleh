<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{

    // protected $table = 'produk';

    public function get_produk()
    {
        return $this->db->table('produk')->get()->getResultArray();
        
    }
}