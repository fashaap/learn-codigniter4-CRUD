<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;

  protected $returnType = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = ['Nama_barang', 'Harga_barang', 'Gambar_barang', 'Deskripsi_barang'];


  public function getAllProducts()
  {
    return $this->db->table('products')->get();
  }

  public function createProducts($data)
  {
    return $this->db->table('products')->insert($data);
  }
}