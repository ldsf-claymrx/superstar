<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Preguntas;

class Pregunta extends Controller{

    public function index() {

        $preguntas = new Preguntas();
        $datos['preguntas'] = $preguntas->orderBy('id','ASC')->findAll();

        $datos['links'] = view('includes/links');
        $datos['navbar'] = view('includes/navbar');
        $datos['footer'] = view('includes/footer');
        return view('preguntas', $datos);
    }

}