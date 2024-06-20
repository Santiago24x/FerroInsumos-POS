<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\UnidadesModel;
use App\Models\CategoriasModel;

class Productos extends BaseController
{
    protected $productos;
    protected $unidades;
    protected $categorias;
    protected $reglas;
    protected $reglas_actu;

    public function __construct()
    {
        $this->productos = new ProductosModel();
        $this->unidades = new UnidadesModel();
        $this->categorias = new CategoriasModel();

        helper(['form']);


        
        // Definir reglas de validación inicial
        $this->reglas = [
            'codigo' => [
                'rules' => 'required|is_unique[productos.codigo]',
                'errors' => [
                    'required' => 'El código es obligatorio',
                    'is_unique' => 'Ya existe un producto con este Código'
                ]
            ],
            'nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Nombre es obligatorio'
                ]
            ],
            'id_unidad' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'La Unidad es obligatoria'
                ]
            ],
            'id_categoria' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'La Categoria es obligatoria'
                ]
            ],
            'precio_venta' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Precio Venta es obligatorio'
                ]
            ],
            'precio_compra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Precio Compra es obligatorio'
                ]
            ],
            'stock_minimo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Stock Mínimo es obligatorio'
                ]
            ],
            'inventariable' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Inventario es obligatorio'
                ]
            ]
        ];

        $this ->reglas_actu = [
            'codigo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El código es obligatorio'
                ]
            ],
            'nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Nombre es obligatorio'
                ]
            ],
            'id_unidad' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'La Unidad es obligatoria'
                ]
            ],
            'id_categoria' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'La Categoria es obligatoria'
                ]
            ],
            'precio_venta' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Precio Venta es obligatorio'
                ]
            ],
            'precio_compra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Precio Compra es obligatorio'
                ]
            ],
            'stock_minimo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Stock Mínimo es obligatorio'
                ]
            ],
            'inventariable' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El Inventario es obligatorio'
                ]
            ]
        ];
    }

    public function index($activo = 1)
    {
        $productos = $this->productos->where('activo', $activo)->findAll();
        $data = [
            'titulo' => 'Productos',
            'datos' => $productos
        ];

        echo view('header');
        echo view('productos/productos', $data);
        echo view('footer');
    }

    public function eliminados($activo = 0)
    {
        $productos = $this->productos->where('activo', $activo)->findAll();
        $data = [
            'titulo' => 'Productos Eliminados',
            'datos' => $productos
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
            'titulo' => 'Agregar Producto',
            'unidades' => $unidades,
            'categorias' => $categorias
        ];

        echo view('header');
        echo view('productos/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        if ($this->request->getMethod() == "POST" && $this->validate($this->reglas)) {
            $this->productos->save([
                'codigo' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'inventariable' => $this->request->getPost('inventariable'),
                'id_unidad' => $this->request->getPost('id_unidad'),
                'id_categoria' => $this->request->getPost('id_categoria')
            ]);
            return redirect()->to(base_url() . 'productos');
        } else {
            $unidades = $this->unidades->where('activo', 1)->findAll();
            $categorias = $this->categorias->where('activo', 1)->findAll();
            $data = [
                'titulo' => 'Agregar Producto',
                'unidades' => $unidades,
                'categorias' => $categorias,
                'validation' => $this->validator
            ];

            echo view('header');
            echo view('productos/nuevo', $data);
            echo view('footer');
        }
    }

    public function editar($id, $valid=null)
    {
        $unidades = $this->unidades->where('activo', 1)->findAll();
        $categorias = $this->categorias->where('activo', 1)->findAll();
        $producto = $this->productos->where('id', $id)->first();

        if ($valid != null) {
            $data = [
                'titulo' => 'Editar Producto',
                'unidades' => $unidades,
                'categorias' => $categorias,
                'producto' => $producto,
                'validation' => $valid
            ];
        } else {
            $data = [
                'titulo' => 'Editar Producto',
                'unidades' => $unidades,
                'categorias' => $categorias,
                'producto' => $producto
            ];
        }

        echo view('header');
        echo view('productos/editar', $data);
        echo view('footer');
    }

    public function actualizar()
    {
        if ($this->request->getMethod() == "POST" && $this->validate($this->reglas_actu)) {
            $this->productos->update($this->request->getPost('id'), [
                'codigo' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'inventariable' => $this->request->getPost('inventariable'),
                'id_unidad' => $this->request->getPost('id_unidad'),
                'id_categoria' => $this->request->getPost('id_categoria')
            ]);
            return redirect()->to(base_url() . 'productos');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
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

