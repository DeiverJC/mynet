<?php

namespace App\Repositories;

use App\Models\ContractDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContractDetailRepository
 * @package App\Repositories
 * @version December 5, 2018, 12:54 am UTC
 *
 * @method ContractDetail findWithoutFail($id, $columns = ['*'])
 * @method ContractDetail find($id, $columns = ['*'])
 * @method ContractDetail first($columns = ['*'])
*/
class ContractDetailRepository extends BaseRepository
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
        return ContractDetail::class;
    }
}
