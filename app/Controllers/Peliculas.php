<?php

namespace App\Controllers;

use App\Models\PeliculasModel;
use App\Models\GeneroModel;
use App\Models\PopularidadModel;

class Peliculas extends BaseController
{
    public function getIndex(): string
    {
        $pelicula = model(PeliculasModel::class);
        $data['pelicula']=$pelicula->BuscarTodos(); 
        return view('peliculas/view', $data);
    }

    //obtiene los datos de GeneroModelo.php
    public function getNuevo(): string
    {   
        $genero=model(GeneroModel::class);
        $popularidad=model(PopularidadModel::class);

        $data['genero'] = $genero->obtenerGeneros();
        $data['popularidad'] = $popularidad->obtenerPopularidad(); 
        $data['error']=0;  
        return view('peliculas/new', $data);
    }

    public function guardar()
    {
    $peliculas= model(PeliculasModel::class);

    $datos = [
         'nombre' => $this->request->getPost('nombre'),  
         'id_genero' => $this->request->getPost('genero'),
         'puntuacion' => $this->request->getPost('puntuacion'),          
         'anio' => $this->request->getPost('anio'), 
         'id_popularidad' => $this->request->getPost('popularidad'), 
     ];

         $peliculas->insertar($datos);
         return view('peliculas/new');
    }

               
     
}