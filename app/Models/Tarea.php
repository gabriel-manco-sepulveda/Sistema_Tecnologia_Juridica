<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $proyecto_id
 * @property $nombre
 * @property $descripcion
 * @property $alias
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Comentario[] $comentarios
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'proyecto_id' => 'required',
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
    protected $fillable = ['proyecto_id','nombre','descripcion','alias','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'tarea_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id', 'proyecto_id');
    }
    

}
