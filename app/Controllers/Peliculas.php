<?php

namespace App\Controllers;

use App\Models\PeliculasModel;

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
        $pelicula=model(PeliculasModel::class);
        $data['pelicula'] = $pelicula->findAll(); 
        $data['error']=0;  
        return view('peliculas/new');
    }

               
     
}