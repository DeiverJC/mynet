<?php

namespace App\Repositories;

use App\Models\Contact;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactRepository
 * @package App\Repositories
 * @version December 8, 2018, 3:49 am UTC
 *
 * @method Contact findWithoutFail($id, $columns = ['*'])
 * @method Contact find($id, $columns = ['*'])
 * @method Contact first($columns = ['*'])
*/
class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
