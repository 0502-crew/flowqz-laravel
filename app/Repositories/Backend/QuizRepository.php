<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Quiz;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class QuizRepository
 * @package App\Repositories\Backend
 * @version December 16, 2018, 5:21 pm UTC
 *
 * @method Quiz findWithoutFail($id, $columns = ['*'])
 * @method Quiz find($id, $columns = ['*'])
 * @method Quiz first($columns = ['*'])
*/
class QuizRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'teaser',
        'active',
        'user_id',
        'img'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Quiz::class;
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            //->with('options')
            ->own()
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

}
