<?php

namespace App\Repositories;

use App\Models\Proyecto;
use App\Repositories\BaseRepository;

/**
 * Class ProyectoRepository
 * @package App\Repositories
 * @version May 30, 2020, 12:18 am UTC
*/

class ProyectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_proyecto',
        'tipo_proyecto',
        'numeroparticipantes_proyecto',
        'tiempo_proyecto',
        'requisitos_proyecto',
        'descripcion_proyecto',
        'empresa_proyecto',
        'repempresa_id'
    ];
    
    protected $primaryKey ='id_proyecto';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proyecto::class;
    }
}
