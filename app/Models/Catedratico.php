<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Catedratico
 * @package App\Models
 * @version May 28, 2020, 3:29 am UTC
 *
 * @property \App\Models\User $usuario
 * @property string $nombre_catedratico
 * @property string $apellidos_catedratico
 * @property string $especialidad_catedratico
 * @property string $rfc_catedratico
 * @property integer $usuario_id
 */
class Catedratico extends Model
{
    use SoftDeletes;

    public $table = 'catedratico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_catedratico';



    public $fillable = [
        'nombre_catedratico',
        'apellidos_catedratico',
        'especialidad_catedratico',
        'rfc_catedratico',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_catedratico' => 'integer',
        'nombre_catedratico' => 'string',
        'apellidos_catedratico' => 'string',
        'especialidad_catedratico' => 'string',
        'rfc_catedratico' => 'string',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_catedratico' => 'required|min:2|max:36',
        'apellidos_catedratico' => 'required|min:2|max:50',
        'especialidad_catedratico' => 'required|min:5|max:40',
        'rfc_catedratico' => ['required','regex:/[A-Z]{3}([A-Z]|[0-9]){9}/'],
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
