<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactType
 * @package App\Models
 * @version December 8, 2018, 3:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Contact
 * @property string title
 * @property string description
 */
class ContactType extends Model
{
    use SoftDeletes;

    public $table = 'contact_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contacts()
    {
        return $this->hasMany(\App\Models\Contact::class);
    }
}
