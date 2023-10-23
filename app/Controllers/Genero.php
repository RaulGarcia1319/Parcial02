<?php

namespace App\Controllers;

use App\Models\GeneroModel;

class Genero extends BaseController
{
    public function getIndex(): string
    {
        $genero = model(GeneroModel::class);
        $data['genero']=$genero->findAll(); 
        return view('genero/view', $data);
    }

    public function getNuevo(){ 
        $data['error']=0;             
        return view('genero/new', $data);
    }

    public function guardar()
    {
    $genero= model(GeneroModel::class);

    $datos = [
         'nombre' => $this->request->getPost('nombre'),  
         'descripcion' => $this->request->getPost('descripcion'),         
     ];

         $genero->insertar($datos);
         return redirect()->to(base_url('genero/'));
    }

    public function eliminar($id=null)
    {
        //print_r($id);
        $genero= model(GeneroModel::class);
        $genero->delete($id);

        return redirect()->to(base_url('genero/'));
       // return view('peliculas/eliminar');
    }


}




