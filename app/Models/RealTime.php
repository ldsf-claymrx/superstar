<?php 
namespace App\Models;

use CodeIgniter\Model;

class RealTime extends Model{
    protected $table      = 'realtime';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['estado','listanormal','listarapida','listaespera'];
}