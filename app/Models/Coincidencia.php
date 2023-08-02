<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coincidencia
 *
 * @property $id
 * @property $usuarioId1
 * @property $usuarioId2
 * @property $match1
 * @property $match2
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coincidencia extends Model
{

    static $rules = [
		'usuarioId1' => 'required',
		'usuarioId2' => 'required',
		'match1' => 'required',
		'match2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuarioId1','usuarioId2','match1','match2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarioId1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario2()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarioId2');
    }


}
