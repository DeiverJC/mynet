<?php

namespace App\Repositories;

use App\Models\ContactType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactTypeRepository
 * @package App\Repositories
 * @version December 5, 2018, 4:59 am UTC
 *
 * @method ContactType findWithoutFail($id, $columns = ['*'])
 * @method ContactType find($id, $columns = ['*'])
 * @method ContactType first($columns = ['*'])
*/
class ContactTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactType::class;
    }
}
