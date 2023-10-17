<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class Peliculas extends BaseController
{
    public function getIndex(): string
    {
        return view('peliculas/view');
    }

    
}