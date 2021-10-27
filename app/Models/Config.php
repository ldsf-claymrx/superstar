<?php 
namespace App\Models;

use CodeIgniter\Model;

class Config extends Model{
    protected $table      = 'configuraciones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['bannerOne','bannerTwo'];
}