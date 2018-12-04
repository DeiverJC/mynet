<?php

namespace App\Repositories;

use App\Models\TypeContact;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TypeContactRepository
 * @package App\Repositories
 * @version December 4, 2018, 1:50 am UTC
 *
 * @method TypeContact findWithoutFail($id, $columns = ['*'])
 * @method TypeContact find($id, $columns = ['*'])
 * @method TypeContact first($columns = ['*'])
*/
class TypeContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TypeContact::class;
    }
}
