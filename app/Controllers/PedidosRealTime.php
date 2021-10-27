<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RealTime;

class PedidosRealTime extends Controller{
    
    public function index() {
        $RealTime = new RealTime();

        $datos = $RealTime->orderBy('id', 'ASC')->findAll();

        return $datos[0]['estado'];
    }

    public function viewopen() {
        $RealTime = new RealTime();

        $datos['realtime'] = $RealTime->orderBy('id', 'ASC')->findAll();
        $datos['links'] = view('includes/links');
        $datos['navbar'] = view('includes/navbar');
        $datos['footer'] = view('includes/footer');

        if ($datos['realtime'][0]['estado'] == 1 || $datos['realtime'][0]['estado'] == '1'):
            return view('mostrarpedidos', $datos);
        else:
            return redirect()->to(base_url());
        endif;
    }

}