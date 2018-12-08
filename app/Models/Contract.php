<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contract
 * @package App\Models
 * @version December 8, 2018, 5:51 am UTC
 *
 * @property \App\Models\Contact contact
 * @property \Illuminate\Database\Eloquent\Collection contractItem
 * @property integer contact_id
 * @property date start_date
 * @property date finish_date
 * @property integer status
 * @property integer payment_term
 */
class Contract extends Model
{
    use SoftDeletes;

    public $table = 'contracts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'contact_id',
        'start_date',
        'finish_date',
        'status',
        'payment_term'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'contact_id' => 'integer',
        'start_date' => 'date',
        'finish_date' => 'date',
        'status' => 'integer',
        'payment_term' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'start_date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contact()
    {
        return $this->belongsTo(\App\Models\Contact::class, 'contact_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function items()
    {
        return $this->belongsToMany(\App\Models\Item::class);
    }
}
