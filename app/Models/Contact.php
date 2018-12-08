<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version December 8, 2018, 3:49 am UTC
 *
 * @property \App\Models\TypeContact typeContact
 * @property integer type_contact_id
 * @property string type_identification
 * @property integer indentification
 * @property string firstname
 * @property string lastname
 * @property string address
 * @property string state
 * @property string city
 * @property string cellphone
 * @property string phone
 * @property string email
 * @property string observations
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'type_contact_id',
        'type_identification',
        'indentification',
        'firstname',
        'lastname',
        'address',
        'state',
        'city',
        'cellphone',
        'phone',
        'email',
        'observations'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type_contact_id' => 'integer',
        'type_identification' => 'string',
        'indentification' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'address' => 'string',
        'state' => 'string',
        'city' => 'string',
        'cellphone' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'observations' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_contact_id' => 'required',
        'type_identification' => 'required',
        'indentification' => 'required',
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'state' => 'required',
        'city' => 'required',
        'cellphone' => 'required|min:10',
        'email' => 'email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function typeContact()
    {
        return $this->belongsTo(\App\Models\TypeContact::class, 'tipo_contacto_id', 'id');
    }
}
