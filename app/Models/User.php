<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version May 28, 2020, 2:39 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $administrativos
 * @property \Illuminate\Database\Eloquent\Collection $alumnos
 * @property \Illuminate\Database\Eloquent\Collection $catedraticos
 * @property \Illuminate\Database\Eloquent\Collection $proyectos
 * @property \Illuminate\Database\Eloquent\Collection $empresas
 * @property \Illuminate\Database\Eloquent\Collection $proyecto1s
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property integer $celular
 * @property integer $rol_id
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'celular',
        'rol_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'celular' => 'integer',
        'rol_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'celular' => 'required',
        'rol_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function administrativos()
    {
        return $this->hasMany(\App\Models\Administrativo::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function alumnos()
    {
        return $this->hasMany(\App\Models\Alumno::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function catedraticos()
    {
        return $this->hasMany(\App\Models\Catedratico::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function proyectos()
    {
        return $this->belongsToMany(\App\Models\Proyecto::class, 'comentario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empresas()
    {
        return $this->hasMany(\App\Models\Empresa::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function proyecto1s()
    {
        return $this->belongsToMany(\App\Models\Proyecto::class, 'postulacion');
    }
}
