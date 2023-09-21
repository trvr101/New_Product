<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'table_products';
    protected $primaryKey       = 'ProductID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['ProductID', 'ProductName', 'ProductDescription', 'ProductCategory', 'ProductQuantity', 'ProductPrice'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function getProductsByCategory($category)
    {
        return $this->where('ProductCategory', $category)->findAll();
    }
    public function getProductById($id)
    {
        return $this->where('ProductID', $id)->first();
    }
}
