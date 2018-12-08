<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InventoryAdjustment
 * @package App\Models
 * @version December 8, 2018, 4:48 am UTC
 *
 * @property \App\Models\Item item
 * @property integer item_id
 * @property string adjustment_type
 * @property integer current_amount
 * @property integer amount
 * @property integer final_amount
 * @property timestamp date
 * @property string observations
 */
class InventoryAdjustment extends Model
{
    use SoftDeletes;

    public $table = 'inventory_adjustments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'item_id',
        'adjustment_type',
        'current_amount',
        'amount',
        'final_amount',
        'date',
        'observations'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_id' => 'integer',
        'adjustment_type' => 'string',
        'current_amount' => 'integer',
        'amount' => 'integer',
        'final_amount' => 'integer',
        'observations' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'adjustment_type' => 'required',
        'current_amount' => 'required',
        'amount' => 'required',
        'final_amount' => 'required',
        'date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class, 'item_id', 'id');
    }
}
