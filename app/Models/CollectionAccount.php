<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CollectionAccount
 * @package App\Models
 * @version December 6, 2018, 11:36 pm UTC
 *
 * @property \App\Models\Contract contract
 * @property integer contract_id
 * @property dateTime creation
 * @property dateTime expiration
 * @property double total
 * @property double paid
 * @property double to_pay
 * @property string state
 */
class CollectionAccount extends Model
{
    use SoftDeletes;

    public $table = 'collection_accounts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'contract_id',
        'creation',
        'expiration',
        'total',
        'paid',
        'to_pay',
        'state'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'contract_id' => 'integer',
        'creation' => 'datetime',
        'expiration' => 'datetime',
        'total' => 'double',
        'paid' => 'double',
        'to_pay' => 'double',
        'state' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contract_id' => 'required',
        'total' => 'required',
        'to_pay' => 'required',
        'state' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contract()
    {
        return $this->belongsTo(\App\Models\Contract::class, 'contract_id', 'id');
    }
}
