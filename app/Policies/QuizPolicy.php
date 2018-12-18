<?php

namespace App\Policies;

use App\Models\Auth\User;
use App\Quiz;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuizPolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the quiz.
     *
     * @param  \App\Models\Auth\User  $user
     * @param  \App\Quiz  $quiz
     * @return mixed
     */
    public function view(User $user, Quiz $quiz)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can create quizzes.
     *
     * @param  \App\Models\Auth\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the quiz.
     *
     * @param  \App\Models\Auth\User  $user
     * @param  \App\Quiz  $quiz
     * @return mixed
     */
    public function update(User $user, Quiz $quiz)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the quiz.
     *
     * @param  \App\Models\Auth\User  $user
     * @param  \App\Quiz  $quiz
     * @return mixed
     */
    public function delete(User $user, Quiz $quiz)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can restore the quiz.
     *
     * @param  \App\Models\Auth\User  $user
     * @param  \App\Quiz  $quiz
     * @return mixed
     */
    public function restore(User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the quiz.
     *
     * @param  \App\Models\Auth\User  $user
     * @param  \App\Quiz  $quiz
     * @return mixed
     */
    public function forceDelete(User $user, Quiz $quiz)
    {
        //
    }
}
