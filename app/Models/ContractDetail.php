<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContractDetail
 * @package App\Models
 * @version December 5, 2018, 12:54 am UTC
 *
 * @property \App\Models\Contract contract
 * @property \App\Models\Article article
 * @property string plazos_pago
 * @property integer contrato_id
 * @property integer articulos_id
 * @property double valor_mensual
 * @property string iva
 */
class ContractDetail extends Model
{
    use SoftDeletes;

    public $table = 'contract_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'plazos_pago',
        'contrato_id',
        'articulos_id',
        'valor_mensual',
        'iva'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'plazos_pago' => 'string',
        'contrato_id' => 'integer',
        'articulos_id' => 'integer',
        'valor_mensual' => 'double',
        'iva' => 'string'
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
    public function contract()
    {
        return $this->belongsTo(\App\Models\Contract::class, 'contrato_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class, 'articulos_id', 'id');
    }
}
