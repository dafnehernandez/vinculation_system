<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Administrativo
 * @package App\Models
 * @version May 26, 2020, 9:32 pm UTC
 *
 * @property \App\Models\User $usuario
 * @property string $nombre_admin
 * @property string $apellidos_admin
 * @property string $rfc_admin
 * @property string $puesto_admin
 * @property integer $usuario_id
 */
class Administrativo extends Model
{
    use SoftDeletes;

    public $table = 'administrativo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    
    protected $primaryKey = 'id_admin';


    public $fillable = [
        'nombre_admin',
        'apellidos_admin',
        'rfc_admin',
        'puesto_admin',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_admin' => 'integer',
        'nombre_admin' => 'string',
        'apellidos_admin' => 'string',
        'rfc_admin' => 'string',
        'puesto_admin' => 'string',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_admin' => 'required|min:2|max:36',
        'apellidos_admin' => 'required|min:2|max:50',
        'rfc_admin' => ['required','regex:/^[A-Z]{3,4}([A-Z]|[0-9]){9}$/'],
        'puesto_admin' => 'required|min:5|max:45',
        'usuario_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }
    
   /* public function user(){
        return $this->belongsTo('App/Models/User');
    }
    */
}
