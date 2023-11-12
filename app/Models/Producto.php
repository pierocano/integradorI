<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallePedido[] $detallePedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
        'proveedor_id' => 'required',
    ];
    static $messages = [
        'nombre.required' => 'El campo nombre es obligatorio',
        'descripcion.required' => 'El campo descripcion es obligatorio',
        'precio.required' => 'El campo precio es obligatorio',
        'cantidad.required' => 'El campo cantidad es obligatorio',
        'proveedor_id.required' => 'El campo proveedor es obligatorio',
    ];


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion','precio','cantidad','proveedor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePedidos()
    {
        //!relacion de uno a muchos o de uno a uno
        //!el primer parametro es el modelo con el que se relaciona - es la ruta del modelo
        //!el segundo parametro es la llave foranea de la tabla relacionada
        //!el tercer parametro es la llave primaria de la tabla actual
        return $this->hasMany('App\Models\DetallePedido', 'producto_id', 'id');
    }


}
