<?php

namespace App\Repositories;

use App\Models\InventoryAdjustment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InventoryAdjustmentRepository
 * @package App\Repositories
 * @version December 8, 2018, 4:48 am UTC
 *
 * @method InventoryAdjustment findWithoutFail($id, $columns = ['*'])
 * @method InventoryAdjustment find($id, $columns = ['*'])
 * @method InventoryAdjustment first($columns = ['*'])
*/
class InventoryAdjustmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'current_amount',
        'amount',
        'final_amount',
        'date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InventoryAdjustment::class;
    }
}
