<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version December 4, 2018, 1:50 am UTC
 *
 * @property \App\Models\TypeContact typeContact
 * @property string tipo_identificacion
 * @property integer identificacion
 * @property string direccion
 * @property string ciudad
 * @property string departamento
 * @property integer tipo_contacto_id
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_identificacion',
        'identificacion',
        'direccion',
        'ciudad',
        'departamento',
        'tipo_contacto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo_identificacion' => 'string',
        'identificacion' => 'integer',
        'direccion' => 'string',
        'ciudad' => 'string',
        'departamento' => 'string',
        'tipo_contacto_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function typeContact()
    {
        return $this->belongsTo(\App\Models\TypeContact::class, 'tipo_contacto_id', 'id');
    }
}
