<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneroModel extends Model
{
    protected $table      = 'genero';
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
        $builder->select('genero.id, genero.nombre as nombre, genero.descripcion, genero.creado');
        //$builder->join('genero', 'genero.id=pelicula.id_genero');
        //$builder->join('popularidad', 'popularidad.id=pelicula.id_popularidad');
        $query = $builder->get();        
        return $query->getResult();
    }

    public function insertar($datos)
    {
        $Nombres = $this->db->table('genero');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }

}