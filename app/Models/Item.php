<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version December 5, 2018, 7:21 pm UTC
 *
 * @property string type_item
 * @property string title
 * @property string refence
 * @property double sale_price
 * @property string description
 * @property string tax
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
        'type_item',
        'title',
        'refence',
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
        'type_item' => 'string',
        'title' => 'string',
        'refence' => 'string',
        'sale_price' => 'double',
        'description' => 'string',
        'tax' => 'string',
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
        // 'type_item' => 'required',
        // 'title' => 'required',
        // 'sale_price' => 'required',
        // 'tax' => 'required',
        //'unit_measure' => 'required',
        //'unit_price' => 'required'
    ];

    
}
