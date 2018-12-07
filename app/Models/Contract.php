<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contract
 * @package App\Models
 * @version December 6, 2018, 11:19 pm UTC
 *
 * @property \App\Models\Contact contact
 * @property dateTime start_date
 * @property dateTime finish_date
 * @property string term_payment
 * @property integer contact_id
 */
class Contract extends Model
{
    use SoftDeletes;

    public $table = 'contracts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'start_date',
        'finish_date',
        'term_payment',
        'contact_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime',
        'finish_date' => 'datetime',
        'term_payment' => 'string',
        'contact_id' => 'integer'
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
