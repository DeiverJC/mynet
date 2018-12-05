<?php

namespace App\Repositories;

use App\Models\ArticleType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleTypeRepository
 * @package App\Repositories
 * @version December 5, 2018, 12:44 am UTC
 *
 * @method ArticleType findWithoutFail($id, $columns = ['*'])
 * @method ArticleType find($id, $columns = ['*'])
 * @method ArticleType first($columns = ['*'])
*/
class ArticleTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ArticleType::class;
    }
}
