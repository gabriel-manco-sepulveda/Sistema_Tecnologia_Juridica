<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $alias
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Tarea[] $tareas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'alias' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','alias','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea', 'proyecto_id', 'id');
    }
    

}
