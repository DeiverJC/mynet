<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeContact
 * @package App\Models
 * @version December 4, 2018, 1:50 am UTC
 *
 * @property string nombre
 * @property string observacion
 */
class TypeContact extends Model
{
    use SoftDeletes;

    public $table = 'type_contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
