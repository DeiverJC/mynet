<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contract
 * @package App\Models
 * @version December 5, 2018, 12:30 am UTC
 *
 * @property \App\Models\Contact contact
 * @property dateTime fecha_inicio
 * @property dateTime fecha_final
 * @property string terminos_pago
 * @property integer contactos_id
 */
class Contract extends Model
{
    use SoftDeletes;

    public $table = 'contracts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_inicio',
        'fecha_final',
        'terminos_pago',
        'contactos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_final' => 'datetime',
        'terminos_pago' => 'string',
        'contactos_id' => 'integer'
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
    public function contact()
    {
        return $this->belongsTo(\App\Models\Contact::class, 'contactos_id', 'id');
    }
}
