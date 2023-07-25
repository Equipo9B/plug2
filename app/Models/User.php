<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
}
