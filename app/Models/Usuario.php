<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $name
 * @property $correo
 * @property $contraseña
 * @property $fecha_nac
 * @property $genero
 * @property $busqueda
 * @property $interes
 * @property $created_at
 * @property $updated_at
 *
 * @property Foto[] $fotos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{

    static $rules = [
		'name' => 'required',
		'correo' => 'required',
		'contraseña' => 'required',
		'fecha_nac' => 'required',
		'busqueda' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','correo','contraseña','fecha_nac','genero','busqueda','interes','carrera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotos()
    {
        return $this->hasMany('App\Models\Foto', 'usuario_id', 'id');
    }


}
