<?php

namespace App\Repositories;

use App\Models\CollectionAccount;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CollectionAccountRepository
 * @package App\Repositories
 * @version December 6, 2018, 11:36 pm UTC
 *
 * @method CollectionAccount findWithoutFail($id, $columns = ['*'])
 * @method CollectionAccount find($id, $columns = ['*'])
 * @method CollectionAccount first($columns = ['*'])
*/
class CollectionAccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contract_id',
        'creation',
        'expiration',
        'total',
        'paid',
        'to_pay',
        'state'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CollectionAccount::class;
    }
}
