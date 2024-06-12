<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\UnidadesModel;
use App\Models\CategoriasModel;

class Productos extends BaseController
{
   protected $productos;

   public function __construct()
   {
      $this->productos = new ProductosModel();
      $this->unidades = new UnidadesModel();
      $this->categorias = new CategoriasModel();
   }

   public function index($activo = 1)
   {

      $productos = $this->productos->where('activo', $activo)->findAll();
      $data = [
         'titulo' => 'Productos', 'datos' => $productos   
      ];

      echo view('header');
      echo view('productos/productos', $data);
      echo view('footer');
   }

   public function eliminados($activo = 0)
   {

      $productos = $this->productos->where('activo', $activo)->findAll();
      $data = [
         'titulo' => 'Productos Eliminadas', 'datos' => $productos   
      ];

      echo view('header');
      echo view('productos/eliminados', $data);
      echo view('footer');
   }

   public function nuevo()
   {
      $unidades = $this->unidades->where('activo', 1)->findAll();
      $categorias = $this->categorias->where('activo', 1)->findAll();
    
      $data = [
         'titulo' => 'Agregar Producto' , 'unidades' => $unidades, 'categorias' => $categorias
      ];
      echo view('header');
      echo view('productos/nuevo', $data);
      echo view('footer');
   }

   
   public function insertar()

   {

      if ($this->request->getMethod() == "POST" && $this->validate([ 'nombre' => 'required', 'nombre_corto' => 'required'])) {
      $this->productos->save([ 
         'nombre' => $this->request->getPost('nombre'), 
         'nombre_corto' => $this->request->getPost('nombre_corto')
      ]);
      return redirect()->to(base_url() . 'productos');

   }else{
      $data = [
         'titulo' => 'Agregar Producto', 'validation' => $this->validator
      ];
      echo view('header');
      echo view('productos/nuevo', $data);
      echo view('footer');
   }
      
   }


   public function editar($id)
   {
      $unidad = $this->productos->where('id', $id)->first();
      $data = [
         'titulo' => 'Editar Producto', 'datos' => $unidad
      ];
      echo view('header');
      echo view('productos/editar', $data);
      echo view('footer');
   }


   public function actualizar()
   {
      $this->productos->update($this->request->getPost('id'), [
         'nombre' => $this->request->getPost('nombre'), 
         'nombre_corto' => $this->request->getPost('nombre_corto')
      ]);
      return redirect()->to(base_url() . 'productos');
   }



   public function eliminar($id)
   {
      $this->productos->update($id, ['activo' => 0]);
      return redirect()->to(base_url() . 'productos');
   }  


   public function reingresar($id)
   {
      $this->productos->update($id, ['activo' => 1]);
      return redirect()->to(base_url() . 'productos');
   }
   





}