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
         return redirect()->to(base_url('peliculas/'));
    }

    public function eliminar($id=null)
    {
        //print_r($id);
        $peliculas= model(PeliculasModel::class);
        $peliculas->delete($id);

        return redirect()->to(base_url('peliculas/'));
       // return view('peliculas/eliminar');
    }

    public function editar($id=null)
    {
        
        $peliculas= model(PeliculasModel::class);
        $genero= model(GeneroModel::class);
        $popularidad= model(PopularidadModel::class);

        $registro['pelicula'] = $peliculas->find($id);
        $registro['genero'] = $genero->findAll();
        $registro['popularidad'] = $popularidad->findAll();
        $registro['genero_actual'] = $registro['pelicula']->id_genero;
        $registro['popularidad_actual'] = $registro['pelicula']->id_popularidad;

        //print_r($registro);
        return view('peliculas/edit', $registro);
    }

    public function actualizar()
    {
        
        $peliculas= model(PeliculasModel::class);
        $id = $_POST['id'];

        $datos = [
            'nombre' => $this->request->getPost('nombre'),  
            'id_genero' => $this->request->getPost('genero'),
            'puntuacion' => $this->request->getPost('puntuacion'),          
            'anio' => $this->request->getPost('anio'), 
            'id_popularidad' => $this->request->getPost('popularidad'), 
        ];

        $peliculas->update($id, $datos);
        return redirect()->to(base_url('peliculas/'));
        //print_r($_POST);
        //return view('peliculas/edit', $registro);
    }

               
     
}