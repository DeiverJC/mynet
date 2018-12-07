<?php

namespace App\Repositories;

use App\Models\Contract;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContractRepository
 * @package App\Repositories
 * @version December 6, 2018, 11:19 pm UTC
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
        'term_payment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contract::class;
    }
}
