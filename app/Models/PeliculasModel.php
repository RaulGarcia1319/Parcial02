<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculasModel extends Model
{
    protected $table      = 'pelicula';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType   = 'object';
  

    protected $allowedFields = ['nombre', 'id_genero', 'puntuacion', 'anio', 'id_popularidad'];

    protected $validationRules    = [
        'nombre' => 'required',        
    ];
    protected $validationMessages = [
        'nombre' => ['required' => 'ERROR: El Nombre es Obigatorio' ],       
    ];

    public function BuscarTodos(){
        $db = db_connect();       
        
        $builder = $db->table($this->table);
        $builder->select('pelicula.id, pelicula.nombre as name, genero.nombre, pelicula.puntuacion, pelicula.anio, popularidad.nombre as namePopu');
        $builder->join('genero', 'genero.id=pelicula.id_genero');
        $builder->join('popularidad', 'popularidad.id=pelicula.id_popularidad');
        $query = $builder->get();        
        return $query->getResult();
    }


    public function insertar($datos)
    {
        $Nombres = $this->db->table('pelicula');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }
    



}