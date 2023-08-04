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
 * @property $carrera
 * @property $created_at
 * @property $updated_at
 *
 * @property Foto[] $fotos
 * @package App
 * @property Coincidencia[] $coincidencias
 * @package App
 * @property Mensaje[] $mensajes
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
        'carrera' => 'required',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coincidencias()
    {
        return $this->hasMany('App\Models\Coincidencia', 'usuarioId1', 'id');
        return $this->hasMany('App\Models\Coincidencia', 'usuarioId2', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany('App\Models\Coincidencia', 'id1', 'id');
        return $this->hasMany('App\Models\Coincidencia', 'id2', 'id');
    }

}
