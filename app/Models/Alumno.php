<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alumno
 * @package App\Models
 * @version May 28, 2020, 3:29 am UTC
 *
 * @property \App\Models\User $usuario
 * @property string $nombre_alumno
 * @property string $apellidos_alumno
 * @property string $domicilio_alumno
 * @property boolean $carrera_alumno
 * @property boolean $semestre_alumno
 * @property string $numcontrol_alumno
 * @property integer $usuario_id
 */
class Alumno extends Model
{
    use SoftDeletes;

    public $table = 'alumno';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_alumno';



    public $fillable = [
        'nombre_alumno',
        'apellidos_alumno',
        'domicilio_alumno',
        'carrera_alumno',
        'semestre_alumno',
        'numcontrol_alumno',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_alumno' => 'integer',
        'nombre_alumno' => 'string',
        'apellidos_alumno' => 'string',
        'domicilio_alumno' => 'string',
        'carrera_alumno' => 'string',
        'semestre_alumno' => 'integer',
        'numcontrol_alumno' => 'string',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_alumno' => 'required|min:2|max:36',
        'apellidos_alumno' => 'required|min:2|max:50',
        'domicilio_alumno' => 'required|min:10|max:140',
        'carrera_alumno' => 'required|max:40',
        'semestre_alumno' => ['required','regex:/^([1-9]|(1[0-8]))$/'],
        'numcontrol_alumno' => ['required','regex:/([A-Z]*[0-9]){8}/'],
        'usuario_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }
}
