<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version December 5, 2018, 12:32 am UTC
 *
 * @property \App\Models\ArticleType articleType
 * @property \Illuminate\Database\Eloquent\Collection ContractDetail
 * @property integer tipo_art_id
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_art_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo_art_id' => 'integer'
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
    public function articleType()
    {
        return $this->belongsTo(\App\Models\ArticleType::class, 'tipo_art_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contractDetails()
    {
        return $this->hasMany(\App\Models\ContractDetail::class);
    }
}
