<?php

namespace App\Repositories;

use App\Models\InventoryAdjustment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InventoryAdjustmentRepository
 * @package App\Repositories
 * @version December 5, 2018, 7:22 pm UTC
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
