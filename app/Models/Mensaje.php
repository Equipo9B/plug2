<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $idmatch
 * @property $id1
 * @property $id2
 * @property $mensaje1
 * @property $mensaje2
 * @property $created_at
 * @property $updated_at
 *
 * @property Coincidencia $coincidencia
 * @property Usuario $usuario
 * @property Usuario $usuario
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{

    static $rules = [
		'idmatch' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idmatch','id1','id2','mensaje1','mensaje2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coincidencia()
    {
        return $this->hasOne('App\Models\Coincidencia', 'id', 'idmatch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario2()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user2()
    {
        return $this->hasOne('App\Models\User', 'id', 'id1');
    }


}
