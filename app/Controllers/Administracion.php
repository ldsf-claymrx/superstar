<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RealTime;
use App\Models\Producto;
use App\Models\Preguntas;
use App\Models\Config;

class Administracion extends Controller{
    public function index() {

        $config = new Config();
        $datos['config'] = $config->orderBy('id', 'ASC')->first();

        $negocio = new RealTime();
        $datos['negociodatos'] = $negocio->orderBy('id', 'ASC')->first();

        $producto = new Producto();
        $datos['productos'] = $producto->orderBy('id','ASC')->findAll();

        $preguntas = new Preguntas();
        $datos['preguntas'] = $preguntas->orderBy('id','ASC')->findAll();

        $datos['links'] = view('/admin/links');
        $datos['navbar'] = view('/admin/navbar');

        return view('admin', $datos);
    }

    public function crear() {
        $datos['links'] = view('admin/links');
        $datos['navbar'] = view('/admin/navbar');

        return view('crearproducto', $datos);
    }

    public function crear_pregunta() {
        $datos['links'] = view('admin/links');
        $datos['navbar'] = view('/admin/navbar');

        return view('crearpregunta', $datos);
    }

    public function crear_banner() {
        $datos['links'] = view('admin/links');
        $datos['navbar'] = view('/admin/navbar');

        return view('crearbanner', $datos);
    }

    public function guardar() {
        $producto = new Producto();

        /*
        ===== Inavilitado por falla en imagenes ====
        if($imagen = $this->request->getFile('imagen')) {
            $nuevoNombre= $imagen->getRandomName();
            $imagen->move('../public/images', $nuevoNombre);
            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'descripcion' => $this->request->getVar('descripcion'),
                'precio' => $this->request->getVar('precio'),
                'imagen' => $nuevoNombre
            ];

            $producto->insert($datos);
        }*/

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio')
        ];

        $producto->insert($datos);

        return $this->response->redirect(base_url('admin/dashboard#productos'));
    }

    public function guardar_banner() {
        $config = new Config();

        if($bannerOne = $this->request->getFile('bannerOne')) {
            $NuevoNombreBannerOne= $bannerOne->getRandomName();
            $bannerOne->move('../public/images', $NuevoNombreBannerOne);
            
            if ($bannerTwo = $this->request->getFile('bannerTwo')) {
                $NuevoNombreBannerTwo = $bannerTwo->getRandomName();
                $bannerTwo->move('../public/images', $NuevoNombreBannerTwo);

                $datos = [
                    'bannerOne' => $NuevoNombreBannerOne,
                    'bannerTwo' => $NuevoNombreBannerTwo
                ];
            }

            $config->insert($datos);
        }
        return $this->response->redirect(base_url('admin/dashboard#configuraciones'));
    }

    public function guardar_pregunta() {
        $preguntas = new Preguntas();
        $datos = [
            'bootstrapid' => $this->request->getVar('bootstrapid'), 
            'pregunta' => $this->request->getVar('pregunta'),
            'respuesta' => $this->request->getVar('respuesta'),
            'collapseid' => $this->request->getVar('collapseid')
        ];
        $preguntas->insert($datos);
        return $this->response->redirect(base_url('admin/dashboard#preguntas'));
    }

    public function editar($id = null) {
        $producto = new Producto();
        $datos['producto'] = $producto->where('id', $id)->first();

        $datos['links'] = view('admin/links');
        $datos['navbar'] = view('admin/navbar');

        return view('editarproducto', $datos);
    }

    public function editar_pregunta($id = null) {
        $preguntas = new Preguntas();
        $datos['pregunta'] = $preguntas->where('id', $id)->first();
        
        $datos['links'] = view('admin/links');
        $datos['navbar'] = view('admin/navbar');

        return view('editarpregunta', $datos);
    }

    public function actualizar_negocio()
    {
        $negocio = new RealTime();

        $datos = [
            'estado' => $this->request->getVar('estado'),
            'listanormal' => $this->request->getVar('listanormal'),
            'listarapida' => $this->request->getVar('listarapida'),
            'listaespera' => $this->request->getVar('listaespera')
        ];
        $id = $this->request->getVar('id');
        $negocio->update($id, $datos);

        return $this->response->redirect(base_url('admin/dashboard'));
    }

    public function actualizar_banner() {
        $config = new Config();

        $validacion = $this->validate([
            'bannerOne' => [
                'uploaded[bannerOne]',
                'mime_in[bannerOne,image/jpg,image/jpeg,image/png]',
                'max_size[bannerOne, 4096]',
            ],

            'bannerTwo' => [
                'uploaded[bannerTwo]',
                'mime_in[bannerTwo,image/jpg,image/jpeg,image/png]',
                'max_size[bannerTwo, 4096]',
            ]
        ]);

        $id = $this->request->getVar('id');
        
        if ($validacion) {
            if($bannerOne = $this->request->getFile('bannerOne')) {

                $datosbanners = $config->where('id', $id)->first();
                $rutabannerOne = ('../public/images/'.$datosbanners['bannerOne']);
                unlink($rutabannerOne);
                
                $NuevoNombreBannerOne= $bannerOne->getRandomName();
                $bannerOne->move('../public/images', $NuevoNombreBannerOne);

                if ($bannerTwo = $this->request->getFile('bannerTwo')) {
                    $rutabannerTwo = ('../public/images/'.$datosbanners['bannerTwo']);
                    unlink($rutabannerTwo);

                    $NuevoNombreBannerTwo = $bannerTwo->getRandomName();
                    $bannerTwo->move('../public/images', $NuevoNombreBannerTwo);
                }
                
                $datos = [
                    'bannerOne' => $NuevoNombreBannerOne,
                    'bannerTwo' => $NuevoNombreBannerTwo
                ];

                $config->update($id, $datos);
            }
        }
        return $this->response->redirect(base_url('admin/dashboard#configuraciones'));

    }

    public function actualizar() {
        $producto = new Producto();

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio')
        ];
        $id = $this->request->getVar('id');
        $producto->update($id, $datos);

        /*$validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen, 4096]',
            ]
        ]);

        if ($validacion) {
            if($imagen = $this->request->getFile('imagen')) {

                $datosProducto = $producto->where('id', $id)->first();
                $ruta = ('../public/images/'.$datosProducto['imagen']);
                unlink($ruta);
                
                $nuevoNombre= $imagen->getRandomName();
                $imagen->move('../public/images', $nuevoNombre);
                
                $datos = ['imagen' => $nuevoNombre];
                $producto->update($id, $datos);
            }
        }*/
        return $this->response->redirect(base_url('admin/dashboard#productos'));
    }

    public function actualizar_pregunta() {
        $preguntas = new Preguntas();

        $datos = [
            'bootstrapid' => $this->request->getVar('bootstrapid'),
            'pregunta' => $this->request->getVar('pregunta'),
            'respuesta' => $this->request->getVar('respuesta'),
            'collapseid' => $this->request->getVar('collapseid')
        ];

        $id = $this->request->getVar('id');
        $preguntas->update($id, $datos);


        return $this->response->redirect(base_url('admin/dashboard#preguntas'));
        
    }

    public function eliminar($id = null)
    {
        $producto = new Producto();
        $datosProducto = $producto->where('id', $id)->first();

        /*$ruta = ('../public/images/'.$datosProducto['imagen']);
        unlink($ruta);*/

        $producto->where('id', $id)->delete();
        return $this->response->redirect(base_url('admin/dashboard#productos'));
    }

    public function eliminar_pregunta($id = null) {
        $preguntas = new Preguntas();
        $preguntas->where('id', $id)->delete();
        return $this->response->redirect(base_url('admin/dashboard#preguntas'));
    }
}