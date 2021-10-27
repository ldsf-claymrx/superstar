<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Productos extends Controller{

    public function index()
    {
        $producto = new Producto();

        $datos['productos'] = $producto->orderBy('id','ASC')->findAll();

        $datos['links'] = view('includes/links');
        $datos['navbar'] = view('includes/navbar');
        $datos['footer'] = view('includes/footer');
        return view('productos', $datos);
    }

}