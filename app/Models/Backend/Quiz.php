<?php

namespace App\Models\Backend;
use App\Models\Backend\Traits\Attribute\QuizAttribute;
use App\Models\Backend\Traits\Scope\QuizScope;

use Eloquent as Model;

/**
 * Class Quiz
 * @package App\Models\Backend
 * @version December 16, 2018, 5:21 pm UTC
 *
 * @property \App\Models\Auth\User user
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property string title
 * @property string description
 * @property string teaser
 * @property boolean active
 * @property integer user_id
 * @property string img
 */
class Quiz extends Model
{
    use QuizAttribute, QuizScope;
    public $table = 'quizzes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'title',
        'description',
        'teaser',
        'user_id',
        'active',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'teaser' => 'string',
        'user_id' => 'integer',
        'active' => 'boolean',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function owner()
    {
        return $this->belongsTo(\App\Models\Auth\User::class);
    }
}
