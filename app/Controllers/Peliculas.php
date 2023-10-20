<?php

namespace App\Controllers;

use App\Models\PeliculasModel;
use App\Models\GeneroModel;

class Peliculas extends BaseController
{
    public function getIndex(): string
    {
        $pelicula = model(PeliculasModel::class);
        $data['pelicula']=$pelicula->BuscarTodos(); 
        return view('peliculas/view', $data);
    }

    public function getNuevo(): string
    {   
        $genero=model(GeneroModel::class);
        $data['genero'] = $genero->findAll(); 
        $data['error']=0;  
        return view('peliculas/new');
    }

               
     
}