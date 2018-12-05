<?php

namespace App\Repositories;

use App\Models\ArticleType_type;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleType_typeRepository
 * @package App\Repositories
 * @version December 5, 2018, 12:34 am UTC
 *
 * @method ArticleType_type findWithoutFail($id, $columns = ['*'])
 * @method ArticleType_type find($id, $columns = ['*'])
 * @method ArticleType_type first($columns = ['*'])
*/
class ArticleType_typeRepository extends BaseRepository
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
        return ArticleType_type::class;
    }
}
