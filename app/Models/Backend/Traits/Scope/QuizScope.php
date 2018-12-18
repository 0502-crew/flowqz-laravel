<?php

namespace App\Models\Backend\Traits\Scope;

/**
 * Class QuizScope.
 */
trait QuizScope
{
    /**
     * @param $query
     * @param int $user_id
     *
     * @return mixed
     */
    public function scopeOwn($query, $user_id = null)
    {
        if (!$user_id) $user_id = auth()->user()->id;
        return $query->where('user_id', $user_id);
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        //return $query->where('active', $status);
    }
}
