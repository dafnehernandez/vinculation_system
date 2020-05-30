<?php

namespace App\Repositories;

use App\Models\Catedratico;
use App\Repositories\BaseRepository;

/**
 * Class CatedraticoRepository
 * @package App\Repositories
 * @version May 28, 2020, 3:29 am UTC
*/

class CatedraticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_catedratico',
        'apellidos_catedratico',
        'especialidad_catedratico',
        'rfc_catedratico',
        'usuario_id'
    ];
    
    protected $primaryKey = 'id_catedratico';
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
        return Catedratico::class;
    }
}
