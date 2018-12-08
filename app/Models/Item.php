<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version December 8, 2018, 4:30 am UTC
 *
 * @property boolean is_inventorial
 * @property string title
 * @property string refence_code
 * @property double sale_price
 * @property string description
 * @property integer tax
 * @property string unit_measure
 * @property double unit_price
 * @property integer initial_amount
 */
class Item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_inventorial',
        'title',
        'refence_code',
        'sale_price',
        'description',
        'tax',
        'unit_measure',
        'unit_price',
        'initial_amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_inventorial' => 'boolean',
        'title' => 'string',
        'refence_code' => 'string',
        'sale_price' => 'double',
        'description' => 'string',
        'tax' => 'integer',
        'unit_measure' => 'string',
        'unit_price' => 'double',
        'initial_amount' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'sale_price' => 'required',
        'tax' => 'required',
        'unit_measure' => 'required',
        'unit_price' => 'required'
    ];

    
}
