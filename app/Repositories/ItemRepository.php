<?php

namespace App\Repositories;

use App\Models\Item;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ItemRepository
 * @package App\Repositories
 * @version December 5, 2018, 7:21 pm UTC
 *
 * @method Item findWithoutFail($id, $columns = ['*'])
 * @method Item find($id, $columns = ['*'])
 * @method Item first($columns = ['*'])
*/
class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_item',
        'title',
        'refence',
        'sale_price',
        'tax',
        'unit_measure',
        'unit_price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Item::class;
    }
}
