<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 *
 * @property $id
 * @property $tarea_id
 * @property $titulo
 * @property $comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property Tarea $tarea
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comentario extends Model
{
    
    static $rules = [
		'tarea_id' => 'required',
		'titulo' => 'required',
		'comentario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tarea_id','titulo','comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarea()
    {
        return $this->hasOne('App\Models\Tarea', 'id', 'tarea_id');
    }
    

}
