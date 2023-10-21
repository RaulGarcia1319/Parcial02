<?php

namespace App\Models;

use CodeIgniter\Model;

class PopularidadModel extends Model
{
    protected $table      = 'popularidad';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType   = 'object';
  

    protected $allowedFields = ['nombre'];

    protected $validationRules    = [
        'nombre' => 'required',        
    ];
    protected $validationMessages = [
        'nombre' => ['required' => 'ERROR: El Nombre es Obigatorio' ],       
    ];

    public function BuscarTodos(){
        $db = db_connect();       
        
        $builder = $db->table($this->table);
        $builder->select('popularidad.id, popularidad.nombre as namePopu');

        $query = $builder->get();        
        return $query->getResult();
    }

    public function obtenerPopularidad() {
        $popularidadModel = model(PopularidadModel::class);
        return $popularidadModel->findAll();
    }

}