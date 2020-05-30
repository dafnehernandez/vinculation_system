<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proyecto
 * @package App\Models
 * @version May 30, 2020, 12:18 am UTC
 *
 * @property \App\Models\User $repempresa
 * @property \Illuminate\Database\Eloquent\Collection $user1s
 * @property \Illuminate\Database\Eloquent\Collection $user2s
 * @property string $nombre_proyecto
 * @property string $tipo_proyecto
 * @property integer $numeroparticipantes_proyecto
 * @property integer $tiempo_proyecto
 * @property string $requisitos_proyecto
 * @property string $descripcion_proyecto
 * @property string $empresa_proyecto
 * @property integer $repempresa_id
 */
class Proyecto extends Model
{
    use SoftDeletes;

    public $table = 'proyecto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_proyecto';



    public $fillable = [
        'nombre_proyecto',
        'tipo_proyecto',
        'numeroparticipantes_proyecto',
        'tiempo_proyecto',
        'requisitos_proyecto',
        'descripcion_proyecto',
        'empresa_proyecto',
        'repempresa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_proyecto' => 'integer',
        'nombre_proyecto' => 'string',
        'tipo_proyecto' => 'string',
        'numeroparticipantes_proyecto' => 'integer',
        'tiempo_proyecto' => 'integer',
        'requisitos_proyecto' => 'string',
        'descripcion_proyecto' => 'string',
        'empresa_proyecto' => 'string',
        'repempresa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_proyecto' => 'required|max:80',
        'tipo_proyecto' => 'required|min:5|max:35',
        'numeroparticipantes_proyecto' => ['required','regex:/^[1-9]$/'],
        'tiempo_proyecto' => ['required','regex:/^([1-9]|[1-4][0-9]|5[1-2]){1,2}$/'],
        'requisitos_proyecto' => 'required|min:10|max:140',
        'descripcion_proyecto' => 'required|min:10|max:140',
        'empresa_proyecto' => 'required|min:2|max:60',
        'repempresa_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function repempresa()
    {
        return $this->belongsTo(\App\Models\User::class, 'repempresa_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function user1s()
    {
        return $this->belongsToMany(\App\Models\User::class, 'comentario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function user2s()
    {
        return $this->belongsToMany(\App\Models\User::class, 'postulacion');
    }
}
