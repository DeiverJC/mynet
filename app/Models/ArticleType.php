<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArticleType
 * @package App\Models
 * @version December 5, 2018, 12:44 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Article
 * @property \Illuminate\Database\Eloquent\Collection InvoiceDetail
 * @property string nombre
 */
class ArticleType extends Model
{
    use SoftDeletes;

    public $table = 'article_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoiceDetails()
    {
        return $this->hasMany(\App\Models\InvoiceDetail::class);
    }
}
