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
        $builder->select('genero.id, genero.nombre as nombre, genero.descripcion');
        //$builder->join('genero', 'genero.id=pelicula.id_genero');
        //$builder->join('popularidad', 'popularidad.id=pelicula.id_popularidad');
        $query = $builder->get();        
        return $query->getResult();
    }

    //inserta los datos en la tabla genero
    public function insertar($datos)
    {
        $Nombres = $this->db->table('genero');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }

    //obtiene los datos de la base de la tabla generos
    //esta funcion se llamara en la funcion getNuevo de Peliculas.php la cual se enviaran todos los datos hasta en select
    public function obtenerGeneros() {
        $generoModel = model(GeneroModel::class);
        return $generoModel->findAll();
    }


}