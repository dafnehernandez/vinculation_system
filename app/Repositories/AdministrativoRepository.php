<?php

namespace App\Repositories;

use App\Models\Administrativo;
use App\Repositories\BaseRepository;

/**
 * Class AdministrativoRepository
 * @package App\Repositories
 * @version May 26, 2020, 9:32 pm UTC
*/

class AdministrativoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_admin',
        'apellidos_admin',
        'rfc_admin',
        'puesto_admin',
        'usuario_id'
    ];
    
    protected $primaryKey = 'id_admin';

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
        return Administrativo::class;
    }
}
