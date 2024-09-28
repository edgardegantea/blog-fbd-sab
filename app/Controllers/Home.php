<?php

namespace App\Controllers;
use App\Models\Publicacion;

class Home extends BaseController
{

    protected $publicacion;


    public function __construct() 
    {
        $this->publicacion = new Publicacion();
    }


    public function index()
    {
        // $publicaciones = $this->publicacion->findAll();

        $conexion = \Config\Database::connect();
        $publicaciones = $conexion->query('select p.*, concat(a.nombre, " ", a.apellido_paterno, " ", a.apellido_materno) as autor from publicaciones as p join usuarios as a on p.autor = a.id')->getResultArray();

        $data = [
            'publicaciones' => $publicaciones
        ];

        // dd($data);
        return view('publicaciones/index', $data);
    }
}
