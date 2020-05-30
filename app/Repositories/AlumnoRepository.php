<?php

namespace App\Repositories;

use App\Models\Alumno;
use App\Repositories\BaseRepository;

/**
 * Class AlumnoRepository
 * @package App\Repositories
 * @version May 28, 2020, 3:29 am UTC
*/

class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_alumno',
        'apellidos_alumno',
        'domicilio_alumno',
        'carrera_alumno',
        'semestre_alumno',
        'numcontrol_alumno',
        'usuario_id'
    ];
    
    protected $primaryKey='id_alumno';

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
        return Alumno::class;
    }
}
