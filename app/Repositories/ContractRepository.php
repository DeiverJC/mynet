<?php

namespace App\Repositories;

use App\Models\Contract;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContractRepository
 * @package App\Repositories
 * @version December 8, 2018, 5:51 am UTC
 *
 * @method Contract findWithoutFail($id, $columns = ['*'])
 * @method Contract find($id, $columns = ['*'])
 * @method Contract first($columns = ['*'])
*/
class ContractRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'start_date',
        'finish_date',
        'status',
        'payment_term'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contract::class;
    }
}
