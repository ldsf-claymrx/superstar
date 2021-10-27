<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RealTime;
use App\Models\Config;

class Home extends Controller
{
    public function index()
    {
        $config = new Config();
        $datos['config'] = $config->orderBy('id', 'ASC')->first();
        
        $realtime = new RealTime();
        $datos['realtime'] = $realtime->orderBy('id','ASC')->first();
        
        $datos['links'] = view('includes/links');
        $datos['navbar'] = view('includes/navbar');
        $datos['footer'] = view('includes/footer');
        return view('home', $datos);
    }
}
