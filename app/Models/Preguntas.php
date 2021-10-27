<?php 
namespace App\Models;

use CodeIgniter\Model;

class Preguntas extends Model{
    protected $table      = 'preguntas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['bootstrapid','pregunta','respuesta', 'collapseid'];
}