<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 * @package App\Models
 * @version May 28, 2020, 3:29 am UTC
 *
 * @property \App\Models\User $usuario
 * @property \Illuminate\Database\Eloquent\Collection $proyectos
 * @property string $nombre_empresa
 * @property string $domicilio_empresa
 * @property string $giro_empresa
 * @property string $rfc_empresa
 * @property integer $usuario_id
 */
class Empresa extends Model
{
    use SoftDeletes;

    public $table = 'empresa';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey= 'id_empresa';



    public $fillable = [
        'nombre_empresa',
        'domicilio_empresa',
        'giro_empresa',
        'rfc_empresa',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_empresa' => 'integer',
        'nombre_empresa' => 'string',
        'domicilio_empresa' => 'string',
        'giro_empresa' => 'string',
        'rfc_empresa' => 'string',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_empresa' => 'required|min:2|max:60',
        'domicilio_empresa' => 'required|min:8|max:100',
        'giro_empresa' => ['required','min:5', 'max:60','regex:/^(([,|-]*)[A-Za-z]([,|-]*)){5,60}$/'],
        'rfc_empresa' => ['required','regex:/^[A-Z]{3,4}([A-Z]|[0-9]){9}$/'],
        'usuario_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function proyectos()
    {
        return $this->hasMany(\App\Models\Proyecto::class, 'empresa_id');
    }
}
