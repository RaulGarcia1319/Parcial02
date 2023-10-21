<?php

namespace App\Controllers;

use App\Models\PopularidadModel;

class Popularidad extends BaseController
{
    public function getIndex(): string
    {
        $popularidad = model(PopularidadModel::class);
        $data['popularidad']=$popularidad->BuscarTodos(); 
        return view('popularidad/view', $data);
    }
}
