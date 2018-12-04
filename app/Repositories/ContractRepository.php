<?php

namespace App\Repositories;

use App\Models\Contract;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContractRepository
 * @package App\Repositories
 * @version December 4, 2018, 5:17 am UTC
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
        'fecha_inicio',
        'fecha_final',
        'terminos_pago'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contract::class;
    }
}
